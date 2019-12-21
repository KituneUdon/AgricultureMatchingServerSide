<?php
	$pdo = new PDO("mysql:dbname=agri", "root", "");
	$st = $pdo->prepare("SELECT * FROM other, user WHERE user.ID = other.ID and other.TITLE LIKE ?");
	$st->execute(array('%%'.$_GET['keyword'].'%%'));
	while ($row = $st->fetch()) {
		$trans_id = htmlspecialchars($row['OTHER_ID']);
		$title = htmlspecialchars($row['TITLE']);
		$name = htmlspecialchars($row['NAME']);
		echo "$rent_id,$title,$name,</br>,";
	}
	echo "終了"
?>
