<?php 

//require "User.class.php";

spl_autoload_register(function($class) {
  require $class . ".class.php";
});

$ppp = new User("ppp");
$ppp->sayHello();
