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
<title> BootStrap</title>
<link rel="stylesheet" type="text/css" href="styles/bootstrap.css">
<link rel="stylesheet" type="text/css" href="styles/style.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900|Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="fonts/css/fontawesome-all.min.css">    
<link rel="manifest" href="_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="apple-touch-icon" sizes="180x180" href="app/icons/icon-192x192.png">
</head>
    
<body class="theme-light" data-highlight="green1">
    
<div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>
    
<div id="page">
    
    <!-- header and footer bar go here-->
    <div class="header header-fixed header-auto-show header-logo-app">
        <a href="#" data-back-button class="header-title header-subtitle">Back to Pages</a>
        <a href="#" data-back-button class="header-icon header-icon-1"><i class="fas fa-arrow-left"></i></a>
        <a href="#" data-toggle-theme class="header-icon header-icon-2 show-on-theme-dark"><i class="fas fa-sun"></i></a>
        <a href="#" data-toggle-theme class="header-icon header-icon-2 show-on-theme-light"><i class="fas fa-moon"></i></a>
       
        <a href="#" data-menu="menu-main" class="header-icon header-icon-4"><i class="fas fa-bars"></i></a>
    </div>
    <div id="footer-bar" class="footer-bar-5">
         <a href="index.php"  ><i class="fa fa-home color-highlight"></i><span>Home</span></a>
            <a href="#" onclick="cart()"><i class="fa fa-shopping-cart color-highlight"></i><span>Cart</span></a>
            <a href="order_list.php"><i class="fas fa-shipping-fast color-highlight"></i></i><span>Orders</span></a>
           
            <a href="category.php"><i class="fa fa-search color-highlight"></i><span>Category</span></a>
            <a href="#" data-menu="side-menu"><i class="fa fa-bars color-highlight"></i><span>Menu</span> </a>
    </div>
    
    <div class="page-content">
        
       <div class="page-title page-title-large">
            <h2 data-username="<?php echo $_SESSION['fullname'];  ?>" class="greeting-text"></h2>
            <a href="#" data-menu="side-menu" class="bg-fade-gray1-dark shadow-xl preload-img" data-src="user.png"></a>
        </div>
        <div class="card header-card shape-rounded" data-card-height="140">
            <div class="card-overlay bg-highlight opacity-95"></div>
            <div class="card-overlay dark-mode-tint"></div>
            <div class="card-bg preload-img" data-src=""></div>
        </div>
        
        
   
       
        
        <div class="card card-style">
            <div class="content">
                <h3 class="float-left font-16">My Favorites</h3>
                
                <div class="clearfix mb-2"></div>
                

<?php
$id = $_SESSION['id'];
$sql = "SELECT * FROM my  where user_id = '$id' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    
    $product_id = $row['product_id'];


    // product details

    $sql2 = "SELECT * FROM product where id ='$product_id' ";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
  // output data of each row
  while($row2 = $result2->fetch_assoc()) {
   
    $product_name  = $row2['product_name'];
    $image  = $row2['image'];


  }
} else {
  
}
////

    echo ' 

      <div class="divider mt-3 mb-3"></div>
    <div class="d-flex">
                    <div>  <a href="product.php?id='.$product_id.'"  >
                          <img src="images/product/'.$image.'" class="rounded-m  " alt="logo" width="50px" height="50px" ></i>
                    </div>
                    <div class="align-self-center pl-3">
                        <h5 class="font-600 font-14 mb-n2">'.$product_name.'</h5>
                        <span class="color-theme font-11">'.$description.'</span>
                    </div>
                    <div class="align-self-center ml-auto">
                      <a href="#" onclick="remove'.$product_id.'()" class="icon icon-xs rounded-xl color-white bg-danger"><i class="fa color-white  fa-trash"></i></a>
                    </div>
                </div> 
                </a> 

                <script>

                function remove'.$product_id.'() {
                   
                    document.getElementById("product_id").value = "'.$product_id.'" ;
                  
                     document.getElementById("del").click();


                   }


                    </script>

                ';

  }
} else {
   echo " <center class='font-900 font-20'> Empty </center>";
}

 ?>

                
            
               
              
             
               
                
            </div>
        </div>
        
 <a href="#" style="display:none;" id="my_click" data-toast="removed-action" class="icon icon-s rounded-l shadow-xl bg-red1-light color-white float-right ml-2 mr-2"> </a>
 
         <input style="display:none;" type="text" id="product_id">
         <button  style="display:none;" id="del">del</button>
    </div>    
    <!-- end of page content-->
    
    <div id="removed-action" class="snackbar-toast bg-red2-dark color-white"  data-delay="3000" data-autohide="true"><i class="fa fa-times mr-3"></i>Product Removed</div>


<script type="text/javascript">
            // my fav

             $(document).ready(function(){
            $("#del").click(function(){

                
                var product_id=$("#product_id").val();
                
                
                $.ajax({
                    url:'php/del_fav.php',
                    method:'POST',
                    data:{
                         
                        product_id:product_id
                     
                        
                    },
                   success:function(data){
                     document.getElementById("my_click").click();

                    const to = setTimeout(re, 3000);

function re() {
   window.location="my.php";
}

                    
                   }
                });
            });
        });



</script>
    
  
    
 
    
    <div id="side-menu"
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
