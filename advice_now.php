<?php
	$pdo = new PDO("mysql:dbname=agri", "root", "");
	$st = $pdo->prepare("SELECT * FROM advice, user WHERE user.ID = advice.ID AND advice.ID = ? AND advice.FLG = 1 ");
	$st->execute(array($_GET['ID']));
	
	while ($row = $st->fetch()) {
		$trans_id = htmlspecialchars($row['ADVICE_ID']);
		$title = htmlspecialchars($row['TITLE']);
		$name = htmlspecialchars($row['NAME']);
		echo "$trans_id,$title,$name,</br>,";
	}
	echo "終了"
?>