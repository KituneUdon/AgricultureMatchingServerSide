<?php
	$pdo = new PDO("mysql:dbname=agri", "root", "");
	$st = $pdo->prepare("SELECT * FROM recruitment, user WHERE user.ID = recruitment.ID");
	$st->execute(array($_GET['ID']));
	while ($row = $st->fetch()) {
		$name = htmlspecialchars($row['NAME']);
		$sex = htmlspecialchars($row['SEX']);
		$age = htmlspecialchars($row['AGE']);
		$mail = htmlspecialchars($row['MAIL']);
		echo "$name,$sex,$age,$mail";
	}
?>