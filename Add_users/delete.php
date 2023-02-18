<?php
	include('db_conn2.php');
	$id=$_GET['id'];
	mysqli_query($conn,"delete from user where userid='$id'");
	header('location:index.php');
 
?>