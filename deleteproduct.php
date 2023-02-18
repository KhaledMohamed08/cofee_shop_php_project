<?php
	include('db_conn2.php');
	$product_id=$_GET['product_id'];
	mysqli_query($conn,"delete from product where product_id='$product_id'");
	header('location:listproducts.php');
?>