<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> au06 - Encapsulamento</title>
    <style>
       
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <main>
        <!-- lista de material de estudo -->
        <section class="container mt-5">
            <div class="container">
                <h1>Tabelas de Aulas, exercicios e projectos do OOP-PHP</h1>
                <p>

                    <pre>
                    <h3>Pilares do POO</h3>
                       E - Encapsulamento 
                       H - Heranca
                       P - Polimorfismo

                    </pre>
                </p>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Aulas</th>
                            <th scope="col">Exercicios</th>
                            <th scope="col">Projectos</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php

                        # Define the directory path
                        $dir = "../PHP-OOP/";
                        
                        # Get an array of the directory contents using scandir()
                        $files = scandir($dir);
                        # Output the contents of the directory using print_r()
                        foreach ($files as $key => $file) {
                            echo '<tr>';
                            if ($file[0] == "a" && $file[1] == "u") {
                                echo '<th scope="row">'.$key.'</th>';
                                echo '<td>'.$file.' <a href="'.$dir.$file.'"> --> </a></td>';
                            
                                echo ' 
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                ';
                            }

                        }
                        ?>



                    </tbody>
                </table>


             

            </div>
        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>