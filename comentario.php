<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="imagex/png" href="https://png.pngtree.com/element_our/20190528/ourmid/pngtree-browser-icon-image_1174655.jpg">
    <title>Feedback</title>

    <link rel="stylesheet" href="estilosgp.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script>
        function envio_comentario() {
            var comentario = document.getElementById("comentario").value;

            if (comentario != "") {
                return 1;
            } 
            
            else {
                alert("A mensagem não pode estar vazia.");
                event.preventDefault();
                return 0;
            }
        }
    </script>
</head>

<body>
    <div id="menu-horizontal">
        <a href="login.php">Login</a>
    </div>

        <form action="proc_Comentario.php" method="POST" id="envio-comentario" onsubmit="return envio_comentario()">
            <div id="bloco-comentario">
              <h1 id="titulo-pag">Feedback</h1>
              <p id="desc-comentario">Comentários, sugestões, reclamações, etc.</p> <br>
    
              <textarea name="comentario" id="comentario" cols="70" rows="8" placeholder="Escreva sua mensagem aqui..."></textarea>
              <button type="submit" name="submit" class="botao-comentario">Enviar</button>
            </div>
       </form>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
</body>
</html>