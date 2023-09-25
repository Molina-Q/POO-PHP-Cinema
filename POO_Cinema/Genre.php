<?php

class Genre  {
    private string $genre ;

    public function __construct(string $genre) {
        $this->genre = $genre ;
    }

    public function getGenre()
    {
        return $this->genre ;
    }

    public function setGenre($genre)
    {
        $this->genre = $genre ;
    }
}



?>