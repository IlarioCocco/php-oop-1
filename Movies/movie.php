<!-- create un file index.php in cui:

=> è definita una classe ‘Movie’
=> all'interno della classe sono dichiarate delle variabili d'istanza
=> all'interno della classe è definito un costruttore
=> all'interno della classe è definito almeno un metodo
=> vengono istanziati almeno due oggetti ‘Movie’ e stampati 
a schermo i valori delle relative proprietà -->

<?php

class Movie {

    private $titolo;
    private $regia;
    private $paese;
    private $anno;
    private $genere;
    private $durata;

    function __construct($titolo, $regia, $paese, $anno, $genere, $durata){
        $this->titolo = $titolo;
        $this->regia = $regia;
        $this->paese = $paese;
        $this->anno = $anno;
        $this->genere = $genere;
        $this->durata = $durata;
    }

    public function getTitolo() {
        return $this->titolo;
    }

    public function  getGenere() {
        return $this->genere;
    }
    
}

?>