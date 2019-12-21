<?php
  $pdo = new PDO("mysql:dbname=agri", "root", "");
  $st = $pdo->query("SELECT * FROM user");
  while ($row = $st->fetch()) {
    $name = htmlspecialchars($row['NAME']);
    echo "$name";
  }
?>
