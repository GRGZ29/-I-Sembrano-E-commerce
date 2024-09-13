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


?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>Order List</title>
<link rel="stylesheet" type="text/css" href="styles/bootstrap.css">
<link rel="stylesheet" type="text/css" href="styles/style.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900|Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="fonts/css/fontawesome-all.min.css">    
<link rel="manifest" href="_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js">
<link rel="apple-touch-icon" sizes="180x180" href="app/icons/icon-192x192.png">
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
    <div class="page-content" style="min-height:60vh!important">
        <div class="page-title page-title-small">
            <h2><a href="#" data-back-button><i class="fa fa-arrow-left"></i></a>Order List</h2>
            <a href="#" data-menu="menu-main" class="bg-fade-gray1-dark shadow-xl preload-img" data-src="user.png"></a>
        </div>
        <div class="card header-card shape-rounded" data-card-height="150">
            <div class="card-overlay bg-highlight opacity-95"></div>
            <div class="card-overlay dark-mode-tint"></div>
            <div class="card-bg preload-img" data-src=" "></div>
        </div>
        

    
 


        <div class="card card-style">
            <div class="content mb-2">
                <h3>Orders List</h3>
                <p>
                  List of your Orders. Please Review your orders.
                </p>
 
                <div class="list-group list-boxes">




<?php

$sql = "SELECT * FROM payment where user_id = '".$_SESSION['id']."' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

    $status = $row['order_status'];

if($status == 'Pending'){


    echo '

                    <a href="invoice.php?order_number='.$row['order_number'].'" class="border border-yellow1-dark rounded-s shadow-xs">
                        <i class="fa font-20 fa-shopping-cart color-yellow2-dark"></i>
                        <span>'.$row['order_number'].'</span>
                        <strong>Admin is checking your payment</strong>
                        <u class="color-yellow1-dark">Pending</u>
                        <i class="fa fa-check-circle color-yellow1-dark"></i>
                    </a>   

    ';

}


if($status == 'Cancelled'){


    echo '

                    <a href="invoice.php?order_number='.$row['order_number'].'" class="border border-red1-dark rounded-s shadow-xs">
                        <i class="fa font-20 fa-shopping-cart color-red2-dark"></i>
                        <span>'.$row['order_number'].'</span>
                        <strong>You cancel the order.</strong>
                        <u class="color-red1-dark">Cancelled</u>
                        <i class="fa fa-check-circle color-red1-dark"></i>
                    </a>   

    ';

}




if($status == 'Delivered'){


    echo '

                    <a href="invoice.php?order_number='.$row['order_number'].'" class="border border-green2-dark rounded-s shadow-xs">
                        <i class="fa font-20 fa-shopping-cart color-green2-dark"></i>
                        <span>'.$row['order_number'].'</span>
                        <strong>Your Order is Successfully Delivered</strong>
                        <u class="color-green2-dark">'.$status.'</u>
                        <i class="fa fa-check-circle color-green2-dark"></i>
                    </a>   

    ';

}


if($status == 'On-Process'){


    echo '

                    <a href="invoice.php?order_number='.$row['order_number'].'" class="border border-blue2-dark rounded-s shadow-xs">
                        <i class="fa font-20 fa-shopping-cart color-blue2-dark"></i>
                        <span>'.$row['order_number'].'</span>
                        <strong>Your Order is On-Process</strong>
                        <u class="color-blue2-dark">'.$status.'</u>
                        <i class="fa fa-check-circle color-blue2-dark"></i>
                    </a>   

    ';

}


if($status == 'Handed to Delivery Rider'){


    echo '

                    <a href="invoice.php?order_number='.$row['order_number'].'" class="border border-blue2-dark rounded-s shadow-xs">
                        <i class="fa font-20 fa-shopping-cart color-blue2-dark"></i>
                        <span>'.$row['order_number'].'</span>
                        <strong>Your Order is Handed to Delivery Rider</strong>
                        <u class="color-blue2-dark">On Transit</u>
                        <i class="fa fa-check-circle color-blue2-dark"></i>
                    </a>   

    ';

}






 



  }



} else {
  echo "No Orders. Order now!";
}

?>



                  

                







                </div>
            </div>  
        </div>


            
    
    </div>    
    <!-- end of page content-->
   
    
 
    
    <div id="menu-main"
         class="menu menu-box-right menu-box-detached rounded-m"
         data-menu-width="260"
         data-menu-load="menu.php"
         data-menu-active="nav-features"
         data-menu-effect="menu-over">  
    </div>
    
  
    
    
</div>    


<script type="text/javascript" src="scripts/jquery.js"></script>
<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>
</body>
</html>