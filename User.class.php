<?php

namespace motomoto\Lib;

class User {
  public $name;
  public function __construct($name) {
    $this->name =$name;
  }
  public function sayHello(){
    echo "Hello, $this->name";
  }
}
