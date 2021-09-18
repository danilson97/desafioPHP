<html>
    <head>
        <meta charset="UTF-8">
        <title>tela listar</title>
    </head>
    <body>
        <?php
        session_start();
        $referencia = $_SESSION['n'];
        echo"<h1>Bem vindo $referencia</h1>"
        ?>
        <form action="listar.php" method="POST">
            <input type="text" name="consulta" placeholder="pesquisar">
            <input type="submit" value="Pesquisar">
            <button formaction="transicao.php">voltar</button>
        </form>    

    </body>
</html>
