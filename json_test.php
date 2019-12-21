<?php
	$array = json_decode( $json , true ) ;

	
	
	$pdo = new PDO("mysql:dbname=men;charset=utf8;", "root");
	$st = $pdo->prepare("INSERT INTO udon VALUES(?,?)");
	$st->execute(array($_GET['name'], $_GET['price']));
?>