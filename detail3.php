<?php
  $pdo = new PDO("mysql:dbname=agri", "root", "");
  $st = $pdo->prepare("SELECT * FROM user u, recruitment4 re WHERE u.ID = re.ID and RECRU_ID = ?");
  $st->execute(array($_GET['recru_id']));
	while ($row = $st->fetch()) {
		$name = htmlspecialchars($row['NAME']);
		$day = htmlspecialchars($row['DAY']);
		$startTime = htmlspecialchars($row['STARTTIME']);
		$finishTime = htmlspecialchars($row['FINISHTIME']);
		$place = htmlspecialchars($row['PLACE']);
		$content = htmlspecialchars($row['CONTENT']);
		$belongings = htmlspecialchars($row['BELONGINGS']);
		$clothes = htmlspecialchars($row['CLOTHES']);
		$mail = htmlspecialchars($row['MAIL']);
		$phone = htmlspecialchars($row['PHONE']);
		$occupation = htmlspecialchars($row['OCCUPATION']);
		$title = htmlspecialchars($row['TITLE']);
	echo "$name,$day,$startTime,$finishTime,$place,$content,$belongings,$clothes,$mail,$phone,$occupation,$title";
  }
?>