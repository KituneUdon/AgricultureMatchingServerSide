<?php
	$json = $_POST[json];
	
	$array = json_decode($json , true );
	
	$pdo = new PDO("mysql:dbname=men;charset=utf8;", "root");
	$st = $pdo->prepare("INSERT INTO udon VALUES(?,?)");
	$st->execute(array($array[name][0], $array[price][0]));
	
	error_log(print_r($array,true),"3","C:/xampp/log/debug.log");
?>
レコードを追加しました。
