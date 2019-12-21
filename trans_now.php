<?php
	$pdo = new PDO("mysql:dbname=agri", "root", "");
	$st = $pdo->prepare("SELECT * FROM transaction, user WHERE user.ID = transaction.ID AND transaction.ID = ? AND FLG = 1");
	$st->execute(array($_GET['ID']));
	
	while ($row = $st->fetch()) {
		$trans_id = htmlspecialchars($row['TRANS_ID']);
		$title = htmlspecialchars($row['TITLE']);
		$name = htmlspecialchars($row['NAME']);
		echo "$trans_id,$title,$name,</br>,";
	}
	echo "終了"
?>