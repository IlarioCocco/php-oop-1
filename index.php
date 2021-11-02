<?php

require __DIR__ . "./Movies/movie.php";
$predator = new Movie("predator", "Jhon McTiernan", "u.s.a", "1987", "fantascienza", 107,);
var_dump($predator);

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
</head>

<body>
    <!-- stampa dei due obj movie -->
    <?php
    echo
    "<ul>
        <li>il genere del Film {$predator->getTitolo()} è: {$predator->getGenere()}</li>
    </ul>"
    ?>

</body>

</html>