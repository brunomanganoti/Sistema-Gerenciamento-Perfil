<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="imagex/png" href="https://png.pngtree.com/element_our/20190528/ourmid/pngtree-browser-icon-image_1174655.jpg">
    <title>Atualização de Perfil - Cliente</title>

    <link rel="stylesheet" href="estilosgp.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>
      <div id="menu-horizontal">
          <a href="login.php">Login</a>
          <a href="comentario.php">Envie seu feedback!</a>
      </div>

    <div id="bloco-att">
        <h1 id="titulo-pag">Atualizar perfil</h1>
        <p id="desc-att">Insira as informações a serem atualizadas:</p>

        <form action="proc_Attperfil.php" method="POST" id="att-perfil" onsubmit="return valida_att()">
           <div id="input-nomesobrenome"> 
              <input type="text" name="nome" id="nome-att" class="input" placeholder="Nome">
              <input type="text" name="sobrenome" id="sobrenome-att" class="input" placeholder="Sobrenome">
           </div> 

          <input type="email" name="email" id="email" class="input" required placeholder="E-mail*"/>
          <input type="text" name="rg" id="RG" minlength=9 maxlength=9 class="input-rg" placeholder="RG (apenas números)"/>
          <input type="text" name="cpf" id="CPF" minlength=11 maxlength=11 class="input-cpf" placeholder="CPF (apenas números)"/>
          
          <div id="input-endereco"> 
            <input type="text" name="rua" id="rua" class="input" placeholder="Rua"/>
            <input type="number" name="num-endereco" id="num-endereco" min=0 maxlength=4 class="input" placeholder="Número"/>
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
          <p id="desc-cartao">Altere as informações de cartão.</p>

          <select id="tipo-cartao" name="tipo-cartao" class="input" required>
              <option value="">Selecione o tipo de cartão*</option>
              <option value="Crédito">Crédito</option>
              <option value="Débito">Débito</option>
              <option value="Nenhum">Nenhum</option>
          </select>

          <input type="text" name="num-cartao" id="num-cartao" class="input" placeholder="Número do Cartão" minlength=16 maxlength=16/>
          <input type="text" name="nome-cartao" id="nome-cartao" class="input" placeholder="Nome no Cartão"/>

          <label id="exp-cartao" for="exp-cartao">Data de expiração:</label>
          <input type="month" name="exp-cartao" id="data-exp" class="input" placeholder="Data de expiração"/>
          <input type="text" name="cvv-cartao" id="cvv-cartao" class="input" placeholder="CVV" minlength="3" maxlength="3"/>
      
          <hr class="new1"> <h2 id="titulo-pix">Chave(s) Pix:</h2>
          <p id="desc-pix">Altere a(s) chave(s) pix.</p>
            <input type="email" name="email-pix" id="email-pix" class="input" placeholder="E-mail"/>
            <input type="text" name="telefone" id="telefone" class="input" placeholder="Telefone"/>
            <input type="text" name="cpf-pix" id="CPF" minlength=11 maxlength=11 class="input-cpf" placeholder="CPF (apenas números)"/>
            <input type="text" name="chv-aleatoria" id="chv-aleatoria" class="input" placeholder="Chave aleatória"/> <hr class="new1">

          <input type="password" name="senha" id="senha" class="input" required placeholder="Nova senha (ou atual)*"/>
          <input type="password" id="conf-senha" class="input" required placeholder="Confirmar senha*"/>

         <button type="submit" name="submit" class="botao-att">Concluir</button>
        </form>
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