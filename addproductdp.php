<?php
try {

$conn = new PDO('mysql:host=localhost;dbname=cafteria', 'root','');

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "INSERT INTO product (name,price,pic)
VALUES ('$_POST[product]','$_POST[price]','$_POST[fileToUpload]')";
  $conn->exec($sql);

  echo "New record created successfully";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  ?>


  