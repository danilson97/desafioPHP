<html>
    <head>
        <title>tela deletar</title>
    </head>
    <body>
        <form action="loja_deletar.php" method="POST">
            <input type="text" name="id" placeholder="insira o codigo">
            <input type="submit" value="Deletar item">
            <button formaction="loja_transicao.php">voltar</button>
        </form>
    </body>
</html>
<?php
include './conexao.php';
$id = $_POST['id'];
if($id != ""){
mysqli_query($link,"delete from `produto` where produto_id = '$id'");
echo "deletado";
} else {
    echo "insira o id";    
}