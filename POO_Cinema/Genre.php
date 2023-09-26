<?php

class Genre  {
    private string $libelle;
    private array $films;

    public function __construct(string $libelle) {
        $this->libelle = $libelle;

        $this->films = [];
    }

    // getter
    public function getLibelle()
    {
        return $this->libelle;
    }

    // setter
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }

    //toString
    public function __toString()
    {
        return $this->libelle;
    }
    
    //méthodes
    public function addFilm(Film $filmObjet)
    {
        $this->films[] = $filmObjet;
    }

    public function filmByGenre()
    {
        echo "<ul><p>Le genre ".$this->getLibelle()." est associé aux films : </p>";
        foreach($this->films as $film) {
            echo $film->getTitre();
        }
        echo "</ul>";
    }
}



?>