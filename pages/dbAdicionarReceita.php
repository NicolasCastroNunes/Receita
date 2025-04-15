<?php
    $modelo = mysqli_real_escape_string($conexao,$_POST[
        'Titulo'
    ]);

    $marca = mysqli_real_escape_string($conexao,$_POST[
        'Descricao'
    ]);

    $valor = mysqli_real_escape_string($conexao,$_POST[
        'Receita'
    ]);

    $ano = mysqli_real_escape_string($conexao,$_POST[
        'Autor'
    ]);

    $cor = mysqli_real_escape_string($conexao,$_POST[
        'Receita'
    ]);

    $sql = "INSERT into carros (
        modeloCarro,
        marcaCarro,
        valorCarro,
        anoCarro,
        corCarro
            ) values (
            '{$modelo}',
            '{$marca}',
            '{$valor}',
            '{$ano}',
            '{$cor}'
        )";

        mysqli_query($conexao,$sql) or die("erro ao add carro".mysqli_error(($conexao)));
        echo "O carro {$modelo} foi adicionado com sucesso!"
?>

