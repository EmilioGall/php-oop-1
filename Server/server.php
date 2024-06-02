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

var_dump($genres_array);


$movies_array = [];

$movie1 = new Movie('La riconquista dei pianeti', '2024', $genre_fantasy);
$movie1->setSecondaryGenre($genre_animation);

var_dump($movie1);

var_dump($movie1->getSecondaryGenre());

// echo 'connected';
