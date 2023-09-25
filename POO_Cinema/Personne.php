<?php

class Personne  {
    private string $nom ;
    private string $prenom ;
    private string $sexe ;
    private \DateTime $dateDeNaissance ;

    public function __construct(string $nom, string $prenom, string $sexe, string $dateDeNaissance) {
        $this->nom = $nom ;
        $this->prenom = $prenom ;
        $this->sexe = $sexe ;
        $this->dateDeNaissance = new \DateTime($dateDeNaissance) ;
    }

    // getter
    public function getNom()
    {
        return $this->nom ;
    }

    public function getPrenom()
    {
        return $this->prenom ;
    }

    public function getSexe()
    {
        return $this->sexe ;
    }

    public function getDateDeNaissance()
    {
        return $this->dateDeNaissance ;
    }

    // setter
    public function setNom($nom)
    {
        $this->nom = $nom ;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom ;
    }

    public function setSexe($sexe)
    {
        $this->sexe = $sexe ;
    }
    
    public function setDateDeNaissance($dateDeNaissance)
    {
        $this->dateDeNaissance = $dateDeNaissance ;
    }

    //toString



    //méthode

    public function getAge() 
    {
        $dateNow = new \DateTime("now") ;
        $dateTimeDeNaissance = $this->getDateDeNaissance() ;
        $age = date_diff($dateNow, $dateTimeDeNaissance)->format("%y ans") ;
        return $age ;
    }

}

class Realisateur extends Personne  {

    public function __construct(string $nom, string $prenom, string $sexe, string $dateDeNaissance) {
    parent::__construct($nom, $prenom, $sexe, $dateDeNaissance) ;
    }

}

class Acteur extends Personne  {
    private Casting $casting ;

    public function __construct(string $nom, string $prenom, string $sexe, string $dateDeNaissance, Casting $casting) {
        parent::__construct($nom, $prenom, $sexe, $dateDeNaissance) ;
        $this->casting = $casting ;

        $this->casting->addCasting($this) ;
    }
     
}



?>