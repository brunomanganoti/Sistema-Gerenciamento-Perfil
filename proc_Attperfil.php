<?php
    session_start();

    if ((!isset($_SESSION['email']) == true) && (!isset($_SESSION['senha']) == true)) {

    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');

} else {

$login = $_SESSION['email'];

include_once('conexao.php');

       $nome = $_POST['nome'];
       $sobrenome = $_POST['sobrenome'];
       $email = $_POST['email'];
       $rg = $_POST['rg'];
       $cpf = $_POST['cpf'];
       $rua = $_POST['rua'];
       $num_endereco = $_POST['num-endereco'];
       $complemento = $_POST['complemento'];
       $sexo = $_POST['sexo'];
       $tipo_cartao = $_POST['tipo-cartao'];
       $num_cartao = $_POST['num-cartao'];
       $nome_cartao = $_POST['nome-cartao'];
       $exp_cartao = $_POST['exp-cartao'] . '-01';
       $cvv_cartao = $_POST['cvv-cartao'];
       $email_pix = $_POST['email-pix'];
       $telefone = $_POST['telefone'];
       $cpf_pix = $_POST['cpf-pix'];
       $chv_aleatoria = $_POST['chv-aleatoria'];
       $senha = $_POST['senha'];
       
       $update = mysqli_query($conexao, "UPDATE clientes SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', rg = '$rg', cpf = '$cpf', rua = '$rua', num_endereco = '$num_endereco', complemento_endereco = '$complemento', sexo = '$sexo', tipo_cartao = '$tipo_cartao', num_cartao = '$num_cartao', nome_cartao = '$nome_cartao', exp_cartao = '$exp_cartao', cvv_cartao = '$cvv_cartao', email_pix = '$email_pix', telefone_pix = '$telefone', cpf_pix = '$cpf_pix', chv_aleatoria = '$chv_aleatoria', senha = '$senha' 
                 WHERE email = '$login'");
     }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="imagex/png" href="https://png.pngtree.com/element_our/20190528/ourmid/pngtree-browser-icon-image_1174655.jpg">
    <title>Sistema - Cliente</title>

    <link rel="stylesheet" href="estilosgp.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>
    <div id="bloco-atualizado">
        <br>
        <h1 id="titulo-pag">Perfil atualizado com sucesso!</h1>
            <p id="texto-atualizado">Faça login novamente <u><a href="login.php">aqui</a></u></p>
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
</body>
</html>