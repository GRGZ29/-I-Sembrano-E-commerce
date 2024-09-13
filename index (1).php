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
            <h2 data-username="<?php echo $_SESSION['fullname'];  ?>" class="greeting-text"></h2>
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
                <input type="text" class="border-0" placeholder="What are you looking for?" data-search>
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
                        <strong> ₱ '.number_format($row['price'], 2).'</strong>
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
        
                
        <div class="single-slider owl-no-dots owl-carousel mt-n4">

<?php
 
$sql = "SELECT * FROM product limit 3";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

        $stocks = $row['stock'];
 

  if($stocks > 0 ){

            $check_stock = '<a href="#" data-toast="added-to-cart" onclick="cid'.$row['id'].'()"  class="icon icon-s rounded-l shadow-xl bg-highlight color-white float-right"><i class="fa fa-shopping-cart"></i></a>';
                $check_stock2 = '<span class="badge bg-green1-light color-white px-3 py-1 mt-n1 text-uppercase d-block">in stock</span>';

        }



        if($stocks == 0){

            $check_stock = '<a href="#" data-toast="removed-action" class="icon icon-s rounded-l shadow-xl bg-highlight color-white float-right"><i class="fa fa-shopping-cart"></i></a>';

            $check_stock2 = '<span class="badge bg-red2-light color-white px-3 py-1 mt-n1 text-uppercase d-block">Out of stock</span>';


        }

      




    echo '
       <div class="content" onclick="product'.$row['id'].'()">
                <div class="card rounded-l shadow-xl  bg-'.$row['id'].' mb-3" data-card-height="320" >


                         <style>
     .bg-'.$row['id'].'{background-image:url(images/product/'.$row['image'].')}
 </style>




             
                    <div class="card-top mt-3 mr-3">
                        <a href="#"    onclick="my'.$row['id'].'()" class="icon icon-s rounded-l shadow-xl bg-red1-light color-white float-right ml-2 mr-2"><i class="fa fa-heart"></i></a>
                       '.$check_stock.'
                    </div>
                    <div class="card-bottom mb-3">
                        <div class="content mb-0">
                            <div class="d-flex">
                                <div>
                                    
                                    <h2 class="font-700">'.$row["product_name"].'</h3>
                                </div>
                                <div class="ml-auto">
                                    <h1>₱ '.number_format($row['price'], 2).' </h1>
                                    
                                    '.$check_stock2.'
                                </div>
                            </div>
                        </div>
                    </div>
                <script>
                  function product'.$row['id'].'() {
                   window.location="product.php?id='.$row['id'].'"
                   }


                    function my'.$row['id'].'() {
                   
                    document.getElementById("product_id").value = "'.$row['id'].'" ;
                  
                     document.getElementById("myfav").click();


                   }




                   function cid'.$row['id'].'() {
                     document.getElementById("product_id").value = "'.$row['id'].'" ;
                     document.getElementById("product_name").value = "'.$row['product_name'].'" ;
                     document.getElementById("price").value = "'.$row['price'].'" ;
                     document.getElementById("image").value = "'.$row['image'].'" ;
                     document.getElementById("addnow").click();
                   }

              </script>
                    <div class="card-overlay bg-gradient-fade rounded-l"></div>
                    <div class="card-overlay"></div>
                </div>
            </div>
             

    ';
  }
} else {
  echo "No Product";
}
 
?>

     




     
        </div>
                
        <div class="content mb-3">
            <h5 class="float-left font-16 font-500">Most Ordered Products</h5>
                <a class="float-right font-12 color-highlight mt-n1" href="all_product.php">View All Products</a>
            <div class="clearfix"></div>
        </div>
        
        <div class="double-slider owl-carousel owl-no-dots">



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
                        <h3 class="mb-n1"> ₱ '.number_format($row['price'], 2).'</h3>
                      
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

   ';
  }
} else {
  echo "No Products";
}
 ;
