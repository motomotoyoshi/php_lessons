<?php 

// &sales = array(
//   "hoge" => 200,
//   "hage" => 900,
//   "foo" => 3000,
// );

$sales = [
  "hoge" => 200,
  "hage" => 900,
  "foo" => 3000,
];

var_dump($sales["foo"]);
$sales["foo"] = 4000;
var_dump($sales["foo"]);

$colors = ["red", "blue", "pink"];
var_dump($colors[2]);
