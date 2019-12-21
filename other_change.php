<?php
	$pdo = new PDO("mysql:dbname=agri", "root", "");
	$st = $pdo->prepare("UPDATE other SET FLG = 0 WHERE OTHER_ID = ?");
	$st->execute(array($_GET['id']));
	echo "変更成功";
?>
