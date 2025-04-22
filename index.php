<?php
$host = "localhost";
$user = "root";
$senha = ""; 
$banco = "Receitas";

$conexao = mysqli_connect($host, $user, $senha, $banco);

if (!$conexao) {
    die("Erro ao conectar: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;

        }

        header, footer{
            box-shadow: 2px 2px 5px black;
            background-color: antiquewhite;
            display: flex;
            justify-content: center;
            padding: 20px;
        }

        h1{
            background-color: black;
            box-shadow: 10px 10px 10px gray;
            color: white;
            padding: 10px;
            margin: 20px;
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
        }

        button{
            margin: 10px;
            background-color: white;
            border-radius: 2px;
            padding: 10px;
            cursor: pointer;
            font-family: 'Times New Roman', Times, serif;
        }

        #ponte, #ponte2, #ponte3{
            text-decoration: none;
            color: black;
            margin: 10px;
        }

        a{
            text-decoration: none;
            margin: 10px;
            color: blue;
        }

        label, input{
            width: 100%;
            padding: 2px;
            display: flex;
            justify-content: center;
            text-align: center;
        }

        #elementos{
            align-items: center;
            display: flex;
            flex-direction: column;
            color: white;
            text-shadow: 2px 2px 2px black;
            margin: 10px;
            width: 30%;
            padding: 28px;
            gap: 5px;
            background-color: gray;
            border-radius: 2px;
        }

        #DivElem{
            margin-left: 520px;
        }

        input{
            font-family: 'Times New Roman', Times, serif;
        }

        #deletar{
            background-color: red;
            color: white;
            padding: 10px;
            border-radius: 2px;
        }

        #editar{
            background-color: blue;
            color: white;
            padding: 10px;
            border-radius: 2px;
        }

        #pesquisa{
            margin: 10px;
            width: 20%;
            text-align: center;
            padding: 2px;
            display: flex;
            justify-content: center;
        }
    </style>
</head>
<body>
    <header>
        <nav>
         
            <a href="index.php?menu=home" id="ponte">Home</a>
            <a href="index.php?menu=cadastro" id="ponte2">Cadastrar</a>
            <!-- <a href="index.php?menu=deletar">Deletar</a>
            <a href="index.php?menu=editar">Editar</a> -->
            <a href="index.php?menu=receitas" id="ponte3">Receitas</a>
         
        </nav>
    </header>

    <main>
        <?php
        if (isset($_GET['menu'])){
            $pagina = $_GET['menu'];
        }else{
            $pagina = "home";
        }

        switch($pagina){
            case'home':
                include('pages/home.php');
                break;

            case 'cadastro';
                include('pages/cadastro.php');
                break;

            case 'editar';
                include('pages/editar.php');
                break;

            case 'deletar';
                include('pages/deletar.php');
                break;
        
            case 'receitas';
                include('pages/receitas.php');
                break;

            case 'dbAdicionarReceita';
                include('pages/dbAdicionarReceita.php');
                break;
            }
        ?>
    </main>

</body>
</html>

