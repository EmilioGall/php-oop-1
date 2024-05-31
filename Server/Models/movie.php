<?php

class Movie
{

   private string $title;
   private string $director;
   private string $country;
   private string $production_year;
   private Genre  $genre;
   private string $synopsis;
   private array  $cast;

   public function __construct(string $input_title, string $input_production_year, Genre  $input_genre)
   {

      $this->title              = $input_title;
      $this->production_year    = $input_production_year;
      $this->genre              = $$input_genre;

   }
}
