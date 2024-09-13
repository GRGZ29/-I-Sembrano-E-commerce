<?php
error_reporting(error_reporting() & ~E_NOTICE);
include "database.php";

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

$od = $_GET['order_number'];
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>invoice</title>
<link rel="stylesheet" type="text/css" href="styles/bootstrap.css">
<link rel="stylesheet" type="text/css" href="styles/style.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900|Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="fonts/css/fontawesome-all.min.css">    
<link rel="manifest" href="_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js">
<link rel="apple-touch-icon" sizes="180x180" href="app/icons/icon-192x192.png">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
    
<body class="theme-light" data-highlight="green1">
    
<div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>
    
<div id="page">
    
        <!-- header and footer bar go here-->
    <div class="header header-fixed header-auto-show header-logo-app">
        <a href="index.php"  class="header-title header-subtitle">Back to Home</a>
        <a href="#" data-back-button class="header-icon header-icon-1"><i class="fas fa-arrow-left"></i></a>
        <a href="#" data-toggle-theme class="header-icon header-icon-2 show-on-theme-dark"><i class="fas fa-sun"></i></a>
        <a href="#" data-toggle-theme class="header-icon header-icon-2 show-on-theme-light"><i class="fas fa-moon"></i></a>
        
        <a href="#" data-menu="menu-main" class="header-icon header-icon-3"><i class="fas fa-bars"></i></a>
    </div>
    <div id="footer-bar" class="footer-bar-5">
          <a href="index.php" ><i class="fa fa-home color-highlight"></i><span>Home</span></a>
            <a href="cart.php"><i class="fa fa-shopping-cart color-highlight"></i><span>Cart</span></a>
            <a href="order_list.php"  class="active-nav"><i class="fas fa-shipping-fast color-highlight"></i></i><span>Orders</span></a>
           
            <a href="category.php"><i class="fa fa-search color-highlight"></i><span>Category</span></a>
            <a href="#" data-menu="menu-main"><i class="fa fa-bars color-highlight"></i><span>Menu</span> </a>
    </div>
    
    <div class="page-content">
        
        <div class="page-title page-title-small">
            <h2><a href="index.php" ><i class="fa fa-arrow-left"></i></a>Invoice</h2>
            <a href="#" data-menu="menu-main" class="bg-fade-gray1-dark shadow-xl preload-img" data-src="user.png"></a>
        </div>
        <div class="card header-card shape-rounded" data-card-height="150">
            <div class="card-overlay bg-highlight opacity-95"></div>
            <div class="card-overlay dark-mode-tint"></div>
            <div class="card-bg preload-img" data-src="i "></div>
        </div>
        
        <div class="card card-style">
            <div class="content">
                <div class="d-flex">
                    <div>
                        <h1>Sembrano Store</h1>
                        <p class="font-600 color-highlight mt-n2">Fresh from the farm</p>
                    </div>
                    <div class="ml-auto">
                        <img src="logo.png" width="50">
                    </div>
                </div>
                <div class="divider mt-3 mb-3"></div>
                <?php
 $on = $_GET['order_number'];
$sql = "SELECT * FROM payment where order_number = '$on'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

$address_sel = $row['address'];
$date = $row['date'];

$year = date('Y', strtotime($date));

$month = date('F', strtotime($date));
$d = date('d', strtotime($date));

