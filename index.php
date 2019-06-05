<?php 

class User {
  public $name;
  public static $count = 0;
  public function __construct($name){
    $this->name = $name;
    self::$count++;
  }

  public function sayHi(){
    echo "Hi, i am $this->name!";
  }
  public static function getMessage(){
    echo "Hello from User class!";
  }
}

//User::getMessage();

$Tom = new User("Tom");
$Bob = new User("Bob");
$Pop = new User("Pop");

echo User::$count;
