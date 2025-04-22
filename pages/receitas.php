
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
    
            $sql = "SELECT  IdReceita ,
            UPPER(Titulo) AS Titulo,
            UPPER(Descricao) AS Descricao,
            UPPER(ReceitaTexto) AS ReceitaTexto,
            UPPER(Autor) AS Autor,
            UPPER(TipoReceita) AS TipoReceita
            FROM receita
            WHERE 
            IdReceita = '$termoPesquisado' OR
            Titulo LIKE '%$termoPesquisado%'
            ORDER BY Titulo ASC";
        

            $query = mysqli_query($conexao,$sql) or die("Erro na requisição!".mysqli_error($conexao));

            while($dados = mysqli_fetch_assoc($query)){
                ?>
                    <tr>
                    <td><?=$dados['Titulo']?></td>
                    <td><?=$dados['Descricao']?></td>
                    <td><?=$dados['ReceitaTexto']?></td>
                    <td><?=$dados['Autor']?></td>
                    <td><?=$dados['TipoReceita']?></td>
                    <td><a href="index.php?menu=editar&IdReceita=<?=$dados['IdReceita']?>" class="btn btn-primary" id="editar">EDITAR</a></td>
                    <td><a href="index.php?menu=deletar&IdReceita=<?=$dados['IdReceita']?>" class="btn btn-danger" id="deletar">DELETAR</a></td>
                    </tr>
                <?php
            }
        ?>
    
    </table>

