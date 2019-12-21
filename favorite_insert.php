<?php
	$pdo = new PDO("mysql:dbname=agri", "root", "");
	$st = $pdo->prepare("INSERT INTO favorite VALUE(?,?)");	
	$st->execute(array($_GET['ID'], $_GET['RECRU_ID']));
	echo trim($_GET['ID'])
?>