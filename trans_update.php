<?php
	$pdo = new PDO("mysql:dbname=agri", "root", "");
	$st = $pdo->prepare("UPDATE transaction SET TITLE = ?, CONTENT = ? WHERE TRANS_ID = ?");
	$st->execute(array($_GET['title'],$_GET['content'],$_GET['id']));
	echo "1";
?>