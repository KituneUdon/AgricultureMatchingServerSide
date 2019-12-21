<?php
	$pdo = new PDO("mysql:dbname=agri", "root", "");
	$st = $pdo->prepare("INSERT INTO recruitment(`ID`, `TITLE`, `DAY`, `TIME`, `PLACE`, `CONTENT`, `BELONGINGS`, `CLOTHES`) VALUE(?,?,?,?,?,?,?,?)");	
	$st->execute(array($_GET['ID'], $_GET['TITLE'], $_GET['DAY'], $_GET['TIME'], $_GET['PLACE'], $_GET['CONTENT'], $_GET['BELONGINGS'], $_GET['CLOTHES']));
	echo $_GET['ID'];
?>