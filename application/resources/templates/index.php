<div class="ui grid">
    <div class="eight wide column">
        <div class="ui form" id="task-list">
            <?php foreach ($render['tasks'] as $task): ?>
                <div class="inline field">
                    <div class="ui checkbox">
                        <input type="checkbox" id="done-<?= $task->getId(); ?>" <?= $task->isDone()?'checked':''; ?>/>
                        <label for="done-<?= $task->getId(); ?>"
                               class="<?= $task->isDone()?'task-done':''; ?>"
                               title="<?= $task->getDescription(); ?>">
                            <?= $task->getTitle(); ?>
                        </label>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php if (isset($_SESSION['success'])): ?>
    <div class="ui <?= $_SESSION['success'] ? 'success' : 'error' ?> message">
        <i class="close icon"></i>
        <div><?= $_SESSION['success'] ? 'Tarefa Criada' : 'Ocorreu um erro na operação' ?></div>
    </div>
    <?php unset($_SESSION['success']); ?>
<?php endif; ?>
<form method="post" action="/task/done" style="display: none" id="change-task">
    <input type="hidden" name="task-id" id="task-id"/>
</form>