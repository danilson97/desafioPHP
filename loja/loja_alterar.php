<html>
    <head>
        <meta charset="UTF-8">
        <title>tela alterar</title>
    </head>
    <body>
        <form action="loja_alterar.php" method="POST">
            <input type="text" name="nome" placeholder="digite o novo nome">
            <input type="number" name="preco" placeholder="digite o novo valor">
            <input type="number" name="id" placeholder="digite um id">
            <input type="submit" value="Pesquisar">
            <button formaction="loja_transicao.php">voltar</button>
        </form>    
    </body>
</html>

<?php
include './conexao.php';
$nome = $_POST['nome'];
$p = $_POST['preco'];
$id = $_POST['id'];
if($nome === "" || $id === ""){
    echo "faltam dados<br>";
} else {
    echo "dados preenchido<br>";
    mysqli_query($link,"update `produto` set item = '$nome', preco = '$p' where produto_id = '$id'");
    echo "dados alterados<br>";
}
