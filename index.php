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
        <h1>FILMS e SERIES TV</h1>
        
        <!-- ciclo for dell'arrey Movie -->
        <ul>
            <?php foreach($movies as $movie) : ?>
                <li class="text-uppercase fs-5 fw-bold text-primary"> Titolo: <?= $movie->titolo ?> </li>
                <li class="fst-italic"> Lingua: <?= $movie->lingua ?> </li>
                <li class="fw-bold"> Voto: <?= $movie->voto ?> </li>
                <?php if($movie instanceof Movie): ?>
                <li> Profitti: <?= $movie->getProfitti(); ?> </li>
                <li> Durata: <?= $movie->getDurata(); ?> </li>
                <?php endif; ?>
                <br>
            <?php endforeach; ?>
        </ul>

        <!-- ciclo for dell'arrey TESerie -->
        <ul>
            <?php foreach($seriestv as $serietv) : ?>
                <li class="text-uppercase fs-5 fw-bold text-info"> Titolo: <?= $serietv->titolo ?> </li>
                <li class="fst-italic"> Lingua: <?= $serietv->lingua ?> </li>
                <li class="fw-bold"> Voto: <?= $serietv->voto ?> </li>
                <?php if($serietv instanceof TVSerie): ?>
                <li> Stagioni: <?= $serietv->getStagioni(); ?> </li>
                <?php endif; ?>
                <br>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>