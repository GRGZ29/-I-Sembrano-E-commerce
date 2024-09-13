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


?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>Processing</title>
<link rel="stylesheet" type="text/css" href="styles/bootstrap.css">
<link rel="stylesheet" type="text/css" href="styles/style.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900|Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="fonts/css/fontawesome-all.min.css">    
<link rel="manifest" href="_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js">
<link rel="apple-touch-icon" sizes="180x180" href="app/icons/icon-192x192.png">
</head>
    
<body class="theme-light" data-highlight="green1">
    
<div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>
    
<div id="page bg-white">
    
    
    
    <div class="page-content">
        
      
   <br><br><br><br><br><br>
        
     
            <div class="content text-center pt-4">
                <h1><i class="fa fa-sync fa-spin color-green1-dark fa-3x"></i></h1>
                <h2 class="pt-4">Processing Order</h2>
                <p class="boxed-text-l">
                    Please wait while we processing your order.<br> Thank you for your patience.
                </p>
             
            </div>
       

         <?php                                          
 
 
if (isset($_POST['place_'])) { // If isset upload button or not

       //billing
    $user_id = $_SESSION['id'];
    $contact = $_SESSION['contact'];
    $order_number = $_POST['order_number'];
    $total = $_POST['total'];
    $payment_method = $_POST['payment_method'];

    $code = $_POST['code'];
    $sender_name = $_POST['sender_name'];
    $sender_number = $_POST['sender_number'];
    $amount = $_POST['amount'];
    $address = $_POST['address'];

    $location = "images/proof/";
    $file_new_name = date("dmy") . time() . $_FILES["file"]["name"]; // New and unique name of uploaded file
    $file_name = $_FILES["file"]["name"]; // Get uploaded file name
    $file_temp = $_FILES["file"]["tmp_name"]; // Get uploaded file temp
    $file_size = $_FILES["file"]["size"]; // Get uploaded file size
 
 

      $sql = "INSERT INTO `payment` (`user_id`, `contact`, `order_number`, `total`,   `proof`, `payment_method`, `code`, `sender_name`, `sender_number`, `amount`, `month`, `day`, `year`, `time`, `address`)
                VALUES ('$user_id', '$contact', '$order_number', '$total',  '$file_name', '$payment_method' , '$code', '$sender_name', '$sender_number', '$amount', '$month', '$day', '$year', '$time', '$address')";
        $result = mysqli_query($conn, $sql);
        if ($result) {




            move_uploaded_file($file_temp, $location . $file_name);
          
 


$sql = "UPDATE cart SET order_number='$order_number'  ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {  
  }
} else { 
}






   
 
       $sql = "INSERT INTO orders (product_id,user_id, quantity, product_name, price, image, order_number) SELECT product_id, user_id, quantity, product_name, price ,image, order_number from cart";

if ($conn->query($sql) === TRUE) {
 // echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}








$sql = "UPDATE orders SET contact='$contact', month='$month', day='$day', year='$year', time='$time' WHERE order_number='$order_number'  ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {  
  }
} else { 
}




$sql = "DELETE FROM cart where user_id = '".$_SESSION['id']."'  ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {  
  }
} else { 
}



 $sql = "UPDATE voucher_history SET order_number='$order_number' WHERE order_number='' ";

if ($conn->query($sql) === TRUE) {
 
} else {
  echo "Error updating record: " . $conn->error;
}



 echo '  <meta http-equiv="refresh" content="3; URL=invoice.php?order_number='.$order_number.'" />';
        
        } else {
            echo "<script>alert('Try Again! Something wong went.')</script>";
        }
   
}

?>
    
    </div>    
    <!-- end of page content-->
    
    
 
    
 
    
    
</div>    


<script type="text/javascript" src="scripts/jquery.js"></script>
<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>
</body>


