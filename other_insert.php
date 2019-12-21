<?php
	$pdo = new PDO("mysql:dbname=agri", "root", "");
	$st = $pdo->prepare("INSERT INTO other(ID, TITLE, CONTENT) VALUE(?,?,?)");	
	$st->execute(array($_GET['ID'], $_GET['title'], $_GET['content']));
	echo $_GET['ID']
?>

