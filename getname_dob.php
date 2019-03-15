<?php

class Person{
    

    private $name;
    
  
    private $dateOfBirth;
    
   
    public function setName($name){
        $this->name = $name;
    }    
    
    public function getName(){
      return $this->name;
    }

    public function setDateOfBirth($dateOfBirth){
      $this->dateOfBirth = $dateOfBirth;
    }

     public function getDateOfBirth(){
        return $this->dateOfBirth;
    }
}


$person = new Person();
 
$person->setName('Wayne');
 
$name = $person->getName();
 
echo $name;

$person->setDateOfBirth('18/08/94');
 
$dateOfBirth = $person->getDateOfBirth();
 
echo $dateOfBirth;