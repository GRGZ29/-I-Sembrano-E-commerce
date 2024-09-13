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
<title>Profile</title>
<link rel="stylesheet" type="text/css" href="styles/bootstrap.css">
<link rel="stylesheet" type="text/css" href="styles/style.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900|Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="fonts/css/fontawesome-all.min.css">    
<link rel="manifest" href="_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js">
<link rel="apple-touch-icon" sizes="180x180" href="app/icons/icon-192x192.png">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
    
<body class="theme-light" data-highlight="green1">
    
<div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>
    
<div id="page">
    
    <!-- header and footer bar go here-->
    <div class="header header-fixed header-auto-show header-logo-app">
        <a href="#" data-back-button class="header-title header-subtitle">Profile</a>
        <a href="#" data-back-button class="header-icon header-icon-1"><i class="fas fa-arrow-left"></i></a>
  
     
    </div>
    <div id="footer-bar" class="footer-bar-5">
      <a href="index.php"  ><i class="fa fa-home color-highlight"></i><span>Home</span></a>
            <a href="#" onclick="cart()"><i class="fa fa-shopping-cart color-highlight"></i><span>Cart</span></a>
            <a href="order_list.php"><i class="fas fa-shipping-fast color-highlight"></i></i><span>Orders</span></a>
           
            <a href="category.php"><i class="fa fa-search color-highlight"></i><span>Category</span></a>
            <a href="#" data-menu="menu-main"><i class="fa fa-bars color-highlight"></i><span>Menu</span> </a>
    </div>
    
    <div class="page-content">
        
        <div class="page-title page-title-small">
            <h2><a href="#" data-back-button><i class="fa fa-arrow-left"></i></a>My Profile</h2>
            <a href="#" data-menu="menu-main" class="bg-fade-gray1-dark shadow-xl preload-img" data-src="user.png"></a>
        </div>
        <div class="card header-card shape-rounded" data-card-height="150">
            <div class="card-overlay bg-highlight opacity-95"></div>
            <div class="card-overlay dark-mode-tint"></div>
          
        </div>
        
 <?php

 $uid = $_SESSION['id'];
 $id = $_GET['id'];
 $sql = "SELECT  * FROM user_address where id = '$id' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $name = $row['name'];
    $address = $row['address'];
    $street = $row['street'];
    $city = $row['city'];
    $province = $row['province'];
 
    
 
  }
} else {
 
} ?>


        
        <div class="card card-style">
            <div class="content mb-0">
                <h3 class="font-600">Address Info</h3>
                <p>
                 Adding New Address
                </p>
                
                 

                <?php
 if(isset($_POST['name']))
  {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $province = $_POST['province'];
     $idd = $_POST['idd'];

    

    $sql = "UPDATE user_address SET name='$name', address='$address', street='$street', city='$city', province='$province' WHERE id='$idd' ";

if ($conn->query($sql) === TRUE) {
  echo '  <div class="ml-3 mb-3 mt-3 mr-3 alert alert-small rounded-s shadow-xl bg-green1-dark" role="alert">
            <span><i class="fa fa-check"></i></span>
            <strong>Successfully Updated address</strong>
            <button type="button" class="close color-white opacity-60 font-16" data-dismiss="alert" aria-label="Close">&times;</button>
        </div>  ';
          echo '  <meta http-equiv="refresh" content="2; URL=address.php" />';
} else {
  echo "Error updating record: " . $conn->error;
}


 
  } ?>

  <form method="POST" action="update_address.php">
                     
                
                      
                
               
 
         

                <div class="input-style input-style-2 input-required mb-4">
                    <span class="color-highlight input-style-1-active">Checkout Address Name</span>
                    <em>(required)</em>
                    <input class="form-control" required name="name" value="<?php echo $name; ?>"   type="text">
                </div>
                
                <div class="input-style input-style-2 input-required mb-4">
                    <span class="color-highlight input-style-1-active">Address</span>
                    <em>(required)</em>
                    <input class="form-control" value="<?php echo $address; ?>"  required name="address"   type="text">
                </div>
                <div class="input-style input-style-2 input-required mb-4">
                    <span class="color-highlight input-style-1-active">Street</span>
                    <em>(required)</em>
                    <input class="form-control" value="<?php echo $street; ?>"  required name="street"   type="text">
                </div> 


                <div class="input-style input-style-2 input-required mb-4">
                    <span class="color-highlight input-style-1-active">City</span>
                    <em>(required)</em>
                    <input class="form-control"  value="<?php echo $city; ?>"  required name="city"   type="text">
                </div>          



                <div class="input-style input-style-2 input-required mb-4">
                    <span class="color-highlight input-style-1-active">Province</span>
                    <em>(required)</em>
                    <input class="form-control" value="<?php echo $province; ?>"  required name="province"   type="text">
                </div> 


                
            <input type="hidden" name="idd" value="<?php echo $_GET['id']; ?>">
 


                 <button type="submit" id="sa" class="btn mb-3 mt-5 btn-block bg-highlight  rounded-sm shadow-xl btn-m text-uppercase font-900">Update Address</button>
            </div>
        </div>
   

 
    </form>
   
 

        

       
        <!-- footer and footer card-->
       
    </div>    
    <!-- end of page content-->
    
    
 
    
 
    
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
