<h3>Edição de páginas</h3>

<form action="" method="post">

    <div class="form-group">
        <label for="pagesTitle">Título</label>
        <input name="title" id="pagesTitle" type="text" class="form-control"
               placeholder="informe o título" required value="Página Inicial">
    </div>

    <div class="form-group">
        <label for="pagesURL">URL</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">/</span>
            </div>
            <input name="url" id="pagesUrl" type="text" class="form-control"
                   placeholder="Url Amigável, deixe em branco para informar a página inicial">
        </div>
    </div>

    <div class="form-group">
        <input id="pagesBody" type="hidden" name="body" value="<h3>Página inicial</h3> <p>Está é a página inicial do site!</p>">
        <trix-editor input="pagesBody"></trix-editor>
    </div>

    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
<hr>

<br><a href="/admin/pages/1" class="btn btn-secondary mb-5">Voltar</a>