<?php

class Task {

   protected $description;

   protected $completed;

   public function __construct(){
   }

   public function GetCompleted(){
      return $this->completed;
   }

   public function GetDescription(){
      return $this->description;
   }

   public function Complete(){
      $this->completed = true;      
   }
}





