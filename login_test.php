<?php
	$pdo = new PDO("mysql:dbname=agri", "root", "");
	$st = $pdo->prepare("SELECT * FROM user WHERE ID = ? and PASS = ?");	
	$st->execute(array(1, "root"));
	
	while ($row = $st->fetch()) {	
		$ID = $row['ID'];
	}
	if (empty($ID)) {
		echo "エラー";
	} else {
		echo $ID;
	}
?>