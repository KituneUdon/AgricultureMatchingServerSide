<?php
	$pdo = new PDO("mysql:dbname=agri", "root", "");
	$st = $pdo->query("SELECT * FROM other, user WHERE user.ID = other.ID AND FLG = 1");
	while ($row = $st->fetch()) {
		$other_id = htmlspecialchars($row['OTHER_ID']);
		$title = htmlspecialchars($row['TITLE']);
		$name = htmlspecialchars($row['NAME']);
		echo "$other_id,$title,$name,</br>,";
	}
	echo "終了";
?>