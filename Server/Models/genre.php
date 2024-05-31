<?php

class Genre
{

   private string $genre;

   public function __construct(string $input_genre)
   {

      $this->genre = $input_genre;
   }

   public function getPrimaryGenre()
   {

      return $this->genre;
   }

}
