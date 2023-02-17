<?php
try {

$conn = new PDO('mysql:host=localhost;dbname=cafteria', 'root','');

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 $sql = "INSERT INTO category(id,name)
 VALUES ('$_POST[id]','$_POST[name]')";
   $conn->exec($sql);

 
  echo "New ctegory created successfully";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  ?>


  