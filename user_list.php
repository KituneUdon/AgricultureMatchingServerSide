<?php
  $pdo = new PDO("mysql:dbname=agri", "root", "");
  $st = $pdo->query("SELECT * FROM user");
  while ($row = $st->fetch()) {
  	$name = htmlspecialchars($row['NAME']);
    $sex = htmlspecialchars($row['SEX']);
    $age = htmlspecialchars($row['AGE']);
    $mail = htmlspecialchars($row['MAIL']);
    echo "$name,$sex,$age,$mail<br>";
  }
?>