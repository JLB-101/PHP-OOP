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
            
            <H1>Torneio UFC</H1>
            <?php
                # imports:
                require_once('Lutador.php');
                require_once('Luta.php');


                //arrays of fighters
                $l = array();
                $l[0]= new Lutador('Pretty Boy','Franca', 30, 1.75,
                 68.9, 11, 2, 1, 1);

                $l[1]= new Lutador('Putscript','Brasil', 29, 1.68, 65, 11, 2, 1, 3);

                $l[2]= new Lutador('Nerdaart','EUA', 30, 1.81, 105.7, 12, 2, 1, 4);

                $l[3]= new Lutador('SnapShow','EUA', 35, 1.65, 80.9, 12, 2, 1, 5);
                
               
                
                $UEF01 = new Luta();
                $UEF01->marcarLuta($l[1], $l[0]);
                $UEF01->lutar();

                foreach($l as $k=>$v) {
                    $l[$k]->apresentar(); 
                }
               
               
            ?>
               
         </pre>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>

    </html>