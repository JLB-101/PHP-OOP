<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula 14 - Projecto Youtube PT1</title>
</head>
<body>
    <h1></h1>
    <p></p>
    <?php 
    # imports:
    require_once('Video.php');

    //
    $v[0] = new Video(1,'Aula 1 OOP');
    $v[1] = new Video(2,'PHP OOP');
    $v[2] = new Video(3,'Aula HTML e PHP com OOP');

    //output -- saida:
    var_dump($v);



    ?>   
</body>
</html>