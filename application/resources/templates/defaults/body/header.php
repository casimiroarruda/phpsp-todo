<div class="ui fixed main pointing menu">
    <a class="<?=$render['content']->getName() == 'index'?'active ':''?>item" href="/">
        <i class="checkmark sign icon"></i><?=$render['title'] ?>
    </a>
    <a class="<?=$render['content']->getName() == 'new-task'?'active ':''?>item" href="/new"><i class="add icon"></i>Nova tarefa</a>
    <div class="right menu">
        <a href="https://plus.google.com/+GdgspOrg">
            <div class="item middle" style="background: url(images/gdg-logo.png) no-repeat 1px">
                <div style="width: 15px">&nbsp;</div>
            </div>
        </a>
        <a href="http://phpsp.org.br">
            <div class="item middle" style="background: url(images/phpsp-logo.png) no-repeat">
                <div style="width: 15px">&nbsp;</div>
            </div>
        </a>
    </div>
</div>