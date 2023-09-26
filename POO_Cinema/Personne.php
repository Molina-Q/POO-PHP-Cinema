<?php

class Personne  {
    private string $nom;
    private string $prenom;
    private string $sexe;
    private \DateTime $dateDeNaissance;

    public function __construct(string $nom, string $prenom, string $sexe, string $dateDeNaissance) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->sexe = $sexe;
        $this->dateDeNaissance = new \DateTime($dateDeNaissance);
    }

    // getter
    public function getNom()
    {
        return $this->nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function getSexe()
    {
        return $this->sexe;
    }

    public function getDateDeNaissance()
    {
        return $this->dateDeNaissance;
    }

    // setter
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
    }
    
    public function setDateDeNaissance($dateDeNaissance)
    {
        $this->dateDeNaissance = $dateDeNaissance;
    }

    //toString
    public function __toString()
    {
        return $this->prenom." ".$this->nom;
    }

    //méthode
    public function showAge() 
    {
        $dateNow = new \DateTime("now");
        $dateTimeDeNaissance = $this->getDateDeNaissance();
        $age = date_diff($dateNow, $dateTimeDeNaissance)->format("%y ans");
        return $age;
    }

}

class Realisateur extends Personne  {
    private array $films;

    public function __construct(string $nom, string $prenom, string $sexe, string $dateDeNaissance) {
        parent::__construct($nom, $prenom, $sexe, $dateDeNaissance);
        
        $this->films = [];
    }

    public function addFilm(Film $filmObjet)
    {
        $this->films[] = $filmObjet;
    }

    public function filmoReal()
    {
        echo $this." a réalisé : ";
        echo "<ul>";
        foreach($this->films as $film) {
            echo "<li><p>".$film->getTitre()."</p></li>";
        }
        echo "</ul>";
    }

}

class Acteur extends Personne  {
    private array $castings;

    public function __construct(string $nom, string $prenom, string $sexe, string $dateDeNaissance) {
        parent::__construct($nom, $prenom, $sexe, $dateDeNaissance);

        $this->castings = [];
    }

    public function addCasting(Casting $castingObjet)
    {
        $this->castings[] = $castingObjet;
    }
     
    public function filmoActeur() 
    {
        echo $this." a joué dans les films : ";
        echo "<ul>";
        foreach($this->castings as $casting) {
            echo "<li><p>".$casting->getFilm()."</p></li>";
        }
        echo "</ul>";
    }
}



?>