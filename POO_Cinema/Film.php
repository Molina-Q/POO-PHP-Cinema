<?php
class Film {
    private string $titre ;
    private \DateTime $dateSortie ;
    private \DateTime $dureeFilm ;
    private Realisateur $realisateur ;
    private Genre $genre ;
    private array $castings ;

    public function __construct(string $titre, string $dateSortie, string $dureeFilm, Realisateur $realisateur, Genre $genre,) {
        $this->titre = $titre ;
        $this->dateSortie = new \DateTime($dateSortie) ;
        $this->dureeFilm = new \DateTime($dureeFilm) ;
        $this->realisateur = $realisateur ;
        $this->genre = $genre ;

        $this->castings = [] ;
    }

    // getter
    public function getTitre()
    {
        return $this->titre ;
    }

    public function getDateSortie()
    {
        return $this->dateSortie ;
    }

    public function getDureeFilm()
    {
        return $this->dureeFilm ;
    }

    public function getRealisateur()
    {
        return $this->realisateur ;
    }

    public function getGenre()
    {
        return $this->genre ;
    }

    // setter
    public function setTitre($titre)
    {
        $this->titre = $titre ;
    }

    public function setDateSortie($dateSortie)
    {
        $this->dateSortie = $dateSortie ;
    }

    public function setDureeFilm($dureeFilm)
    {
        $this->dureeFilm = $dureeFilm ;
    }
    
    public function setRealisateur($realisateur)
    {
        $this->realisateur = $realisateur ;
    }
    public function setGenre($genre)
    {
        $this->genre = $genre ;
    }

    //toString
    public function __toString()
    {
      
    }


    //méthode
    public function getInfosRealisateur() 
    {
        return $this->realisateur->getPrenom()." ".$this->realisateur->getNom()." (".$this->realisateur->getAge().")";
    }

    public function addCasting(Casting $castingObjet)
    {
        $this->castings[] = $castingObjet ;
    }

    public function showCasting($role1, $acteur1, $role2,  $acteur2)
    {
        foreach($this->castings as $casting)
        {
            echo $casting->rolePlayedBy($role1, $acteur1);
        }
    }
    
    public function showGenre()
    {
        return $this->genre->getGenre() ;
    }

    // public function getInfosFilm()
    // {
    //     echo "Le film ".$this->getTitre()." est réalisé par ".$this->getInfosRealisateur().", en ".$this->getDateSortie()->format("Y")."<br>
    //     Durée : ".$this->getDureeFilm()->format("h:i")."<br>
    //     Genre : ".$this->showGenre()."<br>";
    //     echo $this->showCasting($role, $acteur);
    // }
}






?>