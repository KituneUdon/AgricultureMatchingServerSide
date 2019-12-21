<?php
	$pdo = new PDO("mysql:dbname=agri", "root", "");
	$st = $pdo->prepare("SELECT * FROM advice, user WHERE user.ID = advice.ID and advice.TITLE LIKE ?");
	$st->execute(array('%%'.$_GET['keyword'].'%%'));
	while ($row = $st->fetch()) {
		$trans_id = htmlspecialchars($row['ADVICE_ID']);
		$title = htmlspecialchars($row['TITLE']);
		$name = htmlspecialchars($row['NAME']);
		echo "$rent_id,$title,$name,</br>,";
	}
	echo "終了"
?>
