<?php

define('DB_DATABASE', 'hoge_db');
define('DB_USERNAME', 'dbuser');
define('DB_PASSWORD', 'okipo121');
define('PDO_DSN', 'mysql:dbhost=localhost;dbname=' . DB_DATABASE);

try {
  // connect
  $db = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $stmt = $db->query("select * from users");
  $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
  foreach ($users as $user) {
    var_dump($user);
  }
  echo $stmt->rowCount() . " records found.";
  
} catch (PDOException $e) {
  echo $e->getMessage();
  exit;
}
