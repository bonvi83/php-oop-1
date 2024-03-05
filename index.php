<?php
    include_once __DIR__ . '/Models/db.php';
    include_once __DIR__ . '/Models/movie.php';
    include_once __DIR__ . '/Models/tvserie.php';
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
        <h1>FILMS e SERIE TV</h1>
        
        <!-- ciclo for dell'arrey -->
        <ul>
            <?php foreach($movies as $movie) : ?>
                <li class="text-uppercase fs-5 fw-bold text-primary"> Titolo: <?= $movie->titolo ?> </li>
                <li class="fst-italic"> Lingua: <?= $movie->lingua ?> </li>
                <li class="fw-bold"> Voto: <?= $movie->voto ?> </li>
                <!-- <li> Profitti: <?= $movie->profitti ?> </li>
                <li> Durata: <?= $movie->durata ?> </li> -->
                <br>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>