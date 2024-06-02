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
$genre_scifi = new Genre('Sci-fi');
$genres_array[] = $genre_scifi;
$genre_thriller = new Genre('Thriller');
$genres_array[] = $genre_thriller;

// var_dump($genres_array);

echo '<hr>';

$movies_array = [];

$movie1 = new Movie('The Lion King', '1994', $genre_animation);
$movie1->setSecondaryGenre($genre_adventure);
$movie1->setTertiaryGenre($genre_drama);
$movie1->setLength(88);
$movie1->setRating(85);
$movie1->setDirector(['Roger Allers', 'Rob Minkoff']);
$movie1->setCountry('United States');
$movie1->setSynopsis("Lion prince Simba and his father are targeted by his bitter uncle, who wants to ascend the throne himself.");

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
$movie2->setSynopsis("Greed and class discrimination threaten the newly-formed symbiotic relationship between the wealthy Park family and the destitute Kim clan.");

var_dump($movie2->getSecondaryGenre());

var_dump($movie2);
$movies_array[] = $movie2;

echo '<hr>';

$movie3 = new Movie('Dune', '2021', $genre_action);
$movie3->setSecondaryGenre($genre_adventure);
$movie3->setTertiaryGenre($genre_drama);
$movie3->setLength(155);
$movie3->setRating(80);
$movie3->setDirector(['Denis Villeneuve']);
$movie3->setCountry('United States');
$movie3->setSynopsis("A noble family becomes embroiled in a war for control over the galaxy's most valuable asset while its heir becomes troubled by visions of a dark future.");

var_dump($movie3);
$movies_array[] = $movie3;

echo '<hr>';

$movie4 = new Movie('Dune: Part II', '2024', $genre_action);
$movie4->setSecondaryGenre($genre_adventure);
$movie4->setTertiaryGenre($genre_drama);
$movie4->setLength(166);
$movie4->setRating(86);
$movie4->setDirector(['Denis Villeneuve']);
$movie4->setCountry('United States');
$movie4->setSynopsis("Paul Atreides unites with Chani and the Fremen while seeking revenge against the conspirators who destroyed his family.");

var_dump($movie4);
$movies_array[] = $movie4;

echo '<hr>';

$movie5 = new Movie('Interstellar', '2014', $genre_adventure);
$movie5->setSecondaryGenre($genre_drama);
$movie5->setTertiaryGenre($genre_scifi);
$movie5->setLength(169);
$movie5->setRating(87);
$movie5->setDirector(['Christopher Nolan']);
$movie5->setCountry('United States');
$movie5->setSynopsis("When Earth becomes uninhabitable in the future, a farmer and ex-NASA pilot, Joseph Cooper, is tasked to pilot a spacecraft, along with a team of researchers, to find a new planet for humans.");

var_dump($movie5);
$movies_array[] = $movie5;

echo '<hr>';

var_dump($movies_array);

// echo 'connected';
