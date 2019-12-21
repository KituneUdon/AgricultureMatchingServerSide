<?php
	$pdo = new PDO("mysql:dbname=agri", "root", "");
	$st = $pdo->prepare("INSERT INTO user VALUE(?,?,?,?,?,?,?,?)");	
	$st->execute(array($_GET['ID'], $_GET['name'], $_GET['pass'], $_GET['sex'], $_GET['age'], $_GET['occupation'], $_GET['mail'], $_GET['phone']));
	echo $_GET['ID']
?>
