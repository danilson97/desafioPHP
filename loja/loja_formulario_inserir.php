<html>
    <head>
        <meta charset="UTF-8">
        <title>tela cadastrar</title>
    </head>
    <body>
        <form action="loja_inserir.php" method="POST">
            <input type="text" name="item" placeholder="insira o nome do produto">
            <input type="number" name="preco" placeholder="insira o valor do produto">
            <input type="number" name="id" placeholder="insira o id">
            <input type="submit" value="Cadastrar">
            <button formaction="loja_transicao.php">voltar</button>
        </form>
    </body>
</html>
