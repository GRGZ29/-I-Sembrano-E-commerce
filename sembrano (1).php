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
<title>Sembrano</title>
<link rel="stylesheet" type="text/css" href="styles/bootstrap.css">
<link rel="stylesheet" type="text/css" href="styles/style.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900|Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="fonts/css/fontawesome-all.min.css">    
 
<link rel="apple-touch-icon" sizes="180x180" href="app/icons/icon-192x192.png">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
    
    <?php

$sql = "SELECT * FROM product where id = '".$_GET['id']."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

    $product_name = $row['product_name'];
    $id = $row['id'];
    $category = $row['category'];
    $order_count = $row['order_count'];
    $image = $row['image'];
    $description = $row['description'];
    $stock = $row['stock'];
    $price = $row['price'];
    $stock_count = '';
     $button_cart = '';

    if($stock > 0 ){
        $stock_count = '  <span class="badge bg-green1-light color-white px-2 py-1 mt-n1 text-uppercase d-block float-right"> Available In stock </span> ';

        $button_cart = ' <a data-toast="added-to-cart" onclick="add()" class="icon icon-s mt-2 rounded-m bg-highlight color-white" href="#"><i class="fa fa-shopping-cart"></i></a>';


    }

    if($stock == 0 ){
        $stock_count = '<span class="badge bg-red2-light color-white px-2 py-1 mt-n1 text-uppercase d-block float-right">Out of Stock</span>';
        $button_cart = '<a href="#" data-toast="removed-action"    class="icon icon-s rounded-l mt-2 shadow-xl bg-highlight color-white float-right"><i class="fa fa-shopping-cart"></i></a>';
    }



  }
} else {
   
}
 
?>
 


<body onload="scrollSmoothToBottom();" class="theme-light" data-highlight="green1">
    
<div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>
    
<div id="page">
    
    <!-- header and footer bar go here-->
    <div class="header header-fixed header-auto-show header-logo-app">
        <a href="#" onclick="back1()"  class="header-title header-subtitle">Back</a>
        <a href="#" onclick="back1()" class="header-icon header-icon-1"><i class="fas fa-arrow-left"></i></a>
        <a href="#" data-toggle-theme class="header-icon header-icon-2 show-on-theme-dark"><i class="fas fa-sun"></i></a>
        <a href="#" data-toggle-theme class="header-icon header-icon-2 show-on-theme-light"><i class="fas fa-moon"></i></a>
       
        <a href="#"   class="header-icon header-icon-3"><i class="fas fa-bars"></i></a>
    </div>
    <div id="footer-bar" class="d-flex">
        
        <div class="flex-fill ml-1 speach-input">
            <input type="hidden" id="id" value="<?php echo $_GET['id']; ?>">
            <input type="hidden" id="product_name" value="<?php echo $_GET['product_name']; ?>">
            <input type="text" id="message" class="form-control" placeholder="Enter your Message here">
        </div>
        <div class="ml-3 speach-icon">
            <a href="#" onClick="scrollSmoothToBottom()" id="sent" class="bg-green1-dark mr-2"><i class="fa fa-arrow-up"></i></a>


        </div>
    </div>
    

    <script>
        $(document).ready(function(){
            $("#sent").click(function(){
                
                var message=$("#message").val();
                var id=$("#id").val();
                var product_name=$("#product_name").val();
                $.ajax({
                    url:"php/sembrano.php",
                    method:"POST",
                    data:{
                        id:id,
                        product_name:product_name,
                        message:message
                         
                    },
                   success:function(data){
                    
 document.getElementById("message").value='';
 scrollSmoothToBottom();
 
 
 
                   }
                });
            });
        });
    </script>


    <div class="page-content">
        
        <div class="page-title page-title-small">
            <h2><a href="#" onclick="back1()"><i class="fa fa-arrow-left"></i></a><?php echo $_GET['product_name'] ?></h2>
            <a href="#" data-menu="menu" class="bg-fade-gray1-dark shadow-xl preload-img" data-src="user.png"></a>
        </div>

        <script> 
            function back1(){
                window.location="index.php"
            }
        </script>
        <div class="card header-card " data-card-height="85">
            <div class="card-overlay bg-highlight opacity-95"></div>
            <div class="card-overlay dark-mode-tint"></div>
           
        </div>
        
