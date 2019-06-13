<?php 

$testFile = "test.dat";

if (!$fp =fopen($testFile, "r")) {
  echo "could not open";
  exit;
}

$contents = fread($fp, filesize($testFile));

var_dump($contents);

fclose($fp);
