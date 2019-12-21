<?php
  $pdo = new PDO("mysql:dbname=agri", "root", "");
  $st = $pdo->prepare("SELECT u.NAME, re.DAY, re.TIME, re.PLACE, re.CONTENT, re.BELONGINGS, re.CLOTHES, u.MAIL
  				FROM user u, recruitment re WHERE u.ID = re.ID and RECRU_ID = ?");
  $st->execute(array($_GET['recru_id']));
	while ($row = $st->fetch()) {
		$name = htmlspecialchars($row['NAME']);
		$day = htmlspecialchars($row['DAY']);
		$time = htmlspecialchars($row['TIME']);
		$place = htmlspecialchars($row['PLACE']);
		$content = htmlspecialchars($row['CONTENT']);
		$belongings = htmlspecialchars($row['BELONGINGS']);
		$clothes = htmlspecialchars($row['CLOTHES']);
		$mail = htmlspecialchars($row['MAIL']);
	echo "$name,$day,$time,$place,$content,$belongings,$clothes,$mail";
  }
?>