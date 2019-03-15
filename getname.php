<?php

class Person{
    
    //The name of the person.
    private $name;
    
    //The person's date of birth.
    private $dateOfBirth;
    
    //Set the person's name.
    public function setName($name){
        $this->name = $name;
    }
    
    //Get the person's name.
    public function getName(){
        return $this->name;
    }
  
    
}


//Instantiate the Person object.
$person = new Person();
 
//Set the name to "Wayne"
$person->setName('Wayne');
 
//Get the person's name.
$name = $person->getName();
 
//Print it out
echo $name;