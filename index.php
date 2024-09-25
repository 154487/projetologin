<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
</head>

<body>
    <h2>Chamados Suporte</h2>
    <?php include('mensagem.php');?>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="" method="POST">
                <h1>Criar Conta</h1>
                <input type="text" placeholder="Nome" name="newnome" required />
                <input type="email" placeholder="Email" name="newemail" required/>
                <input type="password" placeholder="Senha" name="newsenha" required/>
                <button type="submit" name="create_usuario">CRIAR</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="" method="POST">
                <h1>Login</h1>
                <input type="email" placeholder="Email" name="email"/>
                <input type="password" placeholder="senha" name="senha"/>
                <a href="#">Esqueceu sua senha?</a>
                <button type="submit">ENTRAR</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Bem vindo de volta!</h1>
                    <p>Faça login com suas informações pessoais clicando no botão abaixo</p>
                    <button class="ghost" id="signIn">ENTRAR</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Não possui cadastro?</h1>
                    <p>Crie seu login clicando no botão abaixo</p>
                    <button class="ghost" id="signUp">CRIAR</button>
                </div>
            </div>
        </div>
    </div>
    <script src="js/main.js"></script>
</body>

</html>