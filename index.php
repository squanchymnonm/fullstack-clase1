<!DOCTYPE html>
<html1 lang="en">
<head>
    <?php


        $nombres = [
            "Nico",
            "Luciano",
            "Raul",
            "Leonardo"
        ]


    ?>
    <title> Este es un titulo </title>
</head>
<body>
Hola <?php
print $nombres[rand(0, count($nombres) - 1)] ?>
</body>
</html1>

