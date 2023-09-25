<?php
class Casting {
    private Film $film ;
    private array $castings ;

    public function __construct() {

        $this->castings = [] ;

        // $this->film->castingFilm($this) ;
    }

    // toString
    public function __toString()
    {
        return var_dump($this->castings) ;
    }

    // méthode
    public function addCasting($castingObjet)
    {
        $this->castings[] = $castingObjet ;
    }

    public function showActeur()
    {
        foreach($this->acteurs as $acteur) {
            echo $acteur->getPrenom()." ".$acteur->getNom()." | " ;
        }
    }

    // public function showRole()
    // {
    //     foreach($this->roles as $role) {
    //         echo $role->getRole()." | " ;
    //     }
    // }

    // public function rolePlayedBy() 
    // {
 
    // echo $role->getRole()." est joué par ".$acteur->getPrenom()." ".$acteur->getNom().". <br>" ;
        
    // }


}



?>
