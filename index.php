<?php

define('DB_DATABASE', 'hoge_db');
define('DB_USERNAME', 'dbuser');
define('DB_PASSWORD', 'okipo121');
define('PDO_DSN', 'mysql:dbhost=localhost;dbname=' . DB_DATABASE);

class User {
  // public $id;
  // public $name;
  // public $score;
  public function show(){
    echo "$this->name ($this->score)";
  }
}

try {
  // connect
  $db = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $db->beginTransaction();
  $db->exec("update users set score = score -10 where name = 'okipo'");
  $db->exec("update users set score = score +10 where name = 'myq'");
  $db->commit();

} catch (PDOException $e) {
  $db->rollback();
  echo $e->getMessage();
  exit;
}
