<?php
error_reporting(error_reporting() & ~E_NOTICE);
include "database.php";
  date_default_timezone_set('Asia/Singapore');
  $month = date("F");
  $day = date("d");
  $year = date("Y");
  $time = date("h:i A");
   if($_SESSION['login']=="yes")                          
{
 
}
else
{

 echo '
     <script>
            window.location="login.php"
            </script>';
}   

$invo = $_GET['order_number'];

$uid = $_SESSION['id'];
$fullname = $_SESSION['fullname'];
$activity = ' Print the invoice #'.$invo.' ';
$sql = "INSERT INTO logs (user_id, fullname, activity, month, day, year, time)
VALUES ('$uid', '$fullname', '$activity', '$month', '$day', '$year', '$time')";

if ($conn->query($sql) === TRUE) {
 // echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sembrano Store | Invoice Print</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body>
<div class="wrapper">
            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <img src="logo.png" alt="Logo" width="50px" class="" style="opacity: .8"> Sembrano Store
               
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                 
                  <address>
                    <strong>Sembrano Store.</strong><br>
                   Bago Bantay, Quezon City<br>
                   Metro Manila, Philippines<br>
                    Phone: 09077737633<br>
                    Email: sembrano@store.cloud
                  </address>
                </div>
                <!-- /.col -->

   


              
                
        
                <!-- /.col -->
              </div>
              <!-- /.row -->


 
<center> <h2 class="text-bold"><?php echo $_GET['month']; ?> <?php echo $_GET['year']; ?> Sales Report </h2> </center>
              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
            
<table id="example1" class="table table-hover table-striped">
<thead>
<tr>
 
<th>Date</th>

<th>Total Transaction</th>
<th>Total Sales</th>
<th>Net Sales</th>
<th>Success Orders</th>

</tr>
</thead>
<tbody>


<?php
 
$gm = $_GET['month'];
$gy = $_GET['year'];
$grand_gross = 0;
$sql = "SELECT * FROM payment where  status != 'Pending' and status!='Refunded' and month='$gm' and year='$gy' group by  month, day, year order by id DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    

 $month = $row['month'];
 $day = $row['day'];
 $year = $row['year'];
 $order_number = $row['order_number'];
//////////////////22222222222222
    $sql2 = "SELECT  * from orders where month ='$month' and day='$day' and year='$year' group by order_number, month, day, year ";
    if ($result2 = mysqli_query($conn, $sql2)) {
    $tn = mysqli_num_rows( $result2 );
} 

////////////////////////// 2222


////////////////////////33333333333333

$sql3 = "SELECT SUM(amount) as total FROM payment where  status !='Pending' and status!='Refunded'  ";
$result3 = $conn->query($sql3);

if ($result3->num_rows > 0) {
  // output data of each row
  while($row3 = $result3->fetch_assoc()) {
   
 $mts = $row3['total'];

 if($mts == 0){
  $mts = 0;
 }

  }
} else {
 
}

///////////////////////////3333333333




///////////////////////// 4444444444



$sql4 = "SELECT * FROM orders where payment_status != 'Pending' and   payment_status != 'Refunded'  ";
$result4 = $conn->query($sql4);

if ($result4->num_rows > 0) {
  // output data of each row
  while($row4 = $result4->fetch_assoc()) {
    
    $product_id = $row4['product_id'];
    $quantity = $row4['quantity'];


    /// gross sale

    $sql5 = "SELECT * FROM product where id = '$product_id' ";
$result5 = $conn->query($sql5);

if ($result5->num_rows > 0) {
  // output data of each row
  while($row5 = $result5->fetch_assoc()) {


    $price = $row5['price'];
    $purchase = $row5['purchase'];

    $net = $price - $purchase;
   


  }
} else {
   
}


    ////
$sub = $net * $quantity;
$grand_gross = $grand_gross + $sub;


  }
} else {
 
}



//////////////////////////4444444444







///////////////// 66666666666666666
 $sql6 = "SELECT  * from orders where order_status = 'Delivered' and  month='$month' and day='$day' and year='$year'  group by order_number    ";
    if ($result6 = mysqli_query($conn, $sql6)) {
    $de = mysqli_num_rows( $result6 );
}

/////////////////// 6666666666666666
    echo '

<tr>
 
<td> '.$row['month'].'  '.$row['day'].', '.$row['year'].'</td>
<td>'.$tn.'</td>
<td>₱ '.number_format($mts, 2).'</td>
<td class="text-bold text-success">₱ '.number_format($grand_gross, 2).'</td>

<td> 
'.$de.'
</td>
 
 
</tr>

 
    ';

 
 


  }
} else {
  echo "No Sales Report";
}
 
?>


 

</tbody>
 
</table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

 

              <!-- this row will not appear when printing -->
              
            </div>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
<!-- Page specific script -->
<script>
  window.addEventListener("load", window.print());
</script>
</body>
</html>
