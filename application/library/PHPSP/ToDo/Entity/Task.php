<?php
namespace PHPSP\ToDo\Entity;

class Task
{
    protected $id;
    protected $title;
    protected $description;
    protected $done = false;

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    public function setDone()
    {
        $this->done = true;
    }

    public function setUndone()
    {
        $this->done = false;
    }

    public function isDone()
    {
        return $this->done;
    }

}