<?php
	$pdo = new PDO("mysql:dbname=agri", "root", "");
	$st = $pdo->prepare("UPDATE recruitment4 SET FLG = 0 WHERE RECRU_ID = ?");
	$st->execute(array($_GET['id']));
	echo "変更成功";
?>
