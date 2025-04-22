<h3>ATUALIZAR RECEITA</h3>
<?php
    $id = mysqli_real_escape_string($conexao,$_POST['IdReceita']);
    $titulo = mysqli_real_escape_string($conexao,$_POST['Titulo']);
    $descricao = mysqli_real_escape_string($conexao,$_POST['Descricao']);
    $ReceitaTexto = mysqli_real_escape_string($conexao,$_POST['ReceitaTexto']);
    $Autor = mysqli_real_escape_string($conexao,$_POST['Autor']);
    $TipoReceita = mysqli_real_escape_string($conexao,$_POST['TipoReceita']);

    // UPDATE TABELA SET NAME = NAME WHERE ID
    $sql = "UPDATE Receita SET
        Titulo = '{$titulo}',
        Descricao = '{$Descricao}',
        ReceitaTexto = '{$ReceitaTexto}',
        Autor = '{$Autor}',
        TipoReceita = '{$TipoReceita}'
        WHERE IdReceita = '{$id}'
    ";

    mysqli_query($conexao,$sql) or die ("Erro ao atualizar");

    echo "O carro foi atualizado! :D ✌";