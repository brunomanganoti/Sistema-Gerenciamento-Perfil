<?php
    
    if (isset($_POST['submit'])) {

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
        $exp_cartao = $_POST['exp-cartao'] . '-01'; //concatenação pra usar 01 como dia padrão para a data de expiração e funcionar com o tipo DATE do BD.
        $cvv_cartao = $_POST['cvv-cartao'];
        $email_pix = $_POST['email-pix'];
        $telefone = $_POST['telefone'];
        $cpf_pix = $_POST['cpf-pix'];
        $chv_aleatoria = $_POST['chv-aleatoria'];
        $senha = $_POST['senha'];

        $registro = mysqli_query($conexao, "INSERT INTO clientes(nome,sobrenome,email,rg,cpf,rua,num_endereco,complemento_endereco,sexo,tipo_cartao,num_cartao,nome_cartao,exp_cartao,cvv_cartao,email_pix,telefone_pix,cpf_pix,chv_aleatoria,senha) 
        VALUES ('$nome','$sobrenome','$email','$rg','$cpf','$rua','$num_endereco','$complemento','$sexo','$tipo_cartao','$num_cartao','$nome_cartao','$exp_cartao','$cvv_cartao','$email_pix','$telefone','$cpf_pix','$chv_aleatoria','$senha')");

        if ($registro) {
           header('Location: login.php');
           exit();
        }
    }
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="imagex/png" href="https://png.pngtree.com/element_our/20190528/ourmid/pngtree-browser-icon-image_1174655.jpg">
    <title>Cadastro - Cliente</title>

    <link rel="stylesheet" href="estilosgp.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
     
    <script>
        function valida_registro() {
            var senha1 = document.getElementById("senha").value;
            var senha2 = document.getElementById("conf-senha").value;;

            if (senha1 != senha2) {
               alert("As senhas não correspondem!");
               event.preventDefault();
               return 0;
            } 
            
            else {
                alert("Registro feito com sucesso!");
                return 1;
            }
        }
    </script>
</head>

<body>
      <div id="menu-horizontal">
          <a href="comentario.php">Envie seu feedback!</a>
          <a href="login.php">Login</a>
      </div>

    <div id="bloco-registro">
        <h1 id="titulo-pag">Cadastrar cliente</h1>
        <p id="desc-registro">Insira as informações necessárias:</p>

        <form action="registro.php" method="POST" id="reg-cliente" onsubmit="return valida_registro()">
          <div id="input-nomesobrenome"> 
            <input type="text" name="nome" id="nome-reg" class="input" required placeholder="Nome*">
            <input type="text" name="sobrenome" id="sobrenome-reg" class="input" placeholder="Sobrenome (opcional)">
          </div> 
       
          <input type="email" name="email" id="email" class="input" required placeholder="E-mail*"/>
          <input type="text" name="rg" id="RG" minlength=9 maxlength=9 class="input-rg" required placeholder="RG* (apenas números)"/>
          <input type="text" name="cpf" id="CPF" minlength=11 maxlength=11 class="input-cpf" required placeholder="CPF* (apenas números)"/>

          <div id="input-endereco"> 
            <input type="text" name="rua" id="rua" class="input" placeholder="Rua"/>
            <input type="number" name="num-endereco" id="num-endereco" min=0 max=9999 maxlength=4 class="input" placeholder="Número"/>
          </div>
          <input type="text" name="complemento" id="complemento" class="input" placeholder="Complemento"/>

          <select id="sexo" name="sexo" class="input" required>
              <option value="">Sexo*</option>
              <option value="Masculino">Masculino</option>
              <option value="Feminino">Feminino</option>
              <option value="Não informado">Prefiro não informar</option>
          </select>

          <hr class="new1">
          <h2 id="titulo-cartao">Informações de cartão</h2>
          <p id="desc-cartao">Insira suas informações de cartão.</p>

          <select id="tipo-cartao" name="tipo-cartao" class="input" required>
              <option value="">Selecione o tipo de cartão*</option>
              <option value="Crédito">Crédito</optio>
              <option value="Débito">Débito</option>
              <option value="Nenhum">Nenhum</option>
          </select>
     
          <input type="text" name="num-cartao" id="num-cartao" class="input" placeholder="Número do Cartão" minlength="13" maxlength="19"/>
          <input type="text" name="nome-cartao" id="nome-cartao" class="input" placeholder="Nome no Cartão"/>
        
          <label id="exp-cartao" for="exp-cartao">Data de expiração:</label>
          <input type="month" name="exp-cartao" id="data-exp" class="input" placeholder="Data de expiração"/>
          <input type="text" name="cvv-cartao" id="cvv-cartao" class="input" placeholder="CVV" minlength="3" maxlength="3"/>

          <hr class="new1">
          <h2 id="titulo-pix">Chave(s) Pix:</h2>
          <p id="desc-pix">Insira a(s) chave(s) pix. (você pode alterar isso mais tarde)</p>
            <input type="email" name="email-pix" id="email-pix" class="input" placeholder="E-mail"/>
            <input type="text" name="telefone" id="telefone" class="input" placeholder="Telefone"/>
            <input type="text" name="cpf-pix" id="CPF" minlength=11 maxlength=11 class="input-cpf" placeholder="CPF (apenas números)"/>
            <input type="text" name="chv-aleatoria" id="chv-aleatoria" class="input" placeholder="Chave aleatória"/> <hr class="new1">

          <input type="password" name="senha" id="senha" class="input" required placeholder="Senha*"/>
          <input type="password" id="conf-senha" class="input" required placeholder="Confirmar senha*"/>

          <button type="submit" name="submit" class="botao-registro">Registrar-se</button>
        </form>   

    <div id="link-login">Já tem uma conta? <a href="login.php">Entre aqui!</a></div>
</div>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>

    <script>
        $('.input-cpf').mask('000.000.000-00', {reverse: true});
        $('.input-rg').mask('00.000.000-0', {reverse: true});
        $('#telefone').mask('(00) 00000-0000');
        $('#chv-aleatoria').mask('AAAAAAAA-AAAA-AAAA-AAAA-AAAAAAAAAAAA');
        $('#num-cartao').mask('0000 0000 0000 0000');
    </script>
</body>
</html>