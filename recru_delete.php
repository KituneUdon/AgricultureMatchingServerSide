<?php
	$pdo = new PDO("mysql:dbname=agri", "root", "");
	$st = $pdo->prepare("DELETE FROM recruitment4 WHERE RECRU_ID = ?");
	$st->execute(array($_GET['id']));
	echo "削除成功";
?>