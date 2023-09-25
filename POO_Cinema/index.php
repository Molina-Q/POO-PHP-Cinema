<?php
require_once "Casting.php" ;
require_once "Film.php" ;
require_once "Genre.php" ;
require_once "Personne.php" ;
require_once "Role.php" ;

$genre1 = new Genre("Science fiction");

$persLucas = new Realisateur("Lucas", "George", "Homme", "1944-05-14") ;
$film1 = new Film("Star wars episode IV", "1977-10-19", "02:01:00", $persLucas, $genre1) ;

$casting1 = new Casting($film1) ;

$persHamill = new Acteur("Hamill","Mark","Homme","1951-09-25", $casting1) ;
$PersFord = new Acteur("Ford","Harrison","Homme","1942-07-13", $casting1) ;
$role1 = new Role("Luke Skywalker", $casting1) ;
$role2 = new Role("Han Solo", $casting1) ;


// echo $film1->getInfosRealisateur() ;
// echo "<br><br>" ;
echo $casting1 ;
echo "<br><br>" ;
// echo $casting1->showRole() ;
// echo "<br><br>" ;
// echo $casting1->showActeur() ;


?>