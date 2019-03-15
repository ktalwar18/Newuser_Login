<?php

class User {

  private $name;

  public function setName($name)
  {
      $this->name = $name;
  }
public function getName()
  {
      return $this->name;
  }
}

$user = new User();
$user->setName('Jagroop');

$name = $user->getName();
echo $name;