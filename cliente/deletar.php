<html>
    <head>
        <title>tela deletar</title>
    </head>
    <body>
        <form action="deletar.php" method="POST">
            <input type="text" name="id" placeholder="insira o codigo">
            <input type="submit" value="Deletar item">
            <button formaction="transicao.php">voltar</button>
        </form>
    </body>
</html>
<?php
include './conexao.php';
$id = $_POST['id'];
if($id != ""){
mysqli_query($link,"delete from c_login where id_login = '$id'");
echo "deletado";
} else {
    echo "insira o id";    
}