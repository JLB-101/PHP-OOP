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
        <pre style="font-weight: bold; color: blue; background-color: yellowgreen;">
            <?php
            require_once 'ContaBanco.php';

            /**contas */
            
            $p1 = new ContaBanco(123, "CC","Jubileu");
            $p1->depositar(50.00);
            $p2 = new ContaBanco(343, "CP","Creuza");
            $p2->depositar(50.00);
            $p2->sacar(30.00);
            var_dump($p1);
            var_dump($p2);
            ?>
         </pre>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>

    </html>