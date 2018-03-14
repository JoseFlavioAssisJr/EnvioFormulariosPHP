<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulário de envio em PHP</title>
    </head>
    <body>
        <?php
        if (isset($_FILES['arquivo']['name']))
        {
            $uploaddir = 'c:\\xampp\\tmp\\';
            $arquivo = $uploaddir. $_FILES ['arquivo']['name'];
            if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $arquivo))
            {
                print "O arquivo foi gravado com sucesso.";
            }
            else
            {
                print "Erro. O arquivo não foi enviado.";
            }
        }
        ?>
        
        <form enctype="multipart/form-data" action="index.php" method="POST" >
            <input type="hidden" name="MAX_FILE_SIZE" value="30000" >
            <br>Enviar este arquivo: <input name="arquivo" type="file" ><br>
            <input type="submit" value="Envia Arquivo" >
        </form>
    </body>
</html>
