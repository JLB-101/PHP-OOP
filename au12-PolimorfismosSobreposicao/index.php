<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Aula 12 - PolimorfismosSobreposicao</title>
</head>

<body>
    <h1>PolimorfismosSobreposicao</h1>
    <pre>
        <p> Metodo com mesma assinatura: mesma quantidae de argumentos e tipos
    Deve estar em classes diferentes uma vez em cada classe.
   <b>exemplo:classe(mamifero):emitirSom() <--classe(Lobo):emitirSom("Auuu!")<---classe(Cachoro):emitirSom("Au! AU!")</b> 
        </p>
    </pre>
    <?php
    # imports:
    require_once('Animal.php');
    require_once('Reptil.php');
    require_once('Ave.php');
    require_once('Mamifero.php');
    require_once('Peixe.php');
    require_once('Papagaio.php');

    //
    // $p1 = new Pessoa();
    
    $p1 = new Papagaio(8.9, 2, 'Cinza');
    // $p2 = new Papagaio(8.9, 2, 'branco');
    // $p3 = new Papagaio(8.9, 2, 'branco');
    
    $p1->info();





    ?>
</body>

</html>