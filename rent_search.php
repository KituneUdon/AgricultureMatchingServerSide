<?php
	$pdo = new PDO("mysql:dbname=agri", "root", "");
	$st = $pdo->prepare("SELECT * FROM rent, user WHERE user.ID = rent.ID and rent.TITLE LIKE ?");
	$st->execute(array('%%'.$_GET['keyword'].'%%'));
	while ($row = $st->fetch()) {
		$trans_id = htmlspecialchars($row['RENT_ID']);
		$title = htmlspecialchars($row['TITLE']);
		$name = htmlspecialchars($row['NAME']);
		echo "$rent_id,$title,$name,</br>,";
	}
	echo "終了"
?>
