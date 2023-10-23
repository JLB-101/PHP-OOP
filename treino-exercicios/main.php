<<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="Description" content="Enter your description here" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <title>Title</title>
    </head>

    <body>

        <!-- Mudando a visibilade-->
        <pre style="font-weight: bold; color: blue; background-color: yellowgreen; align-items: center; justify-content: center; justify-items: center;">
            
        <h1>Bem-vindo ao Sistema de Gestao de Funcionarios da UCM</h1>
            <?php
                require_once('Funcionario.php');
                $f= array();
               
                $f[0]= new Funcionario('Joao','M','Beira,sofala','+258 84 00 00 111','IT','Analista de Sistema');
                $f[1]= new Funcionario('Sunboy jr','M','Beira,Sofala','+258 86 00 11 000', 'IT','Tec. rede & dev') ;
                
                foreach ($f as $key => $value) {
                   echo''.$key.''.$value.'';
                }
            ?>
               
         </pre>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>

    </html>