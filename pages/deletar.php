<h1>DELETAR RECEITA</h1>

<?php
$id = $_GET['IdReceita'];

$sql = "DELETE FROM receita WHERE IdReceita  = $id";

$query = mysqli_query($conexao,$sql) or die ("Erro ao deletar".mysqli_error($conexao));

echo "A receita foi deletada com sucesso!";
?>