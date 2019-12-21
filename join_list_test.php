<?php
	$pdo = new PDO("mysql:dbname=agri", "root", "");
	$st = $pdo->query("SELECT * FROM recruitment, user WHERE user.ID = recruitment.ID");
	while ($row = $st->fetch()) {
		$recru = htmlspecialchars($row['RECRU_ID']);
		$name = htmlspecialchars($row['NAME']);
		$title = htmlspecialchars($row['TITLE']);
		$day = htmlspecialchars($row['DAY']);
		echo "$recru,$title,$name,$day,</br>,";
	}
	echo "終了"
?>