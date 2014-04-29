<?php
namespace PHPSP\ToDo\Service;

class Render implements \ArrayAccess
{
    protected static $basePath;
    protected static $main;
    protected $variables = [];
    protected $template = '';
    protected $templateName = '';
    protected $headers = [
        'Content-Type' => 'text/html'
    ];

    /**
     * @param mixed $basePath
     */
    public static function setBasePath($basePath)
    {
        self::$basePath = $basePath;
    }

    /**
     * @return mixed
     */
    public static function getBasePath()
    {
        return self::$basePath;
    }


    /**
     * @param $template
     * @throws \InvalidArgumentException
     */
    function __construct($template)
    {
        $this->templateName = $template;
        $template = self::$basePath.DIRECTORY_SEPARATOR.$template.'.php';
        if (!$this->validateTemplate($template)) {
            throw new \InvalidArgumentException("Not a valid template: " . $template);
        }
        $this->template = $template;
        if(!self::$main){
            self::$main = $this;
        }
    }


    public function validateTemplate($template)
    {
        if (file_exists($template)) {
            return true;
        }
        return false;
    }

    public function offsetExists($offset)
    {
        return isset(self::$main->variables[$offset]);
    }

    public function offsetGet($offset)
    {
        if (isset(self::$main->variables[$offset])) {
            return self::$main->variables[$offset];
        }
    }

    public function offsetSet($offset, $value)
    {
        self::$main->variables[$offset] = $value;
    }

    public function offsetUnset($offset)
    {
        if (isset(self::$main->variables[$offset])) {
            unset(self::$main->variables[$offset]);
        }
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->templateName;
    }

    public function __invoke()
    {
        ob_start();
        $render = self::$main;
        require $this->template;
        $output = ob_get_clean();
    //    ob_end_clean();
        return $output;
    }


}