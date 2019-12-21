
<?php
  $pdo = new PDO("mysql:dbname=men", "root");
  $st = $pdo->query("SELECT * FROM udon");
  while ($row = $st->fetch()) {
    $name = htmlspecialchars($row['name']);
    $price = htmlspecialchars($row['price']);
    echo "$name,";
  }
?>
