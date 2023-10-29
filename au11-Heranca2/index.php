<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Aula 10</title>
</head>

<body>
    <h1></h1>
    <?php
    # imports:
    require_once('Pessoa.php');
    require_once('Aluno.php');
    require_once('Bolsista.php');
    require_once('Tecnico.php');

    //
   // $p1 = new Pessoa();
    $p2 = new Aluno();
    $p3 = new Bolsista();
    $p4 = new Tecnico('Amelia', 'F', 'Direito', 1110333);
    

    //
   // $p1->setNome('John');
    $p2->setNome('Joau');
    $p2->setMatricula(1111);
    $p2->setIdade(18);
    $p2->setGenero('M');
    $p2->fazerAniversario();
    $p2->pagarMensalidade();
    $p2->setCurso('TI');
    

    $p3->setNome('Joana');
    $p3->setGenero('F');
    $p3->setBolsa(12.5);
    $p3->fazerAniversario();
    $p3->pagarMensalidade();
    $p3->renovarBolsa();
    $p3->setCurso('Contabilidade');




    //
   // print_r($p1);
    echo '<br>';
    print_r($p2);
    echo '<br>';
    print_r($p3);
    echo '<br>';
    $p4->info();
   

    ?>
</body>

</html>