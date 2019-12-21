<?php
	$pdo = new PDO("mysql:dbname=agri", "root", "");
	$st = $pdo->prepare("UPDATE advice SET FLG = 0 WHERE ADVICE_ID = ?");
	$st->execute(array($_GET['id']));
	echo "変更成功";
?>
