<?php
class Casting {
    private Film $film;
    private Acteur $acteur;
    private Role $role;
 

    public function __construct(Film $film, Acteur $acteur, Role $role) {
        $this->film = $film;
        $this->acteur = $acteur;
        $this->role = $role;

        $this->film->addCasting($this);
        $this->acteur->addCasting($this);
        $this->role->addCasting($this);
    }

    //getter
    public function getFilm()
    {
        return $this->film;
    }

    public function getActeur()
    {
        return $this->acteur;
    }

    public function getRole()
    {
        return $this->role;
    }

    //setter
    public function setFilm($film)
    {
        $this->film = $film;
    }

    public function setActeur($acteur)
    {
        $this->acteur = $acteur;
    }

    public function setRole($role)
    {
        $this->role = $role;
    }

    // toString
    public function __toString()
    {
        return $this->acteur." ".$this->role;
    }
    
    // méthode

}



?>
