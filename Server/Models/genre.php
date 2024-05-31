<?php

class Genre
{

   private string $primary_genre;

   public function __construct(string $input_primary_genre)
   {

      $this->primary_genre = $input_primary_genre;
   }

   public function getPrimaryGenre()
   {

      return $this->primary_genre;
   }

}
