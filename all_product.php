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
<title>Sembrano Store</title>
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
 
    <div id="footer-bar" class="footer-bar-5">
         <a href="index.php" class="active-nav"><i class="fa fa-home color-highlight"></i><span>Home</span></a>
            <a href="#" onclick="cart()"><i class="fa fa-shopping-cart color-highlight"></i><span>Cart</span></a>
            <a href="order_list.php"><i class="fas fa-shipping-fast color-highlight"></i></i><span>Orders</span></a>
           
            <a href="category.php"><i class="fa fa-search color-highlight"></i><span>Category</span></a>
            <a href="#" data-menu="side-menu"><i class="fa fa-bars color-highlight"></i><span>Menu</span> </a>
        </div>
    
    <div class="page-content">
        
        <div class="page-title page-title-large">
               <h2   class="text-white">All Product</h2>
            <br>
      
         
            <a href="#" data-menu="side-menu" class="bg-fade-gray1-dark shadow-xl preload-img" data-src="user.png"></a>
        </div>
        <div class="card header-card shape-rounded" data-card-height="140">
            <div class="card-overlay bg-highlight opacity-95"></div>
            <div class="card-overlay dark-mode-tint"></div>
            <div class="card-bg preload-img" data-src=""></div>
        </div>
        
        <div class="content">
            <div class="search-box bg-theme rounded-m shadow-xl bottom-0">
                <i class="fa fa-search"></i>
                <input type="text" class="border-0" placeholder="Search Product" data-search>
            </div>   
            <div class="search-results disabled-search-list card card-style mx-0 mt-3 px-2">
                <div class="list-group list-custom-large">



<?php
 
$sql = "SELECT * FROM product";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

     $hints = $row['product_name'];
    $name = strtolower($hints);


    echo '



                    <a href="product.php?id='.$row['id'].'" data-filter-item data-filter-name="'.$name.'">
                      <img src="images/product/'.$row["image"].'" class="rounded-m  " alt="logo" width="10%" height="10%" >
                        <span>'.$row['product_name'].'</span>
                        <strong> ₱ '.$row['price'].'</strong>
                        <i class="fa fa-angle-right mr-2"></i>
                    </a>



    ';
  }
} else {
  echo "No Products Found";
}

?>



                 


              
                </div>
            </div>
        </div>  
        
                
        
                
      
     



<?php
 
$sql = "SELECT * FROM product order by order_count DESC limit 4";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

         $stock = $row['stock'];
    $stock_count = '';
    if($stock > 0 ){

        $stock_count = '<p class="color-green1-dark mb-0 font-11">Available In stock</p>';
        
    }


      if($stock == 0 ){

        $stock_count = '<p class="color-red2-dark mb-0 font-11">Out of stock</p>';
        
    }

   echo '




   <div class="item bg-theme pb-3 rounded-m shadow-l" onclick="product'.$row['id'].'()">
                <div data-card-height="200" class="card mb-3 bg-'.$row['id'].'">


                <style>
     .bg-'.$row['id'].'{background-image:url(images/product/'.$row['image'].')}
 </style>

    <script>
                  function product'.$row['id'].'() {
                   window.location="product.php?id='.$row['id'].'"
                  
                  }

              </script>

                    <div class="card-bottom">
                        <h5 class="color-white text-center pr-2 pb-2">'.$row["product_name"].'</h5>
                    </div>
                    <div class="card-overlay bg-gradient"></div>
                </div>
                <div class="d-flex px-3">
                    <div>
                        <h3 class="mb-n1"> ₱ '.$row["price"].'</h3>
                        <span class="opacity-60"><i class="fas fa-shipping-fast"></i> Free Shipping</span>
                        <p class="mb-0">
                            <i class="fa fa-star color-yellow1-dark"></i>
                            <i class="fa fa-star color-yellow1-dark"></i>
                            <i class="fa fa-star color-yellow1-dark"></i>
                            <i class="fa fa-star color-yellow1-dark"></i>
                            <i class="fa fa-star color-yellow1-dark"></i>
                        </p>
                       '.$stock_count.'
                    </div>
                </div>
            </div>
<br>

   ';
  }
} else {
  echo "No Products";
}
 ;
?>


 
 
        
   
        
        
   
 
    
    





<a href="#" style="display:none;" id="my_click" data-toast="saved-to-favorites" class="icon icon-s rounded-l shadow-xl bg-red1-light color-white float-right ml-2 mr-2"><i class="fa fa-heart"></i></a>

    
       
    </div>    
    <!-- end of page content-->









    <input style="display:none;" type="text" id="product_id">
    <input style="display:none;"  type="text" id="product_name">
    <input  style="display:none;" type="text" id="price">
    <input  style="display:none;" type="text" id="image">
   
 <button  style="display:none;" id="addnow">add now</button>


<button  style="display:none;" id="myfav">add now</button>


   <script>

 // view cart...
function cart() {
   
          window.location="cart.php";
    
} // view cart...



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
        // adding to cart...


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