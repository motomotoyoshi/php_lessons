<?php 

class User {
  public $name;

  public function __construct($name){
    $this->name = $name;
  }

  final public function sayHi(){
    echo "Hi, i am $this->name!";
  }
}

class adminUser extends User{
  public function sayHello(){
    echo "Hello, from admin!";
  }
  public function sayHi(){
    echo "[admin] Hi, i am $this->name!";
  }
}

$tom = new User("Tom");
$steave = new adminUser("Steave");

//echo $steave->name;
$tom->sayHi();
$steave->sayHi();
//$steave->sayHello();
