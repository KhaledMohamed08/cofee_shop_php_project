<?php
	include('db_conn2.php');
 
	$id=$_GET['product_id'];
 
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$address=$_POST['address'];
 
	mysqli_query($conn,"update product set name='$firstname', price='$lastname', pic='$address' where product_id='$id'");
	header('location:listproducts.php');
 
?>