<?php

class Actor
{

   private string $name;
   private string $surname;
   private string $date_birth;
   private string $gender;
   private string $role;

   public function __construct(string $input_name, string $input_surname)
   {

      $this->name      = $input_name;
      $this->surname   = $input_surname;
   }

   public function getName()
   {

      return $this->name;
   }

   public function getSurname()
   {

      return $this->surname;
   }

   public function setBirthday(array $input_date_birth)
   {

      $this->date_birth = $input_date_birth;
   }
   public function getBirthday()
   {

      return $this->date_birth;
   }

   public function setGender(array $input_gender)
   {

      $this->gender = $input_gender;
   }
   public function getGender()
   {

      return $this->gender;
   }

   public function setRole(array $input_role)
   {

      $this->role = $input_role;
   }
   public function getRole()
   {

      return $this->role;
   }
}
