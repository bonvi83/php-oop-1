<?php
    include_once __DIR__ . '/Models/db.php';

$movie1 = new Production ('Salvate il soldato Andrea', 'itaGliano', 8);
$movie2 = new Production ('Harry Popper', 'olandese', 7);
$movie3 = new Production ('Il nome della rosa', 'russo', 9);
$movie4 = new Production ('Tutti pazzi per Mary', 'inglese', 6);
$movie5 = new Production ('La dolce vita', 'spagnolo', 10);
// var_dump($movie5);

$movies = [$movie1, $movie2, $movie3, $movie4, $movie5];
// var_dump($movies);
?>



<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OPP</title>

    <!-- CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- my CSS -->
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="container">

        <h1>FILMS</h1>
        
        <!-- ciclo dell'arrey -->
        <ul>
            <?php foreach($movies as $movie) : ?>
                <li class="text-uppercase fs-5 fw-bold"> Titolo: <?= $movie->titolo ?> </li>
                <li class="fst-italic"> Lingua: <?= $movie->lingua ?> </li>
                <li class="fw-bold"> Voto: <?= $movie->voto ?> </li>
                <br>
            <?php endforeach; ?>
        </ul>
            
    </div>
</body>
</html>