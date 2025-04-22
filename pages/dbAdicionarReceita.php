<?php
    $titulo = mysqli_real_escape_string($conexao,$_POST[
        'Titulo'
    ]);

    $descricao = mysqli_real_escape_string($conexao,$_POST[
        'Descricao'
    ]);

    $receitaTexto = mysqli_real_escape_string($conexao,$_POST[
        'ReceitaTexto'
    ]);

    $autor = mysqli_real_escape_string($conexao,$_POST[
        'Autor'
    ]);

    $tipoReceita = mysqli_real_escape_string($conexao,$_POST[
        'TipoReceita'
    ]);

    $sql = "INSERT into receita (
        Titulo,
        Descricao,
        ReceitaTexto,
        Autor,
        TipoReceita
            ) values (
            '{$titulo}',
            '{$descricao}',
            '{$receitaTexto}',
            '{$autor}',
            '{$tipoReceita}'
        )";

        mysqli_query($conexao,$sql) or die("erro ao add carro".mysqli_error(($conexao)));
        echo "A Receita {$titulo} foi adicionada com sucesso!"
?>

