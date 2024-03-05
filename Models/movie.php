<?php

require_once 'db.php';


// vado a definire la classe Movie che va ad estendere la classe Production
// significa che eredita tutte le proprietà e i metodi della classe Production 
// e può anche definire le sue proprietà (profitti e durata) e metodi aggiuntivi.
class Movie extends Production {
    private $profitti;
    private $durata;

    // costruttore che viene chiamato automaticamente quando viene istanziato un nuovo oggetto della classe Movie
    public function __construct($titolo, $lingua, $voto, $profitti, $durata) {
        // parametri utilizzati per inizializzare le proprietà dell'oggetto e per chiamare il costruttore della classe "Production"
        parent::__construct($titolo, $lingua, $voto);
        $this->profitti = $profitti;
        $this->durata = $durata;
    }

    // metodo pubblico per restituire profitti del film
    public function getProfitti() {
        return $this->profitti;
    }

    // metodo pubblico per restituire durata del film
    public function getDurata() {
        return $this->durata;
    }
}
?>