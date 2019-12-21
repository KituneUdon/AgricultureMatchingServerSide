<?php
	$pdo = new PDO("mysql:dbname=agri", "root", "");
	$st = $pdo->prepare("UPDATE other SET TITLE = ?, CONTENT = ? WHERE OTHER_ID = ?");
	$st->execute(array($_GET['title'],$_GET['content'],$_GET['id']));
	echo "1";
?>