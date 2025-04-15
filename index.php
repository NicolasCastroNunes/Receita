    <?php
    $hostname = "localhost";
    $database = "receitas";
    $usuario = "root";
    $password = "";

    $mysqli = new mysqli($hostname,$usuario,$password,$database);
    if($mysqli->connect_errno){
        echo "falha ao conectar:(".$mysqli ->connect_errno . ")" .$mysqli->connect_errno;
    }else
        echo "conectado ao database";
    ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <a href="index.php?menu=home">Home</a>
            <a href="index.php?menu=cadastro">Cadastrar</a>
            <a href="index.php?menu=deletar">Deletar</a>
            <a href="index.php?menu=editar">Editar</a>
            <a href="index.php?menu=receitas">Receitas</a>
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
            }
        ?>
    </main>

</body>
</html>

