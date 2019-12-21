<?php
	$pdo = new PDO("mysql:dbname=agri", "root", "");
	$st = $pdo->prepare("INSERT INTO recruitment3(`ID`, `TITLE`, `DAY`, `STARTTIME`, `FINISHTIME`, `PLACE`, `CONTENT`, `BELONGINGS`, `CLOTHES`) VALUE(?,?,?,?,?,?,?,?,?)");	
	$st->execute(array($_GET['ID'], $_GET['TITLE'], $_GET['DAY'], $_GET['STARTTIME'], $_GET['FINISHTIME'], $_GET['PLACE'], $_GET['CONTENT'], $_GET['BELONGINGS'], $_GET['CLOTHES']));
	$ID = htmlspecialchars($_GET['ID']);
	echo trim($_GET['ID'])
?>