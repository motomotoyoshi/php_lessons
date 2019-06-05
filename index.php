<?php 

class User {
  //private $name;
  //public $name;
  protected  $name;

  public function __construct($name){
    $this->name = $name;
  }

  public function sayHi(){
    echo "Hi, i am $this->name!";
  }
}

class adminUser extends User{
  public function sayHello(){
    echo "Hello, from $this->name!";
  }
}

$tom = new User("Tom");
$steave = new adminUser("Steave");
$steave->sayHello();
