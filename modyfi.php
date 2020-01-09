<?php

class Person

{

   public $name;

   public $surname;

                

   public function setFullName($name, $surname)

   {

      $this->name = $name;

      $this->surname = $surname;

   } // end setFullName();

                

   public function getFullName()

   {

      return $this->name.' '.$this->surname;               

   } // end getFullName();  
}
   $janusz = new Person;

$janusz->setFullName('Janusz', 'Kowalski');


$adam = new Person;

$adam->setFullName('Adam', 'Nowak');


echo 'Witaj, jestem '.$janusz->getFullName().'<br/>';

echo 'A ja jestem '.$adam->getFullName().'<br/>';




function modify($object)

{

   $object->surname = 'Nowak';

} // end modify();


$janusz = new Person;

$janusz->setFullName('Janusz', 'Kowalski');

modify($janusz);

echo $janusz->getFullName();

