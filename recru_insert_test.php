<?php
  $pdo = new PDO("mysql:dbname=agri", "root", "");
  $st = $pdo->query("INSERT INTO recruitment (`ID`, `TITLE`, `DAY`, `TIME`, `PLACE`, `CONTENT`, `BELONGINGS`, `CLOTHES`) VALUE('1','スイカの収穫作業','8月23日','午前6時～午後17時','スイカの収穫作業を手伝ってくれる人を募集します','特になし','汚れてもいい服装')");
?>