<?php
try {

$conn = new PDO('mysql:host=localhost;dbname=cafteria', 'root','');

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "INSERT INTO user (username,email,password,room,is_admin)
VALUES ('$_POST[username]','$_POST[email]','$_POST[pswd]','$_POST[room]','$_POST[admin]')";
  $conn->exec($sql);


  //  header('Location: allUsers.php');

  echo "New record created successfully";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  ?>


  