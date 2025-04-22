<h1>ADICIONAR UMA NOVA RECEITA</h1>

<form action="index.php?menu=dbAdicionarReceita" method="post">
    <div id="DivElem">

    <div id="elementos">
    <div class="form-group">
        <label for="Titulo">Titulo</label>
        <input type="text" name="Titulo" id="Titulo">
    </div>

    <div class="form-group">
        <label for="Descricao">Descricao</label>
        <input type="text" name="Descricao" id="Descricao">
    </div>

    <div class="form-group">
        <label for="ReceitaTexto">ReceitaTexto</label>
        <input type="text" name="ReceitaTexto" id="ReceitaTexto">
    </div>

    <div class="form-group">
        <label for="autor">Autor</label>
        <input type="text" name="Autor" id="Autor">
    </div>

    <div class="form-group">
        <label for="TipoReceita">TipoReceita</label>
        <input type="text" name="TipoReceita" id="TipoReceita">
    </div>
    <button type="submit">CADASTRAR RECEITA</button>
    </div>
    </div>
</form>