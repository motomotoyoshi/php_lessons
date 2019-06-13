<?php 

$s = "banana";
$n = 30;
$p = 5.32;

//printf("We have %04d %ss for $%.2f", $n, $s, $p );
$result = sprintf("We have %04d %ss for $%.2f", $n, $s, $p );
echo $result;
