<?php

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
$movie1 = new Production ('Salvate il soldato Andrea', 'itaGliano', 8);
$movie2 = new Production ('Harry Popper', 'olandese', 7);
$movie3 = new Production ('Il nome della rosa', 'russo', 9);
$movie4 = new Production ('Tutti pazzi per Mary', 'inglese', 6);
$movie5 = new Production ('La dolce vita', 'spagnolo', 10);
// var_dump($movie5);

$movies = [$movie1, $movie2, $movie3, $movie4, $movie5];
// var_dump($movies);



// aggiunta di due nuove classi:

// classe Movie con porofitti e durata

// classe TVSerie con numero di stagioni

?>