$payment_method_image = $row['payment_method'];
$status = $row['order_status'];
$payment_status = '';


    if($status == 'Pending'){

        $cancel_button = '<a href="#" data-menu="cancel" class="btn btn-full btn-margins mt-n2 mb-2  bg-warning btn-m text-uppercase font-900 rounded-s shadow-xl">Cancel Order</a>';
        $payment_status = '<div class="col-6"><p class="font-800 font-15 color-yellow1-dark text-right">Pending</p></div>';
    }

      if($status == 'Cancelled'){

        $cancel_button = '';
        $payment_status = '<div class="col-6"><p class="font-800 font-15 color-red1-dark text-right">Cancelled</p></div>';
    }



    if($status == 'On-Process'){

        $cancel_button = ' ';
        $payment_status = '<div class="col-6"><p class="font-800 font-15 color-blue1-dark text-right">On-Process</p></div>';
    }


     if($status == 'Handed to Delivery Rider'){
        $cancel_button = '';

        $payment_status = '<div class="col-6"><p class="font-800 font-15 color-blue1-dark text-right">On Transit</p></div>';
    }

    if($status == 'Delivered'){

        $cancel_button = '<a href="#" data-menu="refund" class="btn btn-full btn-margins mt-n2 mb-2  bg-warning btn-m text-uppercase font-900 rounded-s shadow-xl">Refund</a>';

        $payment_status = '<div class="col-6"><p class="font-800 font-15 color-green1-dark text-right">Delivered</p></div>';
    }

        if($status == 'Refund'){

        $cancel_button = ' ';

        $payment_status = '<div class="col-6"><p class="font-800 font-15 color-yellow1-dark text-right">Refund On-Process</p></div>';
    }


        if($status == 'Refunded'){

        $cancel_button = ' ';

        $payment_status = '<div class="col-6"><p class="font-800 font-15 color-yellow1-dark text-right">Refund Success</p></div>';
    }




    echo '

         <div class="row mb-0">
                    <div class="col-4">
                        <p class="color-theme font-700">Date</p>
                    </div>
                    <div class="col-8">
                        <p class="font-400">'.$month.' '.$d.', '.$year.'</p>
                    </div>
                    
                    <div class="col-4">
                        <p class="color-theme font-700">Invoice No.</p>
                    </div>
                    <div class="col-8">
                        <p class="font-400"># '.$row['id'].'</p>
                    </div>
                    
                    <div class="col-4">
                        <p class="color-theme font-700">Order No.</p>
                    </div>
                    <div class="col-8">
                        <p class="font-400"># '.$row['order_number'].'</p>
                    </div>
                </div>
                

    ';
  }
} else {
  echo "0 results";
}
 
?>


       
            </div>                        
        </div>
        <div class="card card-style">
            <div class="content">                
                
                <h4 class="mb-n1">Invoice</h4>
                <p>
                    Your Registered information will be placed here.
                </p>

                <?php
 
$sql = "SELECT * FROM user where id='".$_SESSION['id']."' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   echo '

             <div class="row mb-0">
                    <div class="col-4"><p class="color-theme font-700">FullName</p></div>
                    <div class="col-8"><p class="font-400">'.$row['fullname'].'</p></div>
                    
                   
                    
         
                    <div class="col-4"><p class="color-theme font-700">Contact #</p></div>
                    <div class="col-8"><p class="font-400">'.$row['contact'].'</p></div>
        
                    <div class="col-4"><p class="color-theme font-700">Email </p></div>
                    <div class="col-8"><p class="font-400">'.$row['email'].'</p></div>        
                </div>

   ';
  }
} else {
  echo "0 results";
}
 
?>


            <?php
 $uid = $_SESSION['id'];
$sql = "SELECT * FROM user_address where name='$address_sel' and uid='$uid' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   echo '

             <div class="row mb-0">
                    
                    <div class="col-4"><p class="color-theme font-700">House #</p></div>
                    <div class="col-8"><p class="font-400">'.$row['address'].'</p></div>
                    
                    <div class="col-4"><p class="color-theme font-700">Street</p></div>
                    <div class="col-8"><p class="font-400">'.$row['street'].'</p></div>
                    
                    <div class="col-4"><p class="color-theme font-700">Province</p></div>
                    <div class="col-8"><p class="font-400">'.$row['province'].'</p></div>
        
                    <div class="col-4"><p class="color-theme font-700">City/State</p></div>
                    <div class="col-8"><p class="font-400">'.$row['city'].'</p></div>        
        
                          
                </div>

   ';
  }
} else {
  echo "0 results";
}
 
?>




   

            </div>                        
        </div>
     
        <div class="card card-style">
            <div class="content">                
                <h4 class="mb-n1">Description</h4>
                <p>
                    Products and totals will go here.
                </p>
 

                <div class="row">
                    <div class="col-6"><p class="color-theme font-15 font-800">Product</p></div>
                    <div class="col-2"><p class="color-theme font-15 font-800 text-center">Qty</p></div>
                    <div class="col-4"><p class="color-theme font-15 font-800 text-right">Amount</p></div>
                    
                    <div class="col-12 mb-2 mt-2"></div>
<?php
 $on = $_GET['order_number'];
