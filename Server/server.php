<?php

require_once __DIR__ . '/Models/movie.php';
require_once __DIR__ . '/Models/genre.php';
require_once __DIR__ . '/Models/actor.php';

$genres_array = [];

$genre_animation = new Genre('Animation');
$genres_array[] = $genre_animation;
$genre_action = new Genre('Action');
$genres_array[] = $genre_action;
$genre_adventure = new Genre('Adventure');
$genres_array[] = $genre_adventure;
$genre_comedy = new Genre('Comedy');
$genres_array[] = $genre_comedy;
$genre_crime = new Genre('Crime');
$genres_array[] = $genre_crime;
$genre_drama = new Genre('Drama');
$genres_array[] = $genre_drama;
$genre_fantasy = new Genre('Fantasy');
$genres_array[] = $genre_fantasy;
$genre_horror = new Genre('Horror');
$genres_array[] = $genre_horror;
$genre_musical = new Genre('Musical');
$genres_array[] = $genre_musical;
$genre_thriller = new Genre('Thriller');
$genres_array[] = $genre_thriller;

// var_dump($genres_array);


$movies_array = [];

$movie1 = new Movie('The Lion King', '1994', $genre_animation);
$movie1->setSecondaryGenre($genre_adventure);
$movie1->setTertiaryGenre($genre_drama);
$movie1->setLength(88);
$movie1->setRating(85);
$movie1->setDirector(['Roger Allers', 'Rob Minkoff']);
$movie1->setCountry('United States');
$movie1->setSynopsis('Lion prince Simba and his father are targeted by his bitter uncle, who wants to ascend the throne himself.');

var_dump($movie1->getSecondaryGenre());

var_dump($movie1);
$movies_array[] = $movie1;

echo '<hr>';

$movie2 = new Movie('Parasite', '2019', $genre_drama);
$movie2->setSecondaryGenre($genre_thriller);
// $movie2->setTertiaryGenre(null);
$movie2->setLength(132);
$movie2->setRating(85);
$movie2->setDirector(['Bong Joon Ho']);
$movie2->setCountry('South Korea');
$movie2->setSynopsis('Greed and class discrimination threaten the newly-formed symbiotic relationship between the wealthy Park family and the destitute Kim clan.');

var_dump($movie2->getSecondaryGenre());

var_dump($movie2);
$movies_array[] = $movie2;

echo '<hr>';

var_dump($movies_array);

// echo 'connected';
