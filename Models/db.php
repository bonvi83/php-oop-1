<?php

// le mie variabili
class Production {
    public $titolo;
    public $lingua;
    public $voto;

    // costruttore: cioè la particolare funzione che viene invocata quando si usa l'operatore new (si dichiara solo nella classe)
    public function __costruct($titolo, $lingua, $voto) {
        $this -> titolo = $titolo;
        $this -> lingua = $lingua;
        $this -> voto = $voto;
    }



    // metodo per richiamare NON un oiggetto, ma una classe

}

?>