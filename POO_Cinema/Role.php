<?php

class Role {
    private string $role ;
    private Casting $casting ;

    public function __construct(string $role, Casting $casting) {
        $this->role = $role ;
        $this->casting = $casting ;

        $this->casting->addCasting($this) ;
    } 

    // getter
    public function getRole()
    {
        return $this->role ;
    }

    //setter
    public function setRole($role) 
    {
        $this->role = $role ; 
    }

    // toString
    public function __toString()
    {
   
    }
    // Méthode
}
?>