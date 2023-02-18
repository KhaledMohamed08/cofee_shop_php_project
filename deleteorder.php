<?php
	include('db_conn2.php');
	$product_id=$_GET['order_id'];
	mysqli_query($conn,"delete from order where order_id='$product_id'");
	header('location:listproducts.php');
?>