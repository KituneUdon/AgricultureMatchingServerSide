<?php
  $pdo = new PDO("mysql:dbname=agri", "root", "");
  $st = $pdo->prepare("SELECT ID FROM user where ID = ?");
  $st->execute(array($_GET['ID']));
  
  while ($row = $st->fetch()) {
  	$ID = htmlspecialchars($row['ID']);
    echo $ID;
  }
?>