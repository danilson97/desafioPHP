<html>
    <head>
        <meta charset="UTF-8">
        <title>tela </title>
    </head>
    <body>
        <h1 style="margin-left: 500px">sistema de alimento php</h1>
        <div style="float: left;width: 200px; height: 50px; background-color: lightblue">
            <h3>LADO LOJA</h3>
            <form>
            <p>faça login para entrar:</p>
            <button formaction="loja/loja_login.php">Login</button>
            <br>
            <p>cadastre se:</p>
            <button formaction="loja/loja_formulario_inserir.php">Cadastrar</button>
            </form>
        </div>
        <div style="float: right;width: 200px; height: 50px; background-color: lightcoral">
            <h3>LADO CLIENTE</h3>
            <form>
            <p>faça login para entrar:</p>
            <button formaction="cliente/login_cliente.php">Login</button>
            <br>
            <p>cadastre se:</p>
            <button formaction="cliente/formulario_inserir.php">Cadastrar</button>
            </form>
        </div>
    </body>
</html>
