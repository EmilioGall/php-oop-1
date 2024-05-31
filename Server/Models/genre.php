<?php

class Genre
{

   private string $primary_genre;
   private string $secondary_genre;
   private string $tertiary_genre;

   public function __construct(string $input_primary_genre)
   {

      $this->primary_genre = $input_primary_genre;
   }

   public function setSecondaryGenre(string $input_secondary_genre)
   {

      $this->secondary_genre = $input_secondary_genre;
   }

   public function setTertiaryGenre(string $input_tertiary_genre)
   {

      $this->tertiary_genre = $input_tertiary_genre;
   }
   
}
