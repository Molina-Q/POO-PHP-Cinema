<?php
class Film {
    private string $titre;
    private \DateTime $dateSortie;
    private \DateTime $dureeFilm;
    private Realisateur $realisateur;
    private Genre $genre;
    private array $castings;

    public function __construct(string $titre, string $dateSortie, string $dureeFilm, Realisateur $realisateur, Genre $genre,) {
        $this->titre = $titre;
        $this->dateSortie = new \DateTime($dateSortie);
        $this->dureeFilm = new \DateTime($dureeFilm);
        $this->realisateur = $realisateur;
        $this->genre = $genre;

        $this->castings = [];

        $this->realisateur->addFilm($this);
        $this->genre->addFilm($this);
    }

    // getter
    public function getTitre()
    {
        return $this->titre;
    }

    public function getDateSortie()
    {
        return $this->dateSortie;
    }

    public function getDureeFilm()
    {
        return $this->dureeFilm;
    }

    public function getRealisateur()
    {
        return $this->realisateur;
    }

    public function getGenre()
    {
        return $this->genre;
    }

    // setter
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    public function setDateSortie($dateSortie)
    {
        $this->dateSortie = $dateSortie;
    }

    public function setDureeFilm($dureeFilm)
    {
        $this->dureeFilm = $dureeFilm;
    }
    
    public function setRealisateur($realisateur)
    {
        $this->realisateur = $realisateur;
    }
    public function setGenre($genre)
    {
        $this->genre = $genre;
    }

    //toString
    public function __toString()
    {
        return $this->titre;
    }

    //méthode
    public function getInfosRealisateur() 
    {
        return $this->getRealisateur()." (".$this->realisateur->showAge().")";
    }

    public function addCasting($castingObjet)
    {
        $this->castings[] = $castingObjet;
    }

    public function showCastings()
    {
        echo "<ul>";
        foreach($this->castings as $casting)
        {
            echo "<li><p>".$casting->getActeur()." incarne ".$casting->getRole()."</p></li>";
        }
        echo "</ul>";
    }

    public function showInfosFilm()
    {
        echo "<p> Le film ".$this->getTitre()." est réalisé par ".$this->getInfosRealisateur().", en ".$this->getDateSortie()->format("Y")."</p>
        <p>Durée : ".$this->getDureeFilm()->format("H:i")."</p>
        <p>Genre : ".$this->getGenre()."</p>";
        echo "<p>".$this->showCastings()."</p>";
    }
}






?>