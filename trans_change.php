<?php
	$pdo = new PDO("mysql:dbname=agri", "root", "");
	$st = $pdo->prepare("UPDATE transaction SET FLG = 0 WHERE TRANS_ID = ?");
	$st->execute(array($_GET['id']));
	echo "変更成功";
?>
