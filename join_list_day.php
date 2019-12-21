<?php
	$pdo = new PDO("mysql:dbname=agri", "root", "");
	$today = date("Y/m/d");
	$st = $pdo->prepare("SELECT * FROM recruitment4, user WHERE user.ID = recruitment4.ID AND DAY >= ? AND FLG = 1");
	$st->execute(array($today));
	
	while ($row = $st->fetch()) {
		$recru = htmlspecialchars($row['RECRU_ID']);
		$name = htmlspecialchars($row['NAME']);
		$title = htmlspecialchars($row['TITLE']);
		$day = htmlspecialchars($row['DAY']);
		echo "$recru,$title,$name,$day,</br>,";
	}
	echo "終了"
?>