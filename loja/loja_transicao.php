<html>
    <head>
        <meta charset="UTF-8">
        <title>tela transição</title>
    </head>
    <body>
        <?php
        session_start();
        $iden = $_SESSION['nome'];
        echo"<h1>Bem vindo $iden</h1>"
        ?>
        <form>
            <button formaction="../index.php">voltar</button>
            <button formaction="loja_formulario_listar.php">listar itens</button>
            <button formaction="loja_formulario_inserir.php">inserir itens</button>
            <button formaction="loja_formulario_alterar.php">alterar itens</button>
            <button formaction="loja_formulario_deletar.php">deletar itens</button>
        </form>    
    </body>
</html>
