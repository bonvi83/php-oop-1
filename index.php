<?php

?>


<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OPP</title>

    <!-- CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1>FILMS</h1>

    <!-- ciclo dell'arrey -->
    <ul>
    <?php foreach($movies as $movie) : ?>
        <li> Titolo : <h3> <?= $titolo -> titolo ?> </h3></li>
        <li> Lingua: <?= $lingua -> lingua ?> </li>
        <li> Voto: <h5> <?= $voto -> voto ?> </h5></li>
    <?php endforeach; ?>
    </ul>

</body>
</html>