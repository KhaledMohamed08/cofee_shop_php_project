<?php

$sname="127.0.0.1:3308";
$uname="root";
$password="";
$db_name="cafteria";
$conn = new mysqli($sname,$uname,$password,$db_name);
if($conn -> connect_error){
   die("connection failed" .$conn -> connect_error);
}
echo "";


?>