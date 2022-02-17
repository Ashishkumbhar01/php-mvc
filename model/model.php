<?php
include 'book.php';
class Model
{
   public function getBookDetails()
   {
      return array(
         "xyz book"=>new Book('xyz book','Sushil kumar','This is a php MVC tutorial'),
         "Jungle Book"=>new Book('Jungle Book','R.Kipling','This Jungle book story of mongli he is human is jungle'),
         "PHP MVC"=>new Book('PHP MVC','Code With Sushil','This PHP MVC(Model View Controller). it is OOPs based frameworks just like Laravel.')
         );
      
   }
   public function getBook($title)
   {
      $allbooks=$this->getBookDetails();
      return $allbooks[$title];
   }
}
