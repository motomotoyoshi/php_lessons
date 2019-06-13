<?php 

$testFile = "test.dat";
$contents = "こんちくわ！";

if (is_writable($testFile)) {
  //$fp fopen($testFile, "a");
  if (!$fp = fopen($testFile, "a")) {
    echo "could not open!";
    exit;
  }

  if (fwrite($fp, $contents) === false){
    echo "could not write!";
    exit;
  }

  echo "success!";

  fclose($fp);

} else {
  echo "not writable!";
  exit;
}
