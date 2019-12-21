<?php
  $pdo = new PDO("mysql:dbname=agri", "root", "");
  $st = $pdo->prepare("SELECT * FROM user u, rent re WHERE u.ID = re.ID and re.RENT_ID = ?");
  $st->execute(array($_GET['ID']));
	while ($row = $st->fetch()) {
		$title = htmlspecialchars($row['TITLE']);
		$name = htmlspecialchars($row['NAME']);
		$job = htmlspecialchars($row['OCCUPATION']);
		$content = htmlspecialchars($row['CONTENT']);
		$mail = htmlspecialchars($row['MAIL']);
		$phone = htmlspecialchars($row['PHONE']);
		echo "$title,$name,$job,$content,$mail,$phone";
	}
?>