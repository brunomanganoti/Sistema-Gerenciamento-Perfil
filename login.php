<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="imagex/png" href="https://png.pngtree.com/element_our/20190528/ourmid/pngtree-browser-icon-image_1174655.jpg">
    <title>Login - Cliente</title>

    <link rel="stylesheet" href="estilosgp.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>
    <div id="menu-horizontal">
        <a href="comentario.php">Envie seu feedback!</a>
     </div>

    <div id="bloco-login">
        <h1 id="titulo-pag-login">Login</h1>
 
     <form action="proc_Login.php" method="POST">
         <input type="email" name="email" id="email" class="input" required placeholder="E-mail"/>
 
         <input type="password" name="senha" id="senha" class="input" required placeholder="Senha"/>
 
        <button type="submit" name="submit" class="botao-login">Entrar</button>
     </form>

     <div id="link-registro">Não tem uma conta? <a href="registro.php">Registre-se aqui!</a></div>
</div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>