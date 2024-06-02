<?php

class Genre
{

   private string $genre;

   public function __construct(string $input_genre)
   {

      $genres_array = [
         'Animation',
         'Action',
         'Adventure',
         'Comedy',
         'Crime',
         'Drama',
         'Fantasy',
         'Horror',
         'Sci-Fi',
         'Thriller'
      ];

      $isFound = false;

      foreach ($genres_array as $genre) {

         if (strtolower($input_genre) === strtolower($genre)) {

            $this->genre = $input_genre;

            $isFound = true;
         }

         // var_dump($isFound);
      }

      if ($isFound === false) {

         // var_dump("Genre not allowed");
      } else {

         // var_dump("Genre allowed");
      }
   }

   public function getPrimaryGenre()
   {

      return $this->genre;
   }
}
