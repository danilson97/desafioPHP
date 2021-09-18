<html>
    <head>
        <meta charset="UTF-8">
        <title>tela login</title>
    </head>
    <body>
        <h2>LOGIN RESTAURANTE</h2>
        <form method="POST">
            <input type="text" name="nome" placeholder="inserir login">
            <input type="text" name="senha" placeholder="inserir senha">
            <input type="submit" value="Logar">
            <button formaction="../index.php">voltar</button>
        </form>    
        <?php if (isset($_POST['nome']) && isset($_POST['senha'])): ?>
            <?php
            session_start();
            error_reporting(0);
            include './conexao.php';
            $n = $_POST['nome'];
            $s = $_POST['senha'];
            $sql = mysqli_query($link, "select * from loja where nome = '$n' "
                    . "and senha = '$s' ");
            $vetor = mysqli_fetch_array($sql);
            $id = $vetor['loja_id'];
            $nome = $vetor['nome'];
            $senha = $vetor['senha'];
            $email = $vetor['email'];

            $_SESSION['nome'] = $nome;

            if ($n === $nome && $s === $senha) {
//            echo "Bem vindo $nome <br>";
                header('location: loja_transicao.php');
            } else {
                echo "<p>login incorreto";
            }
            ?>
        <?php endif; ?>
    </body>
</html>
