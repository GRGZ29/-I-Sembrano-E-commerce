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
                    <small class="float-right">Date: 2/10/2014</small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  From
                  <address>
                    <strong>Sembrano Store.</strong><br>
                   Bago Bantay, Quezon City<br>
                   Metro Manila, Philippines<br>
                    Phone: 09077737633<br>
                    Email: sembrano@store.cloud
                  </address>
                </div>
                <!-- /.col -->

                <?php
                $user_id = $_GET['user_id'];
                $sql = "SELECT * FROM user where id ='$user_id' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {


    echo ' <div class="col-sm-4 invoice-col">
                  To
                  <address>
                    <strong>'.$row['fullname'].'</strong><br>
                    '.$row['street'].', '.$row['address'].'<br>
                    '.$row['city'].', '.$row['province'].'<br>
                    Phone: '.$row['contact'].'<br>
                    Email: '.$row['email'].'
                  </address>
                </div>';
    
  }
} else {
 
}


                 ?>


                 <?php
                 $invo = $_GET['order_number'];
                 $sql = "SELECT * FROM payment where order_number='$invo' group by order_number order by id ASC  ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

    $invo_id = $row['id'];
    $month = $row['month'];
    $day = $row['day'];
    $year = $row['year'];
    
  }
 
}


                  ?>
                
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <b>Invoice #<?php echo $invo_id; ?></b><br>
                  <br>
                  <b>Order #:</b> <?php echo $_GET['order_number'] ?><br>
                  <b>Payment Date:</b> <?php echo $month; ?> <?php echo $day; ?>, <?php echo $year; ?><br>
                  <b>Account:</b> <?php echo $_GET['user_id'] ?>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->




              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>Qty</th>
                      <th>Product</th>
                      <th>Price</th>
                    
                    </tr>
                    </thead>
                    <tbody>
                      <?php
 $order_number = $_GET['order_number'];
 
$sql = "SELECT * FROM orders where order_number = '$order_number' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

    $status =  $row['order_status'];
    $pstatus =  $row['payment_status'];


   if($status != 'Pending'){

 

    $stats = '<span style="font-size:15px;" class="badge bg-info"> '.$row['order_status'].'</span> ';
   }

    if($status == 'Pending'){
 

    $stats = '<span style="font-size:15px;" class="badge bg-warning"> '.$row['order_status'].'</span> ';
   }


 if($pstatus == 'Confirmed'){

 

    $pstats = '<span style="font-size:15px;" class="badge bg-success"> '.$row['payment_status'].'</span> ';
   }

    if($pstatus == 'Pending'){
 

    $pstats = '<span style="font-size:15px;" class="badge bg-warning"> '.$row['payment_status'].'</span> ';
   }



   
echo '  <tr>
                      <td> '.$row['quantity'].'</td>
                      <td>'.$row['product_name'].'</td>
                      <td>₱ '.$row['price'].'</td>
                     
                    </tr>';   
  }
} else {
   
}
 

 $sql = "SELECT * FROM payment where order_number = '$order_number' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
        $payment_method = $row['payment_method'];

      
        $grand_totald = $row['total'];


    if($payment_method == 'Gcash'){
      $img = 'Gcash.png';
    }

    if($payment_method == 'Palawan'){
      $img = 'Palawan.png';
    }
  }
} else {
 
}



$user_id = $_GET['user_id'];
$sql = "SELECT * FROM user where id = '$user_id' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
        $ustatus = $row['status'];
   

  
  }
} else {
 
}

  $discount = 0;
  if($ustatus == 'Senior Cetizen' || $ustatus == 'PWD'){
        $ttext1 = '<small class="text-success"> ['.$ustatus.'] </small>';
        $discount = 100;

    }

    $h = 100;
    
    $grand_total = $grand_totald - $discount;
$sql = "SELECT * FROM payment where order_number = '$order_number' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

    $subtotal = $row['amount'] + $discount;
    $gsubtotal=  number_format($subtotal);
    $total_vat = $row['total_vat'];
    $vat = $row['vat'];
  }
} else {
   
}



  $discount = 0;
  if($ustatus == 'Senior Cetizen' || $ustatus == 'PWD'){
        $ttext1 = '<small class="text-success"> ['.$ustatus.'] </small>';
       
         $discount = $total_vat * 0.1;

    }

?>
                  
                    
              
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <!-- accepted payments column -->
                <div class="col-6">
                  <p class="lead">Payment Method:</p>
                  <img src="mobile-app/images/payment/<?php echo $img; ?>" width="150px" class="rounded" alt="<?php echo $payment_method; ?>">
                  
                </div>
                <!-- /.col -->
                <div class="col-6">
                  <p class="lead">Payment Date <?php echo $month; ?> <?php echo $day; ?>, <?php echo $year; ?></p>

                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th style="width:50%">Subtotal:</th>
                        <td><?php echo $total_vat; ?></td>
                      </tr>
                        <tr>
                        <th style="width:50%">tax VAT:</th>
                        <td><?php echo $vat; ?></td>
                      </tr>

                      <tr>
                        <th>Discount</th>
                        <td>₱ <?php echo $discount; ?> <?php echo $ttext1; ?> </td>
                      </tr>

                        <tr>
                        <th>Payment Status</th>
                        <td> <?php echo $pstats; ?> </td>
                      </tr>
                       
                      <tr>
                        <th>Order Status</th>
                        <td> <?php echo $stats; ?></td>
                      </tr>
                       
                       
                      <tr>
                        <th>Total:</th>
                        <td>₱ <?php echo $grand_totald; ?></td>
                      </tr>
                    </table>
                  </div>
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
