<?php

require_once 'db.php';


// vado a definire la classe TVSerie che va ad estendere la classe Production
// e include una proprietà per il numero delle stagioni.
class TVSerie extends Production {
    private $stagioni;

    public function __construct($titolo, $lingua, $voto, $stagioni) {
        // parametri utilizzati per inizializzare le proprietà dell'oggetto
        parent::__construct($titolo, $lingua, $voto);
        // imposta il numero di stagioni della serie utilizzando il valore passato al costruttore
        $this->stagioni = $stagioni;
    }

    // metodo pubblico per restituire numero stagioni
    public function getStagioni() {
        return $this->stagioni;
    }
}
?>