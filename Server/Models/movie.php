<?php

class Movie
{

   private string $title;
   private string $director;
   private string $country;
   private string $production_year;
   private Genre  $primary_genre;
   private Genre  $secondary_genre;
   private Genre  $tertiary_genre;
   private string $synopsis;
   private Cast  $cast;

   public function __construct(string $input_title, string $input_production_year, Genre  $input_primary_genre)
   {

      $this->title            = $input_title;
      $this->production_year  = $input_production_year;
      $this->primary_genre    = $input_primary_genre;

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
}
