<?php
	$pdo = new PDO("mysql:dbname=agri", "root", "");
	$st = $pdo->prepare("SELECT * FROM user WHERE ID = ? and PASS = ?");	
	$st->execute(array($_GET["ID"], $_GET["pass"]));
	
	while ($row = $st->fetch()) {	
		$ID = htmlspecialchars($row['ID']);
		echo $ID;
	}
?>