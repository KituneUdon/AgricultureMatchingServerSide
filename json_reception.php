<?php
 //jsonデータ
 $json = '{"key1":"大阪","key2":"神戸","key3":"京都"}';
 
 //jsonデータを連想配列に変換
 $data = json_decode($json, true);
 
 //値取得（キーを指定して値を取り出す場合）
 $val = isset($data['key3']) ? $data['key3'] : "";
 print $val."<br>";
 
 //値取得（全てのキーと値を取得する場合）
 foreach ($data as $key => $value){
   print $key."-".$value."<br>";
 }