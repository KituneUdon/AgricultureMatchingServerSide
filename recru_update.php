<?php
	$pdo = new PDO("mysql:dbname=agri", "root", "");
	$st = $pdo->prepare("UPDATE recruitment4 SET TITLE = ?, DAY = ?, STARTTIME = ?, FINISHTIME = ?,
		PLACE = ?, CONTENT = ?, BELONGINGS = ?, CLOTHES = ? WHERE RECRU_ID = ?");
	$st->execute(array($_GET['title'],$_GET['day'],$_GET['starttime'],$_GET['finishtime'],$_GET['place'],$_GET['content'],$_GET['belongings'],$_GET['clothes'],$_GET['id']));
	echo "変更成功";
?>
