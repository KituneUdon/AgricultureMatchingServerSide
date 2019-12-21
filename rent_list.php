<?php
	$pdo = new PDO("mysql:dbname=agri", "root", "");
	$st = $pdo->query("SELECT * FROM rent, user WHERE user.ID = rent.ID AND FLG = 1");
	while ($row = $st->fetch()) {
		$rent_id = htmlspecialchars($row['RENT_ID']);
		$title = htmlspecialchars($row['TITLE']);
		$name = htmlspecialchars($row['NAME']);
		echo "$rent_id,$title,$name,</br>,";
	}
	echo "終了";
?>