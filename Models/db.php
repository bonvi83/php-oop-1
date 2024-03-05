<?php

require_once 'movie.php';
require_once 'tvserie.php';


// la classe è un modello che descrive un preciso pezzo di realtà
// le mie variabili
class Production {
    public $titolo;
    public $lingua;
    public $voto;

    // costruttore: cioè la particolare funzione che viene invocata quando si usa l'operatore new (si dichiara solo nella classe)
    public function __construct($titolo, $lingua, $voto) {
        $this->titolo = $titolo;
        $this->lingua = $lingua;
        $this->voto = $voto;
    }
};

// manifestazione del costruttore nell'istanza, lo si fa con (); genero appunto oggetti/istanze
// creo degli arrey con titolo, lingua e voto
$movie1 = new Movie ('Salvate il soldato Andrea', 'itaGliano', 8, '50 milioni', '3 ore');
$movie2 = new Movie ('Harry Popper', 'olandese', 7, '100 milioni', '15 ore');
$movie3 = new Movie ('Il nome della rosa', 'russo', 9, '5 milioni', '2 ore');
$movie4 = new Movie ('Tutti pazzi per Mary', 'inglese', 6, '3 milioni', '1 volta');
$movie5 = new Movie ('La dolce vita', 'spagnolo', 10, '1 milione', '30 anni');
var_dump($movie1);

$movies = [$movie1, $movie2, $movie3, $movie4, $movie5];
// var_dump($movies);

?>