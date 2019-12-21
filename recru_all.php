<?php
	$pdo = new PDO("mysql:dbname=agri", "root", "");
	$st = $pdo->prepare("SELECT * FROM recruitment4, user WHERE user.ID = recruitment4.ID AND recruitment4.ID = ?");
	$st->execute(array($_GET['ID']));
	
	while ($row = $st->fetch()) {
		$recru = htmlspecialchars($row['RECRU_ID']);
		$name = htmlspecialchars($row['NAME']);
		$title = htmlspecialchars($row['TITLE']);
		$day = htmlspecialchars($row['DAY']);
		echo "$recru,$title,$name,$day,</br>,";
	}
	echo "終了"
?>