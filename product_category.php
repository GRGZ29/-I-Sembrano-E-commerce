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
<title>BootStrap</title>
<link rel="stylesheet" type="text/css" href="styles/bootstrap.css">
<link rel="stylesheet" type="text/css" href="styles/style.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900|Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="fonts/css/fontawesome-all.min.css">    
<link rel="manifest" href="_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js">
<link rel="apple-touch-icon" sizes="180x180" href="app/icons/icon-192x192.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
    
<body class="theme-light" data-highlight="green1">
    
<div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>
    
<div id="page">
    
    <!-- header and footer bar go here-->
    <div class="header header-fixed header-auto-show header-logo-app">
        <a href="#" data-back-button class="header-title header-subtitle">Back</a>
        <a href="#" data-back-button class="header-icon header-icon-1"><i class="fas fa-arrow-left"></i></a>
        <a href="#" data-toggle-theme class="header-icon header-icon-2 show-on-theme-dark"><i class="fas fa-sun"></i></a>
        <a href="#" data-toggle-theme class="header-icon header-icon-2 show-on-theme-light"><i class="fas fa-moon"></i></a>
      
        <a href="#" data-menu="menu-main" class="header-icon header-icon-4"><i class="fas fa-bars"></i></a>
    </div>
    <div id="footer-bar" class="footer-bar-5">
        <a href="index.php" ><i class="fa fa-home color-highlight"></i><span>Home</span></a>
            <a href="#" onclick="cart()"><i class="fa fa-shopping-cart color-highlight"></i><span>Cart</span></a>
            <a href="order_list.php"><i class="fas fa-shipping-fast color-highlight"></i></i><span>Orders</span></a>
           
            <a href="category.php" class="active-nav"><i class="fa fa-search color-highlight"></i><span>Category</span></a>
            <a href="#" data-menu="side-menu"><i class="fa fa-bars color-highlight"></i><span>Menu</span> </a>
    </div>
    
    <div class="page-content">
        
         <div class="page-title page-title-small">
            <h2><a href="index.php" ><i class="fa fa-arrow-left"></i></a> <?php echo $_GET['category']; ?></h2>
            <a href="#" data-menu="side-menu" class="bg-fade-gray1-dark shadow-xl preload-img" data-src="user.png"></a>
        </div>
        <div class="card header-card shape-rounded" data-card-height="150">
            <div class="card-overlay bg-highlight opacity-95"></div>
            <div class="card-overlay dark-mode-tint"></div>
            <div class="card-bg preload-img" data-src=""></div>
        </div>



<?php 
$category = $_GET['category'];
$sql = "SELECT * FROM product where category='$category' order by id DESC ";
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




    echo '

    

    <div class="card card-style">
            <a data-card-height="250" class="card preload-img mb-3" data-src="images/product/'.$row['image'].'" onclick="view'.$row['id'].'()" href="#">
                <div class="card-bottom ml-3 pl-2 mb-1">
                    <h1 class="color-dark font-900 mb-n1">'.$row['product_name'].'</h1>
                    <div class="d-flex">
                        <p class="color-dark font-900   mb-2 mt-2">₱ '.$row['price'].'</p>
                        <p class="color-dark font-900  mb-2 mt-3 ml-4"> '.$stock_count.'</p>
                        <p class="color-dark font-900  mb-2 mt-2 ml-4"><i class="fa fa-clock pr-2"></i> 15th January</p>
                    </div>
                </div>
               <div class="card-overlay bg-gradient-fade rounded-0"></div>
            </a>
            <div class="content mt-0">
                <p>
                    '.$row['description'].'
                </p>
            </div>
        </div> 

        <script type="text/javascript">
    
    function view'.$row['id'].'() {

        window.location="product.php?id='.$row['id'].'";
    }

</script>



    ';

  }
} else {
  echo " <center class='font-900 font-20'> No Product(s) </center>";
}

?>


    
        
        
     
        
       
        
    </div>    
    <!-- end of page content-->
    
    
        
    
   
    
    <div id="side-menu"
         class="menu menu-box-right menu-box-detached rounded-m"
         data-menu-width="260"
         data-menu-load="menu.php"
         data-menu-active="nav-media"
         data-menu-effect="menu-over">  
    </div>

</div>    


<script type="text/javascript" src="scripts/jquery.js"></script>
<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>
</body>
