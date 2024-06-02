<?php

require_once __DIR__ . '/Models/movie.php';
require_once __DIR__ . '/Models/genre.php';
require_once __DIR__ . '/Models/actor.php';



/**********  CREATE MOVIES GENRES ARRAY  **********/
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



/**********  CREATION MOVIES ACTORS ARRAYS  **********/

/* The Lion King */
$the_lion_king_actors_array = [];

$matthew_broderick = new Actor('Matthew', 'Broderick');
$the_lion_king_actors_array[] = $matthew_broderick;
$jeremy_irons = new Actor('Jeremy', 'Irons');
$the_lion_king_actors_array[] = $jeremy_irons;
$james_earl_jones = new Actor('James Earl', 'Jones');
$the_lion_king_actors_array[] = $james_earl_jones;

// var_dump($the_lion_king_actors_array);

/* Parasite */
$parasite_actors_array = [];

$song_kangho = new Actor('Song', 'Kang-ho');
$parasite_actors_array[] = $song_kangho;
$lee_sunkyun = new Actor('Lee', 'Sun-kyun');
$parasite_actors_array[] = $lee_sunkyun;
$cho_yeojeong = new Actor('Cho', 'Yeo-jeong');
$parasite_actors_array[] = $cho_yeojeong;

// var_dump($parasite_actors_array);

/* Dune */
$dune_actors_array = [];

$timothee_chalamet = new Actor('Timothée', 'Chalamet');
$dune_actors_array[] = $timothee_chalamet;
$rebecca_ferguson = new Actor('Rebecca', 'Ferguson');
$dune_actors_array[] = $rebecca_ferguson;
$zendaya_coleman = new Actor('Zendaya', 'Coleman');
$dune_actors_array[] = $zendaya_coleman;

// var_dump($dune_actors_array);

/* Dune II */
$dune2_actors_array = [];

$timothee_chalamet = new Actor('Timothée', 'Chalamet');
$dune2_actors_array[] = $timothee_chalamet;
$rebecca_ferguson = new Actor('Rebecca', 'Ferguson');
$dune2_actors_array[] = $rebecca_ferguson;
$zendaya_coleman = new Actor('Zendaya', 'Coleman');
$dune2_actors_array[] = $zendaya_coleman;

// var_dump($dune2_actors_array);

/* Interstellar */
$interstellar_actors_array = [];

$matthew_mcconaughey = new Actor('Matthew', 'McConaughey');
$interstellar_actors_array[] = $matthew_mcconaughey;
$anne_hathaway = new Actor('Anne', 'Hathaway');
$interstellar_actors_array[] = $anne_hathaway;
$jessica_chastain = new Actor('Jessica', 'Chastain');
$interstellar_actors_array[] = $jessica_chastain;

var_dump($interstellar_actors_array);

echo '<hr>';

/**********  CREATION MOVIES ARRAY  **********/
$movies_array = [];


/* The Lion King */
$movie_the_lion_king = new Movie('The Lion King', '1994', $genre_animation);
$movie_the_lion_king->setSecondaryGenre($genre_adventure);
$movie_the_lion_king->setTertiaryGenre($genre_drama);
$movie_the_lion_king->setPoster('TheLionKing(1994)');
$movie_the_lion_king->setLength(88);
$movie_the_lion_king->setRating(85);
$movie_the_lion_king->setDirector(['Roger Allers', 'Rob Minkoff']);
$movie_the_lion_king->setCountry('United States');
$movie_the_lion_king->setCast($the_lion_king_actors_array);
$movie_the_lion_king->setSynopsis("Lion prince Simba and his father are targeted by his bitter uncle, who wants to ascend the throne himself.");

// var_dump($movie_the_lion_king->getSecondaryGenre());

// var_dump($movie_the_lion_king);
$movies_array[] = $movie_the_lion_king;


/* Parasite */
$movie_parasite = new Movie('Parasite', '2019', $genre_drama);
$movie_parasite->setSecondaryGenre($genre_thriller);
// $movie_parasite->setTertiaryGenre(null);
$movie_parasite->setPoster('Parasite(2019)');
$movie_parasite->setLength(132);
$movie_parasite->setRating(85);
$movie_parasite->setDirector(['Bong Joon Ho']);
$movie_parasite->setCountry('South Korea');
$movie_parasite->setCast($parasite_actors_array);
$movie_parasite->setSynopsis("Greed and class discrimination threaten the newly-formed symbiotic relationship between the wealthy Park family and the destitute Kim clan.");

// var_dump($movie_parasite->getSecondaryGenre());

// var_dump($movie_parasite);
$movies_array[] = $movie_parasite;


/* Dune */
$movie_dune = new Movie('Dune', '2021', $genre_action);
$movie_dune->setSecondaryGenre($genre_adventure);
$movie_dune->setTertiaryGenre($genre_drama);
$movie_dune->setPoster('Dune(2021)');
$movie_dune->setLength(155);
$movie_dune->setRating(80);
$movie_dune->setDirector(['Denis Villeneuve']);
$movie_dune->setCountry('United States');
$movie_dune->setCast($dune_actors_array);
$movie_dune->setSynopsis("A noble family becomes embroiled in a war for control over the galaxy's most valuable asset while its heir becomes troubled by visions of a dark future.");

// var_dump($movie_dune);
$movies_array[] = $movie_dune;


/* Dune II */
$movie_dune2 = new Movie('Dune: Part II', '2024', $genre_action);
$movie_dune2->setSecondaryGenre($genre_adventure);
$movie_dune2->setTertiaryGenre($genre_drama);
$movie_dune2->setPoster('DunePartTwo(2024)');
$movie_dune2->setLength(166);
$movie_dune2->setRating(86);
$movie_dune2->setDirector(['Denis Villeneuve']);
$movie_dune2->setCountry('United States');
$movie_dune2->setCast($dune2_actors_array);
$movie_dune2->setSynopsis("Paul Atreides unites with Chani and the Fremen while seeking revenge against the conspirators who destroyed his family.");

// var_dump($movie_dune2);
$movies_array[] = $movie_dune2;

/* Interstellar */
$movie_interstellar = new Movie('Interstellar', '2014', $genre_adventure);
$movie_interstellar->setSecondaryGenre($genre_drama);
$movie_interstellar->setTertiaryGenre($genre_scifi);
$movie_interstellar->setPoster('Interstellar(2014)');
$movie_interstellar->setLength(169);
$movie_interstellar->setRating(87);
$movie_interstellar->setDirector(['Christopher Nolan']);
$movie_interstellar->setCountry('British-American');
$movie_interstellar->setCast($interstellar_actors_array);
$movie_interstellar->setSynopsis("When Earth becomes uninhabitable in the future, a farmer and ex-NASA pilot, Joseph Cooper, is tasked to pilot a spacecraft, along with a team of researchers, to find a new planet for humans.");

// var_dump($movie_interstellar);
$movies_array[] = $movie_interstellar;

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
