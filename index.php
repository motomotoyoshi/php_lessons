<?php 

$testFile = "test.dat";

//$contents = file_get_contents($testFile);
//$contents = file_get_contents("https://dotinstall.com");
$contents = file($testFile);
var_dump($contents);
