<?php
	$pdo = new PDO("mysql:dbname=agri", "root", "");
	$st = $pdo->query("SELECT * FROM advice, user WHERE user.ID = advice.ID AND FLG = 1");
	while ($row = $st->fetch()) {
		$advice_id = htmlspecialchars($row['ADVICE_ID']);
		$title = htmlspecialchars($row['TITLE']);
		$name = htmlspecialchars($row['NAME']);
		echo "$advice_id,$title,$name,</br>,";
	}
	echo "終了";
?>