$sql = "SELECT * FROM orders where order_number = '$on' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

     $quantity = $row['quantity'];
    $price = $row['price'];

    $sub_total = $quantity * $price;
    $grand_total = $grand_total + ($quantity * $price);




echo '

                    <div class="col-6"><p class="line-height-s">'.$row['product_name'].'</p></div>
                    <hr>
                    <div class="col-2"><p class="line-height-s text-center">'.$row['quantity'].'</p></div>
                    <div class="col-4"><p class="line-height-s text-right">₱ '.$row['price'].'</p></div>

';
  }
} else {
  echo "0 results";
}

$sql = "SELECT * FROM payment where order_number = '".$_GET['order_number']."' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

    $grand_total_p = $row['total'];
  }
} else {
  echo "0 results";
}
 
 
 
$grand_total = $grand_total_p;
 
?>
                     
                     
                    
                    <div class="col-12"><div class="divider mt-4"></div></div>
                   <?php
$uid = $_SESSION['id'];
$order_number = $_GET['order_number'];
$sql = "SELECT *  FROM voucher_history where uid = '$uid' and order_number='$order_number'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  echo '<div class="col-6 text-left"><h6 class="font-600">Voucher Code Applied</h6></div>
  <div class="col-6 text-right"><h6 class="font-600">₱ '.number_format($row['amount']) .' <small class="text-success"> ['.$row['code'].']</small </h6></div>
';
  }
} else {
  
}





 ?>

                    <div class="col-6"><p class="font-800 font-15 color-theme">Total</p></div>
                    <div class="col-6"><p class="font-800 font-15 color-theme text-right">₱ <?php echo $grand_total_p; ?> </p></div>

                    <div class="col-6"><p class="font-800 font-15 color-theme">Payment Method</p></div>
                    <div class="col-6"><p class="font-800 font-15 color-highlight text-right"><?php echo $payment_method_image; ?> </p></div>


                    <div class="col-6">
                    <p class="font-800 font-15 color-theme">Status</p></div>
                  <?php echo $payment_status; ?> 
                </div>
                <div class="col-6">
                    <p class="font-800 font-15 color-theme">Tax Exemption</p></div>
                  
                </div>
                
                <div class="divider"></div>
<?php echo $cancel_button; ?>
              
            </div>                        
        </div>
        
        <a href="order_list.php" class="btn btn-full btn-margins  bg-highlight btn-m text-uppercase font-900 rounded-s shadow-xl">View Order Lists</a>
       
    






  <?php                                          
 
 
if (isset($_POST['place_'])) { // If isset upload button or not

       //billing
    $user_id = $_SESSION['id'];
    $order_number = $_POST['order_number'];
    $total = $_POST['total'];
    $payment_method = $_POST['payment_method'];

    $location = "images/proof/";
    $file_new_name = date("dmy") . time() . $_FILES["file"]["name"]; // New and unique name of uploaded file
    $file_name = $_FILES["file"]["name"]; // Get uploaded file name
    $file_temp = $_FILES["file"]["tmp_name"]; // Get uploaded file temp
    $file_size = $_FILES["file"]["size"]; // Get uploaded file size
 
 

      $sql = "INSERT INTO `payment` (`user_id`, `order_number`, `total`, `proof`, `payment_method`)
                VALUES ('$user_id','$order_number', '$total', '$file_name', '$payment_method')";
        $result = mysqli_query($conn, $sql);
        if ($result) {




            move_uploaded_file($file_temp, $location . $file_name);
            echo "<script>let timerInterval
Swal.fire({

  icon: 'success',
  title: 'Success',
  text: 'Successfully Placed an Order',
  timer: 5000,
  
 showConfirmButton: false,
  willClose: () => {
    clearInterval(timerInterval)
  }
}).then((result) => {
  /* Read more about handling dismissals below */
  if (result.dismiss === Swal.DismissReason.timer) {
      
  }
 
})</script>";
      

     //   $sql = "INSERT INTO `billing` (`code`,`sender_name`, `sender_number`, `amount`, `proof`, `booking_number`) VALUES ('$code','$sender_name','$sender_number', '$amount', '$file_name','$booking_number')";

//if ($conn->query($sql) === TRUE) {
  //echo "New record created successfully";
///} else {
  //echo "Error: " . $sql . "<br>" . $conn->error;
//}








        
        } else {
            echo "<script>alert('Try Again! Something wong went.')</script>";
        }
   
}

