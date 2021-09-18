<html>
    <head>
        <meta charset="UTF-8">
        <title>tela login</title>
    </head>
    <body>
        <h2>LOGIN CLIENTE</h2>
        <form method="POST">
            <input type="text" name="nome" placeholder="inserir login">
            <input type="text" name="senha" placeholder="inserir senha">
            <input type="submit" value="Logar">
            <button formaction="../index.php">voltar</button>
        </form>    
        <?php if(isset($_POST['nome']) && isset($_POST['senha'])): ?>
        <?php
        session_start();
        error_reporting(0);
        include './conexao.php';
        $n = $_POST['nome'];
        $s = $_POST['senha'];
        $sql = mysqli_query($link, "select * from c_login where nome = '$n' and senha = '$s' ");
        $vetor = mysqli_fetch_array($sql);
        $id = $vetor['id_login'];
        $nome = $vetor['nome'];
        $senha = $vetor['senha'];
        $email = $vetor['email'];
        
        $_SESSION['n']= $n;

        if ($n === $nome && $s === $senha) {
//            echo "Bem vindo $nome <br>";
                header('location:transicao.php');
        } else {
            echo "<p>login incorreto";
        }
        ?>
        <?php endif; ?>
    </body>
</html>
