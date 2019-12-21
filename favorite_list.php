<?php
	$pdo = new PDO("mysql:dbname=agri", "root", "");
	$st = $pdo->prepare("SELECT * FROM favorite WHERE ID = *");	
	$st->execute(array($_GET['ID']));
	while ($row = $st->fetch()) {
		$id = htmlspecialchars($row['ID']);
		$recru_id = htmlspecialchars($row['RECRU_ID']);

		echo "$id,$recru_id<br>";
	}
?>