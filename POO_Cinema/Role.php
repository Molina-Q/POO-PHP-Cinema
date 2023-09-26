<?php

class Role {
    private string $nom;
    private array $castings;

    public function __construct(string $nom) {
        $this->nom = $nom;

        $this->castings = [];
    }

    // getter
    public function getNom()
    {
        return $this->nom;
    }

    //setter
    public function setNom($nom) 
    {
        $this->nom = $nom; 
    }

    // toString
    public function __toString()
    {
        return $this->nom;
    }

    // Méthode
    public function addCasting(Casting $castingObjet)
    {
        $this->castings[] = $castingObjet;
    }

    public function playedBy()
    {
        echo "le role de ".$this->getNom()." a été joué par : ";
        echo "<ul>";
        foreach($this->castings as $casting) {
            echo "<li><p>".$casting->getActeur()."</p></li>";
        }
        echo "</ul>";
    }
}
?>