<?php
	$pdo = new PDO("mysql:dbname=agri", "root", "");
	$st = $pdo->prepare("UPDATE rent SET FLG = 0 WHERE RENT_ID = ?");
	$st->execute(array($_GET['id']));
	echo "変更成功";
?>
