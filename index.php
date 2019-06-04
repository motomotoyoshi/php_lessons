<?php 

function sayHi($name = "hoge"){
  //echo "hi! " . $name;
  return "hi! " . $name;
}

//sayHi();
//sayHi("Tom");
//sayHi("Bob");
//sayHi();

$s = sayHi();
var_dump($s);
