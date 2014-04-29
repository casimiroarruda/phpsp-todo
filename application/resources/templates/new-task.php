<div style="height: 50px"></div>
<h1>Nova tarefa</h1>
<div class="two column stackable ui grid">
    <div class="column">
        <form class="ui form segment" method="post" action="/task">
            <div class="field">
                <label>Título</label>
                <input placeholder="Título" name="title" type="text"/>
            </div>
            <div class="field">
                <label>Descrição</label>
                <textarea name="description"></textarea>
            </div>
            <button class="ui blue button">Salvar</button>
        </form>
    </div>
    <div class="column">
        <div class="ui segment">Cadastre sua nova tarefa</div>
    </div>
</div>
