<?php
  $pdo = new PDO("mysql:dbname=agri", "root", "");
  $st = $pdo->query("SELECT sex FROM user  where id = 1");
  while ($row = $st->fetch()) {
    $sex = htmlspecialchars($row['sex']);
    echo "$sex";
  }
?>