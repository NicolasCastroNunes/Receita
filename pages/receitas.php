
    <h1>VOCÊ ESTÁ NA LISTA DE RECEITAS</h1>

    <a href="index.php?menu=cadastro">
        <button type="button">ADICIONAR RECEITA</button>
    </a>
    
    <form action="index.php?menu=receitas" method="post">
        <input type="text" name="pesquisa" id="pesquisa">
        <button type="submit">PESQUISAR</button>
    </form>
    
    <table class="table">
        <tr>
            <th>id</th>
            <th>Titulo</th>
            <th>Descricao</th>
            <th>ReceitaTexto</th>
            <th>Autor</th>
            <th>TipoReceita</th>
        </tr>

        <?php
            if(isset($_POST['pesquisa'])){
                $termoPesquisado = $_POST['pesquisa'];
            }else{
                $termoPesquisado = "";
            }
    
            $sql = "SELECT ID,
            upper(Titulo) AS Titulo,
            upper(Descricao) AS Descricao,
            upper(ReceitaTexto) AS Texto,
            upper(Autor) AS Autor,
            upper(TipoReceita) AS Receita,
            FROM receitas WHERE 
            ID = '$termoPesquisado' OR
            Titulo LIKE '%$termoPesquisado%'
            ORDER BY Titulo ASC
            ";
            // pedido
            $query = mysqli_query($conexao,$sql) or die("Erro na requisição!".mysqli_error($conexao));
    
            // fetch_asso = vai acessar um query, e contar os resultado
    
            while($dados = mysqli_fetch_assoc($query)){
                ?>
                    <tr>
                        <td><?=$dados['Titulo']?></td>
                        <td><?=$dados['Descricao']?></td>
                        <td><?=$dados['ReceitaTexto']?></td>
                        <td><?=$dados['Autor']?></td>
                        <td><?=$dados['TipoReceitas']?></td>
                        <td><a href="index.php?menu=Editar&ID=<?=$dados['ID']?>" class="btn btn-primary">EDITAR</a></td>
                        <td><a href="index.php?menu=Deletar&ID=<?=$dados['ID']?>" class="btn btn-danger">DELETAR</a></td>
                    </tr>
                <?php
            }
        ?>
    
    </table>

