<?php

require_once __DIR__ . '/Models/movie.php';
require_once __DIR__ . '/Models/genre.php';
require_once __DIR__ . '/Models/cast.php';

$genres_array = [];

$genre_animation = new Genre('Animation');
$genres_array[] = $genre_animation;
$genre_fantasy = new Genre('Fantasy');
$genres_array[] = $genre_fantasy;
$genre_action = new Genre('Action');
$genres_array[] = $genre_action;
$genre_comedy = new Genre('Comedy');
$genres_array[] = $genre_comedy;
$genre_horror = new Genre('Horror');
$genres_array[] = $genre_horror;
$genre_musical = new Genre('Musical');
$genres_array[] = $genre_musical;
$genre_teen_drama = new Genre('Teen Drama');
$genres_array[] = $genre_teen_drama;

var_dump($genres_array);

$movie1 = new Movie('La riconquista dei pianeti', '2024', $genre_fantasy);
$movie1->setSecondaryGenre($genre_animation);

var_dump($movie1);

echo 'connected';
