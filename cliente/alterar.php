<html>
    <head>
        <meta charset="UTF-8">
        <title>tela alterar</title>
    </head>
    <body>
        <form action="alterar.php" method="POST">
            <input type="text" name="nome" placeholder="digite um nome">
            <input type="number" name="id" placeholder="digite um id">
            <input type="submit" value="Pesquisar">
            <button formaction="transicao.php">voltar</button>
        </form>    
    </body>
</html>

<?php
include './conexao.php';
$nome = $_POST['nome'];
$id = $_POST['id'];
if($nome === "" || $id === ""){
    echo "faltam dados<br>";
} else {
    echo "dados preenchido<br>";
    mysqli_query($link,"update c_login set nome = '$nome' where id_login = '$id'");
    echo "dados alterados<br>";
}
