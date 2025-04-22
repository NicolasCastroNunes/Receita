<h1>EDITAR RECEITA</h1>

<?php

    $id = $_GET['IdReceita'];

    echo " esse é a Receita de Nº $id";

    $sql = "SELECT * FROM receitas WHERE receita = {$id}";

    $query = mysqli_query($conexao,$sql) or die ("Erro ao executar a consulta".mysqli_error($conexao));

    $dados = mysqli_fetch_assoc($query);

?>

<h1>EDITAR UMA NOVA RECEITA</h1>

<form action="index.php?menu=dbEditarReceita" method="post">
    <div class="form-group">
        <label for="IdReceita">N°:</label>
        <input value="<?=$dados['IdReceita']?>" type="text" id="IdReceita" name="IdReceita">
    </div>
    <div class="form-group">
        <label for="Titulo">Titulo:</label>
        <input value="<?=$dados['Titulo']?>" type="text" id="Titulo" name="Titulo">
    </div>
    <div class="form-group">
        <label for="Descricao">Descricao:</label>
        <input value="<?=$dados['Descricao']?>"  type="text" id="Descricao" name="Descricao">
    </div>
    <div class="form-group">
        <label for="ReceitaTexto">ReceitaTexto:</label>
        <input  value="<?=$dados['ReceitaTexto']?>"  type="text" id="ReceitaTexto" name="ReceitaTexto">
    </div>
    <div class="form-group">
        <label for="Autor">Autor:</label>
        <input value="<?=$dados['Autor']?>"  type="text" id="Autor" name="Autor">
    </div>
    <div class="form-group">
        <label for="TipoReceita">TipoReceita:</label>
        <input value="<?=$dados['TipoReceita']?>"  type="text" id="TipoReceita" name="TipoReceita">
    </div>
    <button type="submit">EDITAR</button>
</form>

