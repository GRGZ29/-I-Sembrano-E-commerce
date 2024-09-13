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
<title>Cart</title>
<link rel="stylesheet" type="text/css" href="styles/bootstrap.css">
<link rel="stylesheet" type="text/css" href="styles/style.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900|Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="fonts/css/fontawesome-all.min.css">    
<link rel="manifest" href="_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js">
<link rel="apple-touch-icon" sizes="180x180" href="app/icons/icon-192x192.png">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
    
<body class="theme-light" data-highlight="green1">
    
<div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>
    
<div id="page">
    
 
   <div id="footer-bar" class="footer-bar-5">
         <a href="index.php" ><i class="fa fa-home color-highlight"></i><span>Home</span></a>
            <a href="cart.php" class="active-nav"><i class="fa fa-shopping-cart color-highlight"></i><span>Cart</span></a>
            <a href="order_list.php"><i class="fas fa-shipping-fast color-highlight"></i></i><span>Orders</span></a>
           
            <a href="category.php"><i class="fa fa-search color-highlight"></i><span>Category</span></a>
            <a href="#" data-menu="menu-main"><i class="fa fa-bars color-highlight"></i><span>Menu</span> </a>
    </div>
    
    <div class="page-content">
        
        <div class="page-title page-title-small">
            <h2><a href="#" data-back-button><i class="fa fa-arrow-left"></i></a>Cart</h2>
            <a href="#" data-menu="menu-main" class="bg-fade-gray1-dark shadow-xl preload-img" data-src="user.png"></a>
        </div>
        <div class="card header-card shape-rounded" data-card-height="150">
            <div class="card-overlay bg-highlight opacity-95"></div>
            <div class="card-overlay dark-mode-tint"></div>
            <div class="card-bg preload-img" data-src=" "></div>
        </div>
        
        <div class="card card-style">
            <div class="content">

<?php



 $uid = $_SESSION['id'];
$sql = "SELECT * FROM cart where user_id ='$uid' order by id ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row

  while($row = $result->fetch_assoc()) {

    $quantity = $row['quantity'];
    $price = $row['price'];

    $sub_total = $quantity * $price;
    $grand_total =   $grand_total + ($quantity * $price) ;



    if($grand_total > 500000){

 $checkout = ' ';

    }
   


    echo '

                    <div class="d-flex pb-2">
                    <div class="mr-auto">
                        <img src="images/product/'.$row['image'].'" class="rounded-m shadow-xl" width="110">
                        <a href="#"   onclick="remove'.$row['id'].'()" data-toast="removed-action"  class="color-red2-dark mt-n5 py-3 pl-2 d-block font-11"><i class="fa fa-times-circle pl-2  "></i> Remove Item</a>
                    </div>
                    <div class="ml-auto w-100 pl-3">
                        <h5 class="font-14 font-600 opacity-80 pb-2">'.$row['product_name'].'</h5>
                        <div class="clearfix"></div>
                        <h1 class="font-23 font-700 float-left pt-2 ">₱ '.number_format($row['price']).' </h1>
                        <div class="float-right">
                            <div class="input-style input-style-2 mt-1">
                                <span class="input-style-1-active ">Qty</span>
                         
                            <a href="#" onclick="edit'.$row['id'].'()" data-menu="cart-item-edit" class="btn  btn-s btn-full mb-3 rounded-sm text-uppercase font-900   color-dark bg-theme">'.$row['quantity'].'</a>
                            </div>
                        </div>
                    </div>
                </div>


       <script>

        function edit'.$row['id'].'(){
document.getElementById("product_name").innerHTML = "'.$row['product_name'].'";
document.getElementById("price").innerHTML = "₱ '.$row['price'].'";
document.getElementById("quantity").value = '.$row['quantity'].';
 
 document.getElementById("product_id").value = "'.$row['product_id'].'";
  var imgUrl = "images/product/'.$row['image'].'"
 document.getElementById("myImg").src = imgUrl;
       }


       function remove'.$row['id'].'(){

document.getElementById("product_id").value = "'.$row['product_id'].'";
document.getElementById("del").click();
 

       }
        </script>
 

   

 

    ';

    
  }
} else {
         


    $checkout = 'style="display:none;" ';

  echo "Cart is Empty";
}
 
?>


               
 
                                    
        

                    <div  class="divider mt-3"></div>

<div <?php echo $checkout; ?> > 

<?php 


 
    $display = $grand_total;
    $status = $_SESSION['status'];


       if($status == 'Regular User'){
            $sql = "SELECT  * FROM discount where id='3' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $disa = $row['amount'] / 100;
    $da = $row['amount'];
  }
} else {
 
}


$discount = $grand_total * $disa;
$ttext1 = '<small class="text-success"> ['.$_SESSION['status'].'] </small>';

       }




    if($status == 'Senior Cetizen' || $status == 'PWD'){

        $sql = "SELECT  * FROM discount where id='1' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $disa = $row['amount'] / 100;
    $da = $row['amount'];
  }
} else {
 
}

