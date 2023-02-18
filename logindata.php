<!-- ========================================= javascript sweet alerts ================================= -->
<!DOCTYPE html>
<html lang="en">
<head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
</body>
</html>
<?php

include "db_conn.php";
if (!isset($_POST['sumbit'])) {
    $Email= ($_POST['Email']);
    $usern = ($_POST['username']);
    $passs = ($_POST['password']);

    $query = "SELECT * FROM user WHERE username='$usern' AND password='$passs' AND email='$Email'";
    $result=mysqli_query($conn ,  $query);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count=mysqli_num_rows($result);

    if ($count == 1){
        header("location:./home/index.html");
    }else{
        echo '<script type="text/javascript">swal("Wrong", "Wrong Password , Gmail or Username", "error");</script>';   
        

    }
}
?>
