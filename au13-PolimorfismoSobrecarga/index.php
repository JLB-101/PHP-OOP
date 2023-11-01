<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 13 - PolimorfismosSobreCarga</title>
</head>

<body>
    <h1>Aula 13 - PolimorfismosSobreCarga</h1>
    <pre>
        <p>Metodo com assinatura diferente: diferente quantidae de argumentos e tipos
    podem estar escrita na mesma classe inumeras vezes, enquanto que sobreposico apenas uma vez
    <b>exemplo:classe(mamifero):emitirSom() <--classe(Lobo):emitirSom("Auuu!")<---classe(Cachoro):emitirSom("Au! AU!")</b> 
</p>
    </pre>
    <hr>
    <br>

    <?php
    # imports:
    require_once('Cachoro.php');

    //
    $c1 = new Cachoro();

    $c1->reagir('toma comida');
    ?>

</body>

</html>