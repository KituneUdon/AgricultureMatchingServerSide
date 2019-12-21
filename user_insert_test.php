<?php
	$pdo = new PDO("mysql:dbname=agri", "root", "");
	$st = $pdo->prepare("INSERT INTO user VALUE(?,?,?,?,?,?)");	
	$st->execute(array(1, '山田次郎', 'root', '男', 24, 'example@example.com'));
	
	$st = $pdo->prepare("SELECT ID FROM user WHERE ID = ?");
	$st->execute(array(1));
	while ($row = $st->fetch()) {	
		$ID = htmlspecialchars($row['ID']);
		echo $ID;
	}
?>