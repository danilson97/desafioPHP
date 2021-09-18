<html>
    <head>
        <meta charset="UTF-8">
        <title>tela listar</title>
    </head>
    <body>
        <form action="listar.php" method="POST">
            <input type="text" name="consulta" placeholder="nova pesquisa">
            <input type="submit" value="Pesquisar">
            <button formaction="transicao.php">voltar</button>
        </form>    
    </body>
</html>
<?php
include './conexao.php';
$consulta = $_POST['consulta'];
$sql = mysqli_query($link,"select * from produto where item like '%$consulta%' ");
while ($vetor = mysqli_fetch_array($sql)) {
    $produto = $vetor['item'];
    $preco = $vetor['preco'];

    echo "Produto: $produto <br>";
    echo "Preço: $preco <br>";
    echo '<form><button formaction="mensagem_compra.php">comprar</button>'
    . '</form><hr>';
}
?>

