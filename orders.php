
<?php
	$con = new PDO('mysql:host=localhost;dbname=cafteria', 'root');
	// var_dump($con);
	$query = "SELECT * FROM cafteria.order";
	$query2 = "SELECT * FROM cafteria.order_product";
	// $query = 'SELECT * FROM cafteria.order';
		$sql = $con->prepare($query);
		$sql2 = $con->prepare($query2);
		   $res= $sql->execute();
		   $res2= $sql2->execute();
		   $orders=$sql->fetchAll(PDO::FETCH_ASSOC);
		   $amount=$sql2->fetchAll(PDO::FETCH_ASSOC);
		    //   var_dump($res2);
		   
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="./css/deliverOrder.css">
        <link rel="stylesheet" href="./css/myorders.css">

</head>
<body>


<!-- <div class="container"> -->

  <!-- Date Start -->
  <div>
  <!-- <div class="row"> -->
    <!-- <div class="col-md-4"></div>
    <br>
    <div class="col-md-4"> -->
      <form action="#" method="GET" class="myform">
        <!-- <input type="date" name="from" value="<?= $from ?>" class="form-control"> from
        <input type="date" name="to" value="<?= $to ?>" class="form-control">for <br>
        <input type="submit" value="Find" class="btn btn-dark"><br> -->
        <div class="date-from-to">
          <div class="date-from">
                      <label for="" class=" control-label"> From <i class="fa fa-calendar" aria-hidden="true"></i></label>
                      <div class="">
                          <input type="date" name="from" value="<?=$from?>" class="form-control">
                      </div>
          </div>
          <div class="date-to">
                  <label for="" class=" control-label"> To <i class="fa fa-calendar" aria-hidden="true"></i></label>
                  <div class="">
                      <input type="date" name="to" value="<?=$to?>" class="form-control">
                  </div>
          </div>
          <div class="find-outer" style="margin-top: 65px;">
                      <input type="submit" value="Find" class="btn btn-primary">
          </div>
        </div>
      </form>
    <!-- </div> -->
  </div>
  <!-- Date End -->
 

  <!-- Table Start -->
  <br>
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <table class=" " style="color: navajowhite;">
        <thead class="thead-dark">
          <tr>
            <th>Order Date</th>
            <th>Status</th>
            <th>Amount</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
			<?php foreach ($orders as $value) : ?>
            <tr>
                <td><?php echo $value['date']   ?></td>
                <td><?php echo $value['status']  ?></td>
                <td>
				<?php foreach ($amount as $value2) : ?>
            
                <?php echo $value2['quantity']   ?></td>  
            
        <?php endforeach; ?>
				</td>
				<td>

                <a class="btn btn-danger" href="deleteorder.php?order_id=<?php echo $value["order_id"]; ?>" class="btn btn-danger"> <i class="far fa-trash-alt"></i></a>

              </td>
            </tr>
        <?php endforeach; ?>
		
            </tr>
              <td colspan="4">
                <div class="collapse " id="toggel-userid">
                  <!-- <div class="card card-body" id="toggel-orderid"> -->
                    <div class='order-details'>

                      <div class="item-card">
                       <div class='item-img'><img src="../images/" alt='img'></div>
                       <div class='item-name'></div>
                       <div class='item-price'> </div>
                       <div class='item-quantity'></div>
                     </div>

                  </div>
                </div>
              </td>
            </tr>
        </tbody>
      </table>

    </div>
    <!-- Table End -->
  </div>



<!-- Container End -->

<!-- Shoing Order Details -->


<script>
  function toggle(id) {

    $("#" + id).toggle();
  }
</script>
	
</body>
</html>

