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
        <title>Aula 04 - Construtor padrão</title>
    </head>

    <body>

        <!-- Mudando a visibilade-->
        <pre style="font-weight: bold; color: blue; background-color: yellowgreen;">
            <?php
            require_once 'Caneta.php';

            $c = new Caneta();
            $c->setModelo("VERSHAP");
            $c->setCor("vermelho");
            $c->setPonta("0.5");
            $c->setCarga("100%");
            $c->setTampada(false);
            print("Caneta\nmodelo: {$c->getModelo()}\n");
            print("Cor: {$c->getCor()}");


            /*
            *contrutor com parametro
            *em uma linha faz o que eata acima

            $c1 = new Caneta("BIC cristal","x", 0.4);
            var_dump($c1);

            */

            ?>
         </pre>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>

    </html>