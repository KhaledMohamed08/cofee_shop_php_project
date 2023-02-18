<?php
$con = new PDO('mysql:host=localhost;dbname=cafteria', 'root');
// var_dump($con);
$query = 'SELECT * FROM product';
    $sql = $con->prepare($query);
       $res= $sql->execute();
    //    var_dump($res);
       $products=$sql->fetchAll(PDO::FETCH_ASSOC);
    //    var_dump($products);
?>
<!DOCTYPE html>

<html>

<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<link rel="stylesheet" href="./users.css" />
<link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
 table th,
 table tr,
 table td {
    border-left: 1px solid rgb(116, 74, 12);
    border-right: 1px solid rgb(116, 74, 12);
    border-top: 1px solid rgb(116, 74, 12);
    border-collapse: collapse;
    padding: 5px;
    text-align: center;
}
</style> 
</head>

<body>
<main id='main-container' class="container p-4">
<div id="table-container">
    <div class='table-title'>
            <div>list products</div>
            <button onclick="window.location.href='addproductdp.php'">Add product</button>
        </div>
    <table>
    <tr class="table-header">
                <th>Product</th>
                <th>Price</th>
                <th>Category</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        <?php foreach ($products as $value) : ?>
            <tr>
                <td><?php echo $value['name']   ?></td>
                <td><?php echo $value['price']  ?></td>
                <td><?php echo $value['category_id'] ?></td>
                <td><img src="./images/ ?php echo $value['pic']  ?>" width="100px" height="100px" alt=""></td>
                <td>
                  <a class="btn btn-warning" href="edit.php?product_id=<?php echo $value["product_id"]; ?>" class="btn btn-warning"><i class="fas fa-sloid fa-marker"> </i></a>
                  <a class="btn btn-danger" href="deleteproduct.php?product_id=<?php echo $value["product_id"]; ?>" class="btn btn-danger"> <i class="far fa-trash-alt"></i></a>
              </td>
            </tr>
        <?php endforeach; ?>
    </table>
        </main >

        </div >


        <nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        <li class="page-item " style="margin:1px"><a class="page-link text-dark" style="background-color:navajowhite; font-weight:bold;" href="allUsers.php?page=1">First</a></li>

        <?php
        for ($page = 1; $page <= 5; $page++) {
            echo ' <li class="page-item " style="margin:1px" ><a class="page-link text-dark" href="allUsers.php?page=' . $page . '" style="background-color:navajowhite; font-weight:bold;">' . $page . '</a></li>';
        }
        ?>

        <li class="page-item " style="margin:1px"><a class="page-link text-dark" style="background-color:navajowhite; font-weight:bold;" href="?page=<?php echo $number_of_pages; ?>">Last</a></li>
    </ul>
</nav>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    
</body>

</html>