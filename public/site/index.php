<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>meu site php</title>
    </head>
    <body>

        <div>
        <?php

        // inclui todas as vezes dentro do codigo
        //include('./includes/header.php')

        require('./includes/header.php');

        ?>
        </div>
        

        <div>
            <?php
            
                echo 'conteudo do site';
            
            ?>
        </div>
        
        <?php

        // vai incluir uma unica vez o arquivo

        include_once('./includes/footer.php')

        ?>
        
    
    </body>
</html>