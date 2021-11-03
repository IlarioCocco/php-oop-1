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

    public function __construct($_titolo, $_regia, $_paese, $_anno, $_genere, $_durata){
        $this->titolo = $_titolo;
        $this->regia = $_regia;
        $this->paese = $_paese;
        $this->anno = $_anno;
        $this->genere = $_genere;
        $this->durata = $_durata;
    }

    public function getTitolo() {
        return $this->titolo;
    }

    public function  getGenere() {
        return $this->genere;
    }

}

?>