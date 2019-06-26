<?php

define('DB_DATABASE', 'hoge_db');
define('DB_USERNAME', 'dbuser');
define('DB_PASSWORD', 'okipo121');
define('PDO_DSN', 'mysql:dbhost=localhost;dbname=' . DB_DATABASE);

try {
  // connect
  $db = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $stmt = $db->prepare("insert into users (name, score) values (?, ?)");
  // $stmt->execute(['okipo', 56]);
  // $stmt->execute(['okipo', 76]);
  // $stmt->execute(['okipo', 26]);

  $name = 'okipo';
  $stmt->bindValue(1, $name, PDO::PARAM_STR);
  // $stmt->bindValue(':name', $name, PDO::PARAM_STR);
  $score = 32;
  $stmt->bindValue(2, $score, PDO::PARAM_INT);
  $stmt->execute();
  $score = 78;
  $stmt->bindValue(2, $score, PDO::PARAM_INT);
  $stmt->execute();

} catch (PDOException $e) {
  echo $e->getMessage();
  exit;
}
