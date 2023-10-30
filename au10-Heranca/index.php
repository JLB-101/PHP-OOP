<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Aula 10 - Heranca</title>
</head>

<body>
    <h1></h1>
    <?php
    # imports:
    require_once('Pessoa.php');
    require_once('Funcionario.php');
    require_once('Aluno.php');
    require_once('Professor.php');

    //
    $p1 = new Pessoa();
    $p2 = new Aluno();
    $p3 = new Professor();
    $p4 = new Funcionario();

    //
    $p1->setNome('John');
    $p2->setNome('Joau');
    $p3->setNome('Chaw');
    $p4->setNome('Matt');


    //
    print_r($p1);
    echo '<br>';
    print_r($p2);
    echo '<br>';
    print_r($p3);
    echo '<br>';
    print_r($p4);
    echo '<br>';

    ?>
</body>

</html>