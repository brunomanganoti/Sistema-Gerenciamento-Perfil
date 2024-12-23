<?php
     session_start();

     if ((!isset($_SESSION['email']) == true) && (!isset($_SESSION['senha']) == true)) {
 
     unset($_SESSION['email']);
     unset($_SESSION['senha']);
     header('Location: login.php');
 
} else {
    $login = $_SESSION['email'];
    include_once('conexao.php');

    $consulta_dados = mysqli_query($conexao, "SELECT nome, email, sexo FROM clientes WHERE email = '$login'");

    $cliente = mysqli_fetch_assoc($consulta_dados);
 }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="imagex/png" href="https://png.pngtree.com/element_our/20190528/ourmid/pngtree-browser-icon-image_1174655.jpg">
    <title>Consulta - Cliente</title>

    <link rel="stylesheet" href="estilosgp.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>
    <?php
        echo "<br>";
        echo "<h1 id='titulo-pag'>Informações do Usuário</h1>";
        echo "Nome: " . $cliente['nome'] . "<br>";
        echo "E-mail: " . $cliente['email'] . "<br>";
        echo "Sexo: " . $cliente['sexo'] . "<br>";
    
    ?>

   <div id="container-consulta">
        <div id="bloco-consulta">
        <ul>
            <li><a href="acesso.php">Voltar para a página principal</a></li>
            <li><a href="att-perfil.php">Alterar dados</a></li>
            <li><a href="comentario.php">Enviar Feedback</a></li>
            <li><a href="excluir.php" onclick="return confirm('Tem certeza que deseja excluir sua conta? Esta ação não pode ser desfeita.')">Excluir conta</a></li>
            <li><a href="sair.php">Sair (finaliza sua sessão)</a></li>
        </ul>
    </div>

    <div id="bloco-pedidos">
        <p>Lista de pedidos</p>

        <ul>
        <li></li>
        <li></li>
        <li></li>
        </ul>
    </div> 
  </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
</body>
</html>