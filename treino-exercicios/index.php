<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        <H1>Laboratorio Animal</H1>
        <?php
        # imports:
        require_once('Animal.php');
        require_once('Cao.php');
        require_once('Gato.php');
        
         
        $Cao = array();
        $Cao[0] = new Cao('rex',1,'castanho','4.5','Cao','Pastor','preto');
        $Cao[1] = new Cao('pudk',3,'misto:branco,castanho e preto','2.7','Cao','Siberian Husky','azuis');
        $Cao[2] = new Cao('Beagle',1,'misto:branco,castanho e preto','2.3','Cao','Beagle','castanho');
        // public function __construct($nome, $idade, $cor, $peso, $especie, $raca ,$corOlhos)


        //impressao
        foreach ($Cao as $key => $value) {
            $Cao[$key]->info();
            echo'------------------------';
        }
        ?>

    </pre>
</body>
</html>