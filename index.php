<!DOCTYPE html>
<html1 lang="en">
<head>
    <?php


        $nombres = [
            "Nico",
            "Luciano",
            "Raul",
            "Leonardo"
        ];

        $peliculas = [
                [
                    "nombre" => "StarWars",
                    "director" => "Goeroge Lucas"
                ],
                [
                    "nombre" => "StarWars 2",
                    "director" => "Goeroge Lucas"
                ],
                [
                    "nombre" => "StarWars 3",
                    "director" => "Goeroge Lucas"
                ],
                [
                    "nombre" => "Dragon ball",
                    "director" => "director 1"
                ],
                [
                    "nombre" => "El señor de los anillos",
                    "director" => "director 2"
                ]
        ];


    ?>
    <title> Este es un titulo </title>
</head>
<body>



<ul>
    <?php
    filtrarPorDirector($peliculas, "director 1");

    ?>

</ul>

        <?php



        function filtrarPorDirector($peliculas, $nombreDelDirector) {
            foreach ($peliculas as $pelicula) {
                if ($pelicula["director"] == $nombreDelDirector) {
                    print "<li>" . $pelicula["nombre"] ;
                }
            }
        }

        ?>

</body>
</html1>

