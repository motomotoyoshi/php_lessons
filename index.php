<?php 

require "User.class.php";
//use motomoto\Lib as lib;
use motomoto\Lib;

spl_autoload_register(function($class) {
  require $class . ".class.php";
});

$ppp = new Lib\User("ppp");
$ppp->sayHello();
