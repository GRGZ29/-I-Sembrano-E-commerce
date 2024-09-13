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
 $sql = "SELECT  * FROM user where id = '$uid' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $fullname = $row['fullname'];
    $address = $row['address'];
    $street = $row['street'];
    $city = $row['city'];
    $province = $row['province'];
    $contact = $row['contact'];
    $email = $row['email'];
    $password = $row['password'];
 
  }
} else {
 
} ?>


        
        <div class="card card-style">
            <div class="content mb-0">
       
       
 

  <form method="POST" action="profile.php">

         
            <div class="content mb-2">
                <h3>Address</h3>
                <p>
                   Setup your multiple address.
                </p>

                 <div class="col-12 mb-3">
                <a href="add_address.php" class="  btn btn-sm btn-full button-s shadow-l rounded-s text-uppercase font-900 bg-blue1-dark">Add New Address</a>
            </div>



                <table class="table table-borderless text-center rounded-sm shadow-l" style="overflow: hidden;">
                    <thead>
                        <tr class="bg-gray1-dark">
                            <th scope="col" class="color-theme">Address Name</th>
                            
                            <th scope="col" class="color-theme">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
$uid = $_SESSION['id'];
$sql = "SELECT * FROM user_address where uid='$uid' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   echo '  <tr>
                            <th scope="row">'.$row['name'].'</th>
                          
                            <td> <a href="update_address.php?id='.$row['id'].'" class="mr-3">   <i class="fas fa-edit "></i>  </a>
                            <a onclick="del'.$row['id'].'()"  href="#" data-menu="confirm_del" class="text-danger">   <i class="fas fa-trash "></i>  </a></td>

                           

                        </tr>

                         <script> 

                            function del'.$row['id'].'(){

                                  document.getElementById("del_id").value = "'.$row['id'].'";


                            }

                            </script>';


  }
} else {
 
}

                         ?>
                      
                       
                    </tbody>
                </table>
            </div>
   
      


 
            </div>
        </div>
   

 
    </form>
   
 
        

       
        <!-- footer and footer card-->
       
    </div>    
    <!-- end of page content-->
    
        <div id="confirm_del" class="menu menu-box-bottom menu-box-detached rounded-m"
         data-menu-height="200" 
         data-menu-effect="menu-over">
        <h2 class="text-center font-700 mt-3 pt-1">Are you sure?</h2>
        <p class="boxed-text-l">
          Please Confirm Delete.
        </p>

        <input   type="hidden" id="del_id" >
        <div class="row mr-3 ml-3">
            <div class="col-6">
                <a href="#" class="close-menu btn btn-sm btn-full button-s shadow-l rounded-s text-uppercase font-900 bg-green1-dark">CANCEL</a>
            </div>
            <div class="col-6">
                <a href="#" onclick="dee()" class="close-menu  btn btn-sm btn-full button-s shadow-l rounded-s text-uppercase font-900 bg-red1-dark">DELETE</a>
            </div>
        </div>
    </div>  
 
    <script type="text/javascript">
        
        function dee(){

var in1 = document.getElementById("del_id").value;

               var xhttp = new XMLHttpRequest();
   xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
 
       window.location="address.php";
   
    };
   };
   xhttp.open("GET", "php/del_address.php?id="+in1, true);
   xhttp.send();


        }
    </script>
 
    
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
