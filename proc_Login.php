<?php
    session_start();
    if (isset($_POST['submit']) && !empty($_POST['email'] && !empty($_POST['senha']))) {
        
        include_once('conexao.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $consulta = "SELECT * FROM clientes WHERE email = '$email' && senha = '$senha'";

        $resultado = $conexao->query($consulta);

        if (mysqli_num_rows($resultado) < 1) {

            $_SESSION['erro_login'] = "Não há conta atribuída.";
            echo "<p style='color:red'>" . $_SESSION['erro_login'] . "</p>";
            unset($_SESSION['erro_login']); 
            
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: login.php');

        } else {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;

            header('Location: acesso.php');
        }

    } else {
        header('Location: login.php');
    }
?>