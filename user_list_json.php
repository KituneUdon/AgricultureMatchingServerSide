<?php
  $pdo = new PDO("mysql:dbname=agri", "root", "");
  $st = $pdo->query("SELECT * FROM user  where id = 1");
  while ($row = $st->fetch()) {
  	$name = htmlspecialchars($row['NAME']);
    $sex = htmlspecialchars($row['SEX']);
    $age = htmlspecialchars($row['AGE']);
  }
  $array = array($name, $sex, $age);
  $json = json_encode($array, JSON_PRETTY_PRINT );
  echo $json
?>