?>




  <a href="#" style="display:none;" class="border-0" data-toast="toast-8" id="t1">
                        <i class="fa fa-angle-up color-teal-dark"></i>
                        <span>Toast Bottom Warning</span>
                        <i class="fa fa-angle-right"></i>
                    </a>  


                    <a href="#" style="display:none;" class="border-0" data-toast="toast-9" id="t2">
                        <i class="fa fa-angle-up color-teal-dark"></i>
                        <span>Toast Bottom Warning</span>
                        <i class="fa fa-angle-right"></i>
                    </a>  




    </div>    
    <!-- end of page content-->
    
   
         <!---------------->
    <!---------------->
    <!--cancel-->
    <!---------------->
    <!---------------->
    <div id="cancel" class="menu menu-box-bottom menu-box-detached rounded-m"
         data-menu-height="200" 
         data-menu-effect="menu-over">
        <h2 class="text-center font-700 mt-3 pt-1">Are you sure?</h2>
        <p class="boxed-text-l">
           Please Confirm to cancel your order.
        </p>
        <div class="row mr-3 ml-3">
            <div class="col-6">
                <a href="#" class="close-menu btn btn-sm btn-full button-s shadow-l rounded-s text-uppercase font-900 bg-green1-dark">Close</a>
            </div>
            <div class="col-6">
                <a href="#" onclick="cancel_order()" class="close-menu btn btn-sm btn-full button-s shadow-l rounded-s text-uppercase font-900 bg-red1-dark">Cancel Order</a>
            </div>
        </div>
    </div>  



        <div id="refund" class="menu menu-box-bottom menu-box-detached rounded-m"
         data-menu-height="250" 
         data-menu-effect="menu-over">
        <h2 class="text-center font-700 mt-3 pt-1">Are you sure?</h2>
        <p class="boxed-text-l">
           Please add reason of order refund.
                 


        </p>
           <div class="input-style has-icon mt-n3 input-style-1 mr-5 ml-5 input-required">
                    <i class="input-icon fa fa-question-mark color-theme"></i>
                    <span>Reason </span>
                    <em>(required)</em>
                    <input type="name" name="reason" id="reason" placeholder="Enter Refund Reason">
                </div>
        <div class="row mr-3 ml-3">
            <div class="col-6">
                <a href="#" class="close-menu btn btn-sm btn-full button-s shadow-l rounded-s text-uppercase font-900 bg-green1-dark">Close</a>
            </div>
            <div class="col-6">
                <a href="#" onclick="refund()" class="close-menu btn btn-sm btn-full button-s shadow-l rounded-s text-uppercase font-900 bg-red1-dark">Refund</a>
            </div>
        </div>
    </div> 


  
<script type="text/javascript">
    
    function cancel_order(){

             var xhttp = new XMLHttpRequest();
   xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
 
  $("#t1").click();

  setTimeout(function() {
    location.reload();
}, 1200);


   
    };
   };
   xhttp.open("GET", "php/cancel.php?order_number=<?php echo $od; ?>", true);
   xhttp.send(); 
    }


    function refund(){


        var reason = document.getElementById("reason").value;



             var xhttp = new XMLHttpRequest();
   xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
 
  $("#t2").click();

  setTimeout(function() {
    location.reload();
}, 1200);


   
    };
   };
   xhttp.open("GET", "php/refund.php?order_number=<?php echo $od; ?>&reason="+reason, true);
   xhttp.send(); 
    }




</script>

<div id="toast-8" class="toast toast-tiny toast-bottom bg-red2-dark" data-delay="3000" data-autohide="true"><i class="fa fa-times mr-3"></i>Order Cancelled</div>  

<div id="toast-9" class="toast toast-tiny toast-bottom bg-red2-dark" data-delay="3000" data-autohide="true"><i class="fa fa-times mr-3"></i>Refund Submitted</div>  


    
    <div id="menu-main"
         class="menu menu-box-right menu-box-detached rounded-m"
         data-menu-width="260"
         data-menu-load="menu.php"
         data-menu-active="nav-pages"
         data-menu-effect="menu-over">  
    </div>
    

    
</div>    


<script type="text/javascript" src="scripts/jquery.js"></script>
<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>
</body>
</html>