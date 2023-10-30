<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 09 - Teoria & Exercio</title>
</head>

<body>
    <pre>
    <?php
    # imports:
    require_once('Livro.php');
    require_once('Pessoa.php');

    //
    $p[0] = new Pessoa('pedro', 22, 'M');
    $p[1] = new Pessoa('MAria', 31, 'F');

    # 
    $l[0] = new Livro('PHP Basico', 'Jose da silva', 300, $p[0]);
    $l[0]->abrir();
    $l[0]->detalhes();
    ?>
    </pre>
</body>

</html>