?>


            






           
        </div>

        <div class="divider divider-margins mt-4"></div>
        
        <div class="card preload-img" data-src="images/pictures/20s.jpg">
            <div class="card-body">
                <h4 class="color-white font-600">Why Sembrano Store?</h4>
                <p class="color-white opacity-80">
                    Our store guarantees fresh from the farm, Direct From Farm Products.
                </p>
                <div class="card card-style ml-0 mr-0 bg-white">
                    <div class="row mt-3 pt-1 mb-3">
                        <div class="col-6">
                            <i class="float-left ml-3 mr-3" 
                               data-feather="globe" 
                               data-feather-line="1" 
                               data-feather-size="35" 
                               data-feather-color="blue2-dark" 
                               data-feather-bg="blue2-fade-light">
                            </i>
                            <h5 class="color-black float-left font-13 font-500 line-height-s pb-3 mb-3">Fast<br>Shipping</h5>
                        </div>
                        <div class="col-6 pl-0">
                            <i class="float-left ml-3 mr-3" 
                               data-feather="smartphone" 
                               data-feather-line="1" 
                               data-feather-size="35" 
                               data-feather-color="dark2-dark" 
                               data-feather-bg="dark2-fade-light">
                            </i>
                            <h5 class="color-black float-left font-13 font-500 line-height-s pb-3 mb-3">Customer<br>  Support</h5>
                        </div>
                        <div class="col-6">
                            <i class="float-left ml-3 mr-3" 
                               data-feather="star" 
                               data-feather-line="1" 
                               data-feather-size="35" 
                               data-feather-color="yellow1-dark" 
                               data-feather-bg="yellow1-fade-light">
                            </i>
                            <h5 class="color-black float-left font-13 font-500 line-height-s">5.0<br>Rating</h5>
                        </div>
                        <div class="col-6 pl-0">
                            <i class="float-left ml-3 mr-3" 
                               data-feather="truck" 
                               data-feather-line="1" 
                               data-feather-size="33" 
                               data-feather-color="green1-dark" 
                               data-feather-bg="green1-fade-light">
                            </i>
                            <h5 class="color-black float-left font-13 font-500 line-height-s">Fast<br>Delivey</h5>
                        </div>
                    
                    </div>
                </div>
            </div>
            <div class="card-overlay bg-highlight opacity-95"></div>
            <div class="card-overlay dark-mode-tint"></div>
        </div>
        
        
   
        
        
   
 
        
        <div class="divider divider-margins"></div>
        
        <div class="content mb-2">
            <h5 class="float-left font-16 font-500">Browse Our Categories</h5>
                <a class="float-right font-12 color-highlight mt-n1" href="#" onclick="cat()">View All</a>
            <div class="clearfix"></div>
        </div>
        
        <script type="text/javascript">
            
            function cat() {
                // body...
                 window.location="category.php";
            }

        </script>
        <a href="#" data-card-height="80" class="card card-style mb-3">
            <div class="card-center">
                <h5 class="pl-3">Root Vegetables</h5>
                <p class="pl-3 mt-n2 font-12 color-highlight mb-0">Root vegetables are underground plant parts eaten by humans as food</p>
            </div>
            <div class="card-center opacity-30">
                <i class="fa fa-arrow-right opacity-50 float-right color-theme pr-3"></i>
            </div>
        </a>
        <a href="#" data-card-height="80" class="card card-style mb-3">
            <div class="card-center">
                <h5 class="pl-3">Plant</h5>
                <p class="pl-3 mt-n2 font-12 color-highlight mb-0">A vegetable is the edible portion of a plant</p>
            </div>
            <div class="card-center opacity-30">
                <i class="fa fa-arrow-right opacity-50 float-right color-theme pr-3"></i>
            </div>
        </a>
        <a href="#" data-card-height="80" class="card card-style mb-4">
            <div class="card-center">
                <h5 class="pl-3">Grain</h5>
                <p class="pl-3 mt-n2 font-12 color-highlight mb-0">
A grain is a small, hard, dry fruit</p>
            </div>
            <div class="card-center opacity-30">
                <i class="fa fa-arrow-right opacity-50 float-right color-theme pr-3"></i>
            </div>
        </a>
        
        <div class="divider divider-margins mb-5"></div>
               

    








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