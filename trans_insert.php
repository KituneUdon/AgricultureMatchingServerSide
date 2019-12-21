<?php
	$pdo = new PDO("mysql:dbname=agri", "root", "");
	$st = $pdo->prepare("INSERT INTO transaction(ID, TITLE, CONTENT) VALUE(?,?,?)");	
	$st->execute(array($_GET['ID'], $_GET['title'], $_GET['content']));
	echo $_GET['ID']
?>