// Calculate the result
        $ttext1 = '<small class="text-success"> ['.$_SESSION['status'].'] </small>';
        $discount = $grand_total * $disa;
 
 $grand_total = $grand_total - $discount;
    } /// pwd / senior
 

     if($status == 'COOP Member'){

        $sql = "SELECT  * FROM discount where id='2' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $disa = $row['amount'] / 100;
    $da = $row['amount'];
  }
} else {
 
}

// Calculate the result
        $ttext1 = '<small class="text-success"> ['.$_SESSION['status'].'] </small>';
        $discount = $grand_total * $disa;
 
 $grand_total = $grand_total - $discount;
    } /// coop member
 
   

 ?>
                
                <h4 >Cart Sumary</h4>
                <p>
                    Total cart value with shipping taxes and VAT exempted .
                </p>
                <div class="row mb-0">
                    <div class="col-6 text-left"><h6 class="font-600">Total</h6></div>
                    <div class="col-6 text-right"><h6 id="total" class="font-600"> <?php echo '₱ '.number_format($display).'' ?>  </h6></div>
                    <div class="col-6 text-left"><h6 class="font-600">Discount (<?php echo $da; ?>%) </h6></div>
                    <div class="col-6 text-right"><h6 class="font-600">₱ <?php echo $discount; ?> <?php echo ''.$ttext1.' ' ?> </h6></div>
                    <div class="col-6 text-left"><h6 class="font-600">Shipping</h6></div>
                    <div class="col-6 text-right"><h6 class="font-600 color-green1-dark">₱ 0</h6></div>
                    <div class="col-12"><div class="divider mt-3"></div></div>
                    
                    <div class="col-6 text-left"><h4>Grand Total</h4></div>
                    <div class="col-6 text-right"><h4>₱ <?php echo ''.number_format($grand_total).' ' ?> </h4></div>
                </div>
                
                <div class="divider mt-4"></div>
                
                <a href="checkout.php" class="btn btn-full btn-sm rounded-sm bg-highlight font-800 text-uppercase">Proceed to Checkout</a>
 
                                    
               
 </div>
                
       
            </div>
        </div>
                   

    </div>    
    <!-- end of page content-->

    <div   id="removed-action" class="snackbar-toast bg-red2-dark color-white"  data-delay="2000" data-autohide="true"><i class="fa fa-times mr-3"></i>Product has been Removed</div>
    <div   id="apply" class="snackbar-toast bg-green1-dark color-white"  data-delay="2000" data-autohide="true"><i class="fa fa-info mr-3"></i>Product Quantity Updated</div>


 
       <input  style="display:none;"    type="text"  id="product_id">
 
    <button   style="display:none;"  id="del">remove now</button>
    



    <script type="text/javascript">


function remove_item(){
document.getElementById("del").click();

 }
        
            // adding to cart...

        $(document).ready(function(){
            $("#del").click(function(){
                var product_id=$("#product_id").val();
  
            
                
                $.ajax({
                    url:'remove-to-cart.php',
                    method:'POST',
                    data:{
                        product_id:product_id
                    },
                   success:function(data){
                 setTimeout(function(){
                     window.location="cart.php"
                        }, 2000);
                    
                   }
                });
            });
        });


    </script>
   




   <div id="cart-item-edit" 
         class="menu menu-box-bottom menu-box-detached rounded-m" 
         data-menu-height="380" 
         data-menu-effect="menu-over">
        
        <div class="content">
            <div class="d-flex">
                <div class="mr-auto" id="im" >
                  <img src="" id="myImg" class="rounded-m shadow-xl" width="110"> 
                </div>
                <div class="ml-auto w-100 pl-3">
                    <h5 class="font-14 font-600 opacity-80 pb-2" id="product_name"> </h5>
                    <div class="clearfix"></div>
                    <h1 id="price" class="font-24 font-700 pt-1 "> </h1>
                </div>
            </div>
            <div class="divider mt-4 mb-2"></div>
            <div class="row mb-2">
                <div class="col-12">
                    <div class="  font-20">
                        <span class="">Quanity</span>
                        
                   <input type="number" class="" name="quanity" id="quantity">
                    </div>
                </div>
          
           
            
            </div>
            <a href="#" id="edit" data-toast="apply" class="btn close-menu btn-full bg-highlight btn-m rounded-sm shadow-xl text-uppercase font-900 mb-4">Apply Changes</a>
            <div class="divider mb-3"></div>
            <a href="#" onclick="remove_item()" data-toast="removed-action" class="btn btn-full close-menu bg-gransparent color-red2-dark btn-m  text-uppercase font-900 mb-2">Remove product</a>
        </div>
    </div>  


        <script type="text/javascript">

 
        
            // adding to cart...

        $(document).ready(function(){
            $("#edit").click(function(){
                var quantity=$("#quantity").val();
                var product_id=$("#product_id").val();
  
            
                
                $.ajax({
                    url:'edit-to-cart.php',
                    method:'POST',
                    data:{
                        quantity:quantity,
                        product_id:product_id
                    },
                   success:function(data){
                 setTimeout(function(){
                     window.location="cart.php"
                        }, 2000);
                    
                   }
                });
            });
        });


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
</html>