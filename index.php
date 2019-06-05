<?php 

abstract class BaseUser {
  public $name;
  abstract public function sayHi();
}

class User extends BaseUser {
  public function sayHi(){
    echo "Hello from User";
  } 
}
