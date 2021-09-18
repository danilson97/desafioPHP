
<html>
    <head>
        <meta charset="UTF-8">
        <title>tela cadastrar</title>
    </head>
    <body>
        <form action="inserir.php" method="POST">
            <input type="text" name="nome" placeholder="digite seu nome">
            <input type="password" name="senha" placeholder="digite sua senha">
            <input type="email" name="email" placeholder="digite seu email">
            <input type="submit" value="Cadastrar">
            <button formaction="../index.php">voltar</button>
        </form>
    </body>
</html>
<?php
include './conexao.php';
$nome = $_POST['nome'];
$senha = $_POST['senha'];
$email = $_POST['email'];
print_r($nome);
if ($nome && $senha && $email != "") {
    mysqli_query($link, "INSERT INTO `c_login`(`nome`, `senha`, `email`) VALUES ('$nome','$senha','$email')");
    header('location: login_cliente.php');
} else {
    echo "insira os dados cadastrais";
}