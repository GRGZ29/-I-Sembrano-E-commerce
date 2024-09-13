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
<title>Products</title>
<link rel="stylesheet" type="text/css" href="styles/bootstrap.css">
<link rel="stylesheet" type="text/css" href="styles/style.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900|Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="fonts/css/fontawesome-all.min.css">    
<link rel="manifest" href="_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js">
<link rel="apple-touch-icon" sizes="180x180" href="app/icons/icon-192x192.png">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
    
<body class="theme-light" data-highlight="green1">
    
<div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>
    
<div id="page">
    
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
  echo "No Product";
}
 
?>
    <!-- header and footer bar go here-->
    <div class="header header-fixed header-auto-show header-logo-app">
        <a href="index.php"  class="header-title header-subtitle">Back </a>
        <a href="#" data-back-button class="header-icon header-icon-1"><i class="fas fa-arrow-left"></i></a>
        <a href="#" data-toggle-theme class="header-icon header-icon-2 show-on-theme-dark"><i class="fas fa-sun"></i></a>
        <a href="#" data-toggle-theme class="header-icon header-icon-2 show-on-theme-light"><i class="fas fa-moon"></i></a>
        <a href="#" data-menu="side-menu" class="header-icon header-icon-3"><i class="fas fa-bars"></i></a>
    </div>
        <div id="footer-bar" class="footer-bar-5">
         <a href="index.php" ><i class="fa fa-home color-highlight"></i><span>Home</span></a>
            <a href="cart.php"><i class="fa fa-shopping-cart color-highlight"></i><span>Cart</span></a>
            <a href="order_list.php"><i class="fas fa-shipping-fast color-highlight"></i></i><span>Orders</span></a>
           
            <a href="category.php"><i class="fa fa-search color-highlight"></i><span>Category</span></a>
            <a href="#" data-menu="side-menu"><i class="fa fa-bars color-highlight"></i><span>Menu</span> </a>
    </div>
    
    <div class="page-content">
        
        <div class="page-title page-title-small">
            <h2><a href="index.php" ><i class="fa fa-arrow-left"></i></a><?php echo $product_name; ?></h2>
            <a href="#" data-menu="side-menu" class="bg-fade-gray1-dark shadow-xl preload-img" data-src="user.png"></a>
        </div>
        <div class="card header-card shape-rounded" data-card-height="150">
            <div class="card-overlay bg-highlight opacity-95"></div>
            <div class="card-overlay dark-mode-tint"></div>
            <div class="card-bg preload-img" data-src=""></div>
        </div>

        <div class="card card-style">
            
            <div class="card bg-<?php echo $id; ?>" data-card-height="250">
                

                        <style>
     .bg-<?php echo $id; ?>{background-image:url(images/product/<?php echo $image; ?>)}
 </style>



                <div class="card-bottom pb-4 pl-3">
                    <h1 class="font-20"><?php echo $product_name; ?></h1>
                </div>
                
                <div class="card-bottom pb-4 pr-3">
                    <h1 class="font-30 text-right mb-3">₱ <?php echo number_format($price, 2); ?><sup class="font-400 font-17 opacity-50"></sup></h1>
                  <?php echo $stock_count; ?> 
                </div>
                
                <div class="card-overlay bg-gradient-fade rounded-0"></div>
            </div>
            
            
            <div class="content mt-n2">
                
                <div class="row">
                    <div class="col-6">
                        <p class="line-height-m">
                            <?php echo $description; ?>
                        </p>
                    </div>
                    <div class="col-6">
                        <div>
                            <p class="font-10 mb-n2">Product Category</p>
                            <p class="font-12 color-theme font-700"><?php echo $category; ?></p>
                        </div>
                        <div>
                            <p class="font-10 mb-n2">Stock Available</p>
                            <p class="font-12 color-theme font-700"><?php echo $stock; ?>
                        </div>
                        <div>
                       <p class="font-10 mb-n2"><strong>Per Sack</strong></p>

                        </div>
                        <?php 
                            $pid = $_GET['id'];
                           $sql = "SELECT  * from orders where product_id ='$pid' ";
    if ($result = mysqli_query($conn, $sql)) {
    $s = mysqli_num_rows( $result );
} 


                        ?>
                        <div>
                            <p class="font-10 mb-n2">Sold(s)</p>
                            <p class="font-12 color-theme font-700"><?php echo $s; ?></p>
                        </div>

                    </div>
                </div>
                
                
                <div class="divider mt-4 mb-2"></div>
                
                <div class="d-flex">
                    <div>
                        <p class="mb-n1 font-10">Ratings & Reviews</p>
                        <h6 class="float-left">4.9</h6>
                        <i class="float-left color-yellow1-dark pt-1 pl-2 fa fa-star"></i>
                        <i class="float-left color-yellow1-dark pt-1 fa fa-star"></i>
                        <i class="float-left color-yellow1-dark pt-1 fa fa-star"></i>
                        <i class="float-left color-yellow1-dark pt-1 fa fa-star"></i>
                        <i class="float-left color-yellow1-dark pt-1 fa fa-star"></i>
                    </div>
                    <div class="ml-auto">

                         <a   class="icon icon-s mt-2 mr-2 rounded-m bg-blue1-dark color-white" href="#" onclick="sembrano()"><i class="fa-solid fa-comment"></i>


                        <a   class="icon icon-s mt-2 mr-2 rounded-m bg-red1-dark color-white" href="#" onclick="my()"><i class="fa fa-heart"></i></a>
                      <?php echo $button_cart; ?>
                    </div>
                </div>
                
                
            </div>
        </div>
     
     <script type="text/javascript">
         
       function sembrano(){
    window.location="sembrano.php?id=<?php echo $_GET['id']; ?>&user_id=<?php echo $_SESSION['id']; ?>&product_name=<?php echo $product_name; ?>";

 



        }

     </script>

        
      <div class="card card-style">
            <div class="content">
                <h3>Product Gallery</h3>
                <p>
                    A gallery showcasing our product in a better view for you to see.
                </p>
            </div>
            <div class="content">
                <div class="row text-center row-cols-3 mb-0">
                    <a class="col" data-lightbox="gallery-1" href="images/product/<?php echo $image; ?>" title="<?php echo $product_name; ?>">
                        <img src="images/product/<?php echo $image; ?>" data-src="images/product/<?php echo $image; ?>" class="preload-img img-fluid rounded-xs" alt="img">
                    
                    </a>
                    
                </div>
            </div>
        </div>
 
        

 
        <div class="card card-style">
            <div class="content">
                <h3>Reviews</h3>
                <p>
                    Sharing feedback from our customers is always makes us happy.
                </p>
            </div>
            
            <div class="divider divider-margins"></div>
            
            <div class="content mt-0">
                <h1 class="mb-n2 font-15 font-700">Test </h1>
                
                <p class="mb-2 font-10"><i class="fa fa-check-circle color-highlight scale-icon mr-2"></i>Verified Purchase</p>
                <p>
                  Test  Review
                </p>
            </div>
            
            
         
       
            
            <div class="content mt-0">
                <div class="divider"></div>
                <div class="row mb-0">
                   
                </div>
            </div>
        </div>
        
 
        <a href="#" style="display:none;" id="my_click" data-toast="saved-to-favorites" class="icon icon-s rounded-l shadow-xl bg-red1-light color-white float-right ml-2 mr-2"><i class="fa fa-heart"></i></a>


    <input  style="display: none;"   type="text" value="<?php echo $id; ?>" id="product_id">
    <input  style="display: none;"   type="text" value="<?php echo $product_name; ?>"id="product_name">
    <input  style="display: none;"   type="text" value="<?php echo $price; ?>" id="price">
    <input style="display: none;"    type="text" value="<?php echo $image; ?>" id="image">
    <button style="display: none;"   id="addnow">add now</button>

    <button  style="display:none;" id="myfav">add now</button>

    </div>    
    <!-- end of page content-->

   
    




    <script type="text/javascript">

        function add(){

document.getElementById("addnow").click();

        }

           function my(){

document.getElementById("myfav").click();

        }

        
            // adding to cart...
        $(document).ready(function(){
            $("#addnow").click(function(){
                var product_id=$("#product_id").val();
                var product_name=$("#product_name").val();
                var price=$("#price").val();
                var image=$("#image").val();
            
                
                $.ajax({
                    url:'add-to-cart.php',
                    method:'POST',
                    data:{
                        product_id:product_id,
                        product_name:product_name,
                        price:price,
                        image:image
                     
                        
                    },
                   success:function(data){
                     document.getElementById("added-to-cart").click();
                    
                   }
                });
            });
        });



// my fav
             // my fav

             $(document).ready(function(){
            $("#myfav").click(function(){

                
                var product_id=$("#product_id").val();
                
                
                $.ajax({
                    url:'php/my.php',
                    method:'POST',
                    data:{
                         
                        product_id:product_id
                     
                        
                    },
                   success:function(data){
                     document.getElementById("my_click").click();
                    
                   }
                });
            });
        });


    </script>
    <div id="removed-action" class="snackbar-toast bg-red2-dark color-white"  data-delay="3000" data-autohide="true"><i class="fa fa-times mr-3"></i>Product has Out of Stock</div>
    <div id="added-to-cart" class="snackbar-toast bg-green1-dark color-white"  data-delay="3000" data-autohide="true"><i class="fa fa-shopping-cart mr-3"></i>Successfully Added to Cart</div>
    <div id="saved-to-favorites" class="snackbar-toast bg-green1-dark color-white"  data-delay="3000" data-autohide="true"><i class="fa fa-heart mr-3"></i>Added to your Favorites</div>
  
 
    
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
</html>