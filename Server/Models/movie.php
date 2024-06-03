<?php

class Movie
{

   private string $title;
   private string $production_year;
   private Genre  $primary_genre;
   private Genre  $secondary_genre;
   private Genre  $tertiary_genre;
   private string $poster;
   private string $length;
   private string $rating;
   private array  $director;
   private string $country;
   private string $synopsis;
   private array  $cast;

   public function __construct(string $input_title, string $input_production_year, Genre  $input_primary_genre)
   {

      $this->title            = $input_title;
      $this->production_year  = $input_production_year;
      $this->primary_genre    = $input_primary_genre;

   }

   public function getTitle()
   {

      return $this->title;
   }

   public function getProductionYear()
   {

      return $this->production_year;
   }

   public function getPrimaryGenre()
   {

      return $this->primary_genre;
   }

   public function setSecondaryGenre(Genre $input_secondary_genre)
   {

      $this->secondary_genre = $input_secondary_genre;
   }
   public function getSecondaryGenre()
   {

      return $this->secondary_genre;
   }

   public function setTertiaryGenre(Genre $input_tertiary_genre)
   {

      $this->tertiary_genre = $input_tertiary_genre;
   }
   public function getTertiaryGenre()
   {

      return $this->tertiary_genre;
   }

   public function setPoster(string $input_poster)
   {

      $this->poster = $input_poster;
   }
   public function getPoster()
   {

      return $this->poster;
   }

   public function setLength(int $input_length)
   {

      $hours_symbol = "h";
      $minutes_symbol = "m";

      $this->length = floor(($input_length)/60) . $hours_symbol . " " . $input_length - floor(($input_length)/60)*60 . $minutes_symbol;
   }
   public function getLength()
   {

      return $this->length;
   }

   public function setRating(int $input_rating)
   {

      $this->rating = floor(($input_rating)/10) . "." . $input_rating - floor(($input_rating)/10)*10 . "/10";
   }
   public function getRating()
   {

      return $this->rating;
   }

   public function setDirector(array $input_director)
   {

      $this->director = $input_director;
   }
   public function getDirector()
   {

      return $this->director;
   }

   public function setCountry(string $input_country)
   {

      $this->country = $input_country;
   }
   public function getCountry()
   {

      return $this->country;
   }

   public function setSynopsis(string $input_synopsis)
   {

      $this->synopsis = $input_synopsis;
   }
   public function getSynopsis()
   {

      return $this->synopsis;
   }

   public function setCast(array $input_cast)
   {

      $this->cast = $input_cast;
   }
   public function getCast()
   {

      return $this->cast;
   }
}
