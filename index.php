<?php 

//$x = 5;
//if($x){
//  echo "great";
//}

$a = 8;
$b = 5;

$max = ($a > $b) ? $a : $b;

if($a > $b){
  $max = $a;
}else{
  $max = $b;
}

echo $max;
