<?php

$birthday = $_POST['birthday'];

$youbi = date("l", strtotime($birthday));

?>

<!DOCTYPE HTML>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <title>PHPの練習</title>
</head>
<body>
  <h1>PHPの練習</h1>
  <p><?php echo htmlspecialchars($youbi); ?></p>
</body>
</html>
