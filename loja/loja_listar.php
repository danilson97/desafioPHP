<html>
    <head>
        <meta charset="UTF-8">
        <title>tela listar</title>
    </head>
    <body>
        <form action="loja_listar.php" method="POST">
            <input type="text" name="consulta" placeholder="nova pesquisa">
            <input type="submit" value="Pesquisar">
            <button formaction="loja_transicao.php">voltar</button>
        </form>    

    </body>
</html>
<?php
include './conexao.php';
$consulta = $_POST['consulta'];
$sql = mysqli_query($link,"select * from produto where item like '%$consulta%' ");
while ($vetor = mysqli_fetch_array($sql)) {
    $id = $vetor['produto_id'];
    $item = $vetor['item'];
    $preco = $vetor['preco'];

    echo "ID: $id <br>";
    echo "ITEM: $item <br>";
    echo "PRECO: $preco <br>";
}
?>

