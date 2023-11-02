<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula 14 & 15 Projecto Youtube </title>
</head>
<body>
    <h1></h1>
    <p></p>
    <pre>
    <?php 
    # imports:
    require_once('Video.php');
    require_once('Gafanhoto.php');
    require_once('Visualizacao.php');

    $v[0] = new Video(1,'Aula 1 OOP');
    $v[1] = new Video(2,'PHP OOP');
    $v[2] = new Video(3,'Aula HTML e PHP com OOP');

    //output -- saida:
    // var_dump($v);

    echo'<br>';
    $g[0] = new Gafanhoto('Jubileu', 22, 'M', 'juba');
    $g[1] = new Gafanhoto('Creuza', 26, 'F', 'Cre');

    //Visualizacao -- Aula 15
    $vis[0] = new Visualizacao($g[0], $v[2]);
   
    $vis[1] = new Visualizacao($g[1], $v[1]);
    $vis[1]->avaliar(5);
    $vis[2] = new Visualizacao($g[1], $v[1]);
    $vis[2]->avaliar(5);
    
    print_r($vis);


    // var_dump($g);

  
  

    ?>   
    </pre>
</body>


</html>