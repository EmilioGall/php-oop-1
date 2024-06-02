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
$movie1->setPoster('TheLionKing(1994)');
$movie1->setLength(88);
$movie1->setRating(85);
$movie1->setDirector(['Roger Allers', 'Rob Minkoff']);
$movie1->setCountry('United States');
$movie1->setSynopsis("Lion prince Simba and his father are targeted by his bitter uncle, who wants to ascend the throne himself.");

var_dump($movie1->getSecondaryGenre());

// var_dump($movie1);
$movies_array[] = $movie1;

echo '<hr>';

$movie2 = new Movie('Parasite', '2019', $genre_drama);
$movie2->setSecondaryGenre($genre_thriller);
// $movie2->setTertiaryGenre(null);
$movie2->setPoster('Parasite(2019)');
$movie2->setLength(132);
$movie2->setRating(85);
$movie2->setDirector(['Bong Joon Ho']);
$movie2->setCountry('South Korea');
$movie2->setSynopsis("Greed and class discrimination threaten the newly-formed symbiotic relationship between the wealthy Park family and the destitute Kim clan.");

var_dump($movie2->getSecondaryGenre());

// var_dump($movie2);
$movies_array[] = $movie2;

echo '<hr>';

$movie3 = new Movie('Dune', '2021', $genre_action);
$movie3->setSecondaryGenre($genre_adventure);
$movie3->setTertiaryGenre($genre_drama);
$movie3->setPoster('Dune(2021)');
$movie3->setLength(155);
$movie3->setRating(80);
$movie3->setDirector(['Denis Villeneuve']);
$movie3->setCountry('United States');
$movie3->setSynopsis("A noble family becomes embroiled in a war for control over the galaxy's most valuable asset while its heir becomes troubled by visions of a dark future.");

// var_dump($movie3);
$movies_array[] = $movie3;

// echo '<hr>';

$movie4 = new Movie('Dune: Part II', '2024', $genre_action);
$movie4->setSecondaryGenre($genre_adventure);
$movie4->setTertiaryGenre($genre_drama);
$movie4->setPoster('DunePartTwo(2024)');
$movie4->setLength(166);
$movie4->setRating(86);
$movie4->setDirector(['Denis Villeneuve']);
$movie4->setCountry('United States');
$movie4->setSynopsis("Paul Atreides unites with Chani and the Fremen while seeking revenge against the conspirators who destroyed his family.");

// var_dump($movie4);
$movies_array[] = $movie4;

// echo '<hr>';

$movie5 = new Movie('Interstellar', '2014', $genre_adventure);
$movie5->setSecondaryGenre($genre_drama);
$movie5->setTertiaryGenre($genre_scifi);
$movie5->setPoster('Interstellar(2014)');
$movie5->setLength(169);
$movie5->setRating(87);
$movie5->setDirector(['Christopher Nolan']);
$movie5->setCountry('British-American');
$movie5->setSynopsis("When Earth becomes uninhabitable in the future, a farmer and ex-NASA pilot, Joseph Cooper, is tasked to pilot a spacecraft, along with a team of researchers, to find a new planet for humans.");

// var_dump($movie5);
$movies_array[] = $movie5;

// echo '<hr>';

$movie6 = new Movie('The Matrix', '1999', $genre_action);
$movie6->setSecondaryGenre($genre_scifi);
// $movie6->setTertiaryGenre($genre_scifi);
$movie6->setPoster('TheMatrix(1999)');
$movie6->setLength(136);
$movie6->setRating(87);
$movie6->setDirector(['Lana Wachowski', 'Lilly Wachowski']);
$movie6->setCountry('United States');
$movie6->setSynopsis("When a beautiful stranger leads computer hacker Neo to a forbidding underworld, he discovers the shocking truth--the life he knows is the elaborate deception of an evil cyber-intelligence.");

// var_dump($movie6);
$movies_array[] = $movie6;

// echo '<hr>';

$movie7 = new Movie('Inception', '2010', $genre_action);
$movie7->setSecondaryGenre($genre_adventure);
$movie7->setTertiaryGenre($genre_scifi);
$movie7->setPoster('Inception(2010)');
$movie7->setLength(148);
$movie7->setRating(88);
$movie7->setDirector(['Christopher Nolan']);
$movie7->setCountry('United States');
$movie7->setSynopsis("A thief who steals corporate secrets through the use of dream-sharing technology is given the inverse task of planting an idea into the mind of a C.E.O., but his tragic past may doom the project and his team to disaster.");

// var_dump($movie7);
$movies_array[] = $movie7;

// echo '<hr>';

$movie8 = new Movie('The Lord of the Rings: The Return of the King', '2003', $genre_action);
$movie8->setSecondaryGenre($genre_adventure);
$movie8->setTertiaryGenre($genre_drama);
$movie8->setPoster('TheLordOfTheRings_TheReturnOfTheKing(2003)(2003)');
$movie8->setLength(201);
$movie8->setRating(90);
$movie8->setDirector(['Peter Jackson']);
$movie8->setCountry('United States');
$movie8->setSynopsis("Gandalf and Aragorn lead the World of Men against Sauron's army to draw his gaze from Frodo and Sam as they approach Mount Doom with the One Ring.");

// var_dump($movie8);
$movies_array[] = $movie8;

// echo '<hr>';

$movie9 = new Movie('The Godfather', '1972', $genre_crime);
$movie9->setSecondaryGenre($genre_drama);
// $movie9->setTertiaryGenre($genre_drama);
$movie9->setPoster('TheGodfather(1972)');
$movie9->setLength(175);
$movie9->setRating(92);
$movie9->setDirector(['Francis Ford Coppola']);
$movie9->setCountry('United States');
$movie9->setSynopsis("The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.");

// var_dump($movie9);
$movies_array[] = $movie9;

// echo '<hr>';

$movie10 = new Movie('The Dark Knight', '2008', $genre_action);
$movie10->setSecondaryGenre($genre_crime);
$movie10->setTertiaryGenre($genre_drama);
$movie6->setPoster('TheDarkKnight(2008)');
$movie10->setLength(152);
$movie10->setRating(90);
$movie10->setDirector(['Christopher Nolan']);
$movie10->setCountry('United States');
$movie10->setSynopsis("When the menace known as the Joker wreaks havoc and chaos on the people of Gotham, Batman must accept one of the greatest psychological and physical tests of his ability to fight injustice.");

// var_dump($movie10);
$movies_array[] = $movie10;

// echo '<hr>';

var_dump($movies_array);

// echo 'connected';
