<?php
require_once "Casting.php";
require_once "Film.php";
require_once "Genre.php";
require_once "Personne.php";
require_once "Role.php";

function showSeparateurLigne() {
    echo "<p>***********************************************************************************</p>";
}

$genre1 = new Genre("Science fiction");
$genre2 = new Genre("Super-héros");

$persLucas = new Realisateur("Lucas", "George", "Homme", "1944-05-14");
$persNolan = new Realisateur("Nolan", "Christopher", "Homme", "1970-07-30");

$film1 = new Film("Star wars episode IV", "1977-10-19", "02:01:00", $persLucas, $genre1);
$film2 = new Film("Star wars episode V", "1977-10-19", "02:01:00", $persLucas, $genre1);
$film3 = new Film("Star wars episode VI", "1977-10-19", "02:01:00", $persLucas, $genre1);
$film4 = new Film("Star wars episode XX", "1977-10-19", "02:01:00", $persLucas, $genre1);

$filmBat1 = new Film("Batman IV", "2003-09-19", "02:40:00", $persNolan, $genre2);
$filmBat2 = new Film("Bat Runner", "1977-10-19", "02:01:00", $persNolan, $genre1);
$filmBat3 = new Film("Bat to the future", "1977-10-19", "02:01:00", $persNolan, $genre1);

$persHamill = new Acteur("Hamill","Mark","Homme","1951-09-25");
$PersFord = new Acteur("Ford","Harrison","Homme","1942-07-13");

$persKeat = new Acteur("Keaton","Michael","Homme","1972-09-05");
$persKilmer = new Acteur("Kilmer","Val","Homme","1972-09-05");
$persClooney = new Acteur("Clooney","George","Homme","1972-09-05");

$role1 = new Role("Luke Skywalker");
$role2 = new Role("Han Solo");

$roleBat = new Role("Batman");
$roleJoke = new Role("Le Joker");

$castingLuke2 = new Casting($film2, $persHamill, $role1);
$castingLuke3 = new Casting($film3, $persHamill, $role1);
$castingLuke1 = new Casting($film1, $persHamill, $role1);
$castingLuke4 = new Casting($film4, $persHamill, $role1);
$castingHan1 = new Casting($film1, $PersFord, $role2);

$castingBat1 = new Casting($filmBat1, $persKeat, $roleBat);
$castingBat2 = new Casting($filmBat2, $persKilmer, $roleBat);
$castingBat3 = new Casting($filmBat3, $persClooney, $roleBat);
$castingJoke1 = new Casting($filmBat1, $persHamill, $roleJoke);

$film1->showInfosFilm();

showSeparateurLigne();

$filmBat1->showInfosFilm();

showSeparateurLigne();

$roleBat->playedBy();

showSeparateurLigne();

// genres
$genres = [$genre1, $genre2];

foreach ($genres as $genre) {
    echo "<h2>Genre $genre</h2>";
    $genre->filmByGenre();
}

showSeparateurLigne();

// acteurs
$acteurs = [$persHamill, $PersFord, $persKeat, $persKilmer, $persClooney];

foreach ($acteurs as $acteur) {
    echo "<h2>Acteur $acteur</h2>";
    $acteur->filmoActeur();
}

showSeparateurLigne();

$persLucas->filmoReal();

showSeparateurLigne();

$persNolan->filmoReal();


?>