<div class="content mt-5 pt-3">
 <div class="card bg-<?php echo $id; ?>" data-card-height="250">
                

                        <style>
     .bg-<?php echo $id; ?>{background-image:url(images/product/<?php echo $image; ?>)}
 </style>



                <div class="card-bottom pb-4 pl-3">
                    <h1 class="font-20"><?php echo $product_name; ?></h1>
                </div>
                
                <div class="card-bottom pb-4 pr-3">
                    <h1 class="font-30 text-right mb-3">₱ <?php echo $price; ?><sup class="font-400 font-17 opacity-50">.00</sup></h1>
                  <?php echo $stock_count; ?> 
                </div>
                
                <div class="card-overlay bg-gradient-fade rounded-0"></div>
            </div>
                    

            <div class="card card-style">
            <div data-card-height="120" 
                 data-closed-message="Sorry! We're closed!"
                 data-closed-message-under="We'll be back very soon!"
                 data-opened-message="Welcome! We're open!"
                 data-opened-message-under="Call us Now! Let's have a chat!"
                 class="business-hours caption shadow-xl">

              

                <div class="card-top mt-4 ml-3 pl-1">
                    <h1 class="color-white mt-1 font-20 font-700"><!-- Automatic Text set by data opened/closed message--></h1>
                    <p class="color-white opacity-90 mt-n2 mb-0"><!-- Automatic Text set by data opened/closed message under--></p>
                </div>


                <div class="caption-overlay show-business-opened bg-green1-dark"></div>
                <div class="caption-overlay show-business-closed bg-red2-dark"></div>
            </div> 


            <div class="content">

                <!-- To set open and Close Hours Open custom.js and search for "SET OPENING HOURS BELOW" -->
                <!-- Only setting the code below will not make the system work automatically-->

                <div class="working-hours day-monday">          <p>Monday</p>    <p>09:00 AM</p> <p>05:00 PM</p></div>
                <div class="working-hours day-tuesday">         <p>Tuesday</p>   <p>09:00 AM</p> <p>05:00 PM</p></div>
                <div class="working-hours day-wednesday">       <p>Wednesday</p> <p>09:00 AM</p> <p>05:00 PM</p></div>
                <div class="working-hours day-thursday">        <p>Thursday</p>  <p>09:00 AM</p> <p>05:00 PM</p></div>
                <div class="working-hours day-friday">          <p>Friday</p>    <p>09:00 AM</p> <p>05:00 PM</p></div>
                <div class="working-hours day-saturday">        <p>Saturday</p>  <p>09:00 AM</p> <p>01:00 PM</p></div>
                <div class="working-hours day-sunday">          <p>Sunday</p>    <p class="opacity-00">-</p> <p>We're Closed</p></div>

            </div>


        </div>


  <div id="his"></div>

        <script type="text/javascript">

            var i = 0;
 function loadDoc() {
  

  setInterval(function(){

   var xhttp = new XMLHttpRequest();
   xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("his").innerHTML = this.responseText;
     if(i == 0){
         scrollSmoothToBottom();
     }
     i = 1;
    }
   };
   xhttp.open("GET", "php/sembrano_history.php?id=<?php echo $_GET['id']; ?>&product_name=<?php echo $_GET['product_name']; ?>", true);
   xhttp.send();

  },1000);


 }
 loadDoc();
</script>


  <script>
const scrollingElement = (document.scrollingElement || document.body);

const scrollToBottom = () => {
  scrollingElement.scrollTop = scrollingElement.scrollHeight;
}

const scrollToTop = () => {
  scrollingElement.scrollTop = 0;
}

// Require jQuery
const scrollSmoothToBottom = () => {
  $(scrollingElement).animate({
    scrollTop: document.body.scrollHeight,
  }, 500);
}

// Require jQuery
const scrollSmoothToTop = () => {
  $(scrollingElement).animate({
    scrollTop: 0,
  }, 500);
}





 </script>

 

    </div>    
    <!-- end of page content-->
 
      
    
  
    
    <div id="menu"
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
