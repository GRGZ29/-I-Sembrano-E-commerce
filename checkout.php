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

$sql = "SELECT SUM(amount) as total FROM voucher_history where  order_number = ''  ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   
 $va = $row['total'];

 if($va == 0){
  $va = 0;
 }

  }
} else {
 
}

$grand_total = $grand_total - $va;
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>Checkout.php</title>
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
    
  
    <div id="footer-bar" class="footer-bar-5">
          <a href="index.php" ><i class="fa fa-home color-highlight"></i><span>Home</span></a>
            <a href="cart.php" class="active-nav"><i class="fa fa-shopping-cart color-highlight"></i><span>Cart</span></a>
            <a href="order_list.php"><i class="fas fa-shipping-fast color-highlight"></i></i><span>Orders</span></a>
           
            <a href="category.php"><i class="fa fa-search color-highlight"></i><span>Category</span></a>
            <a href="#" data-menu="side-menu"><i class="fa fa-bars color-highlight"></i><span>Menu</span> </a>
    </div>
    
    <div class="page-content">
        
        <div class="page-title page-title-small">
            <h2><a href="#" data-back-button><i class="fa fa-arrow-left"></i></a>Checkout</h2>
            <a href="#" data-menu="menu-main" class="bg-fade-gray1-dark shadow-xl preload-img" data-src="user.png"></a>
        </div>
        <div class="card header-card shape-rounded" data-card-height="150">
            <div class="card-overlay bg-highlight opacity-95"></div>
            <div class="card-overlay dark-mode-tint"></div>
            <div class="card-bg preload-img" data-src=""></div>
        </div>
        
        <div class="card card-style">

                                <?php


if(isset($_POST['apply_now']))
  {

 

$voucher = $_POST['voucher'];
$uid = $_SESSION['id'];
date_default_timezone_set('Asia/Singapore');
  $month = date("F");
  $day = date("d");
  $year = date("Y");
  $time = date("h:i A");


  $sql = "SELECT * FROM voucher where code = '$voucher' and qty > 0 limit 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

    $amount_voucher = $row['amount'];
    echo ' 
        <div class="ml-3 mt-3 mr-3 alert alert-small rounded-s shadow-xl bg-blue1-dark" role="alert">
            <span><i class="fa fa-check-circle"></i></span>
            <strong>Voucher Applied</strong>
            <button type="button" class="close color-white opacity-60 font-16" data-dismiss="alert" aria-label="Close">&times;</button>
        </div>  ';

/////////22222222222
        $sql2 = "INSERT INTO voucher_history (code, amount, uid, month, day, year, time)
VALUES ('$voucher', '$amount_voucher', '$uid', '$month', '$day', '$year', '$time')";

if ($conn->query($sql2) === TRUE) {
   
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
/////////////////222222222222222


////////////3333333333333333
$sql = "UPDATE voucher SET qty='0' WHERE code='$voucher' ";

if ($conn->query($sql) === TRUE) {
 
} else {
  echo "Error updating record: " . $conn->error;
}

//////////////////////////333333333



    
  }
} else {

 
   echo ' 
        <div class="ml-3 mt-3 mr-3 alert alert-small rounded-s shadow-xl bg-red1-dark" role="alert">
            <span><i class="fa fa-exclamation-triangle"></i></span>
            <strong>Voucher Code Error.</strong>
            <button type="button" class="close color-white opacity-60 font-16" data-dismiss="alert" aria-label="Close">&times;</button>
        </div>  ';
  
}


 


 }

   ?>



            <div class="content">
                <h3>Order Summary</h3>
                <p>
                    Finished Shopping? Let's checkout!
                </p>

<?php
 
$sql = "SELECT * FROM cart where user_id = '".$_SESSION['id']."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

      $quantity = $row['quantity'];
    $price = $row['price'];

    $sub_total = $quantity * $price;
    $grand_total = $grand_total + ($quantity * $price);
    echo '


          <div class="d-flex pb-2">
                    <div class="mr-auto">
                        <img src="images/product/'.$row['image'].'" class="rounded-m shadow-xl" width="110">
                      
                    </div>
                    <div class="ml-auto w-100 pl-3">
                        <h5 class="font-18 font-600 opacity-90 pb-2">'.$row['product_name'].' </h5>
                        <div class="clearfix"></div>
                        <h1 class="font-23 font-700 float-left pt-2 ">₱ '.number_format($price).' </h1>
                        <div class="float-right">
                            <div class="input-style input-style-1 mt-1">
                                <span class="input-style-1-active">Qty</span>
                                <input type="number" min="1" max="999" disabled  value="'.$row['quantity'].'" class="border-0" placeholder="1">
                            </div>
                        </div>
                    </div>
                </div>

    ';
  }
} else {
  echo "No Products";
}
 
?>



          
                                    
     
                                    
        
            </div>
        </div>
        <form method="POST" action="process.php" enctype="multipart/form-data">

            <div class="card card-style">
            <div class="content">
                <h3>Delivery Address</h3>
                <p>
                    Please select your Address.
                </p>
                <div class="input-style input-style-2 mb-3 input-required">
                    
                    <em><i class="fa fa-angle-down"></i></em>
                    <select class="form-control"  name="address"  required>

                        <?php

                        $uid = $_SESSION['id'];
                        $sql = "SELECT  * FROM user_address where uid='$uid' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   echo '  <option selected    value="'.$row['name'].'">'.$row['name'].'</option>';
  }
} else {
 
} ?>


                        
                      
                  
                        
                 
                    </select>
                </div>
            </div>
        </div>


        <div class="card card-style">
            <div class="content">
                <h3>Payment Method</h3>
                <p>
                    Please select your payment method.
                </p>
                <div class="input-style input-style-2 mb-3 input-required">
                    <span>Payment Type</span>
                    <em><i class="fa fa-angle-down"></i></em>
                    <select class="form-control"   onchange="checkAlert(event)"  required>
                        
                        <option selected   value="Gcash">Gcash</option>
                        <option value="Palawan" >Palawan</option>
                        
                 
                    </select>
                </div>
            </div>
        </div>

                <div class="card card-style" style="display: none;"   id="gcash">
            <div class="content mb-0">
                <div class="row justify-content-center">
                    <div class="col-9">
                        <h4 class="mb-3">Send Exact Amount to</h4>
                        <p class="mt-n1 color-black font-800 font-20 line-height-m">
                           <a href="#" class="icon rounded-xs mr-1 icon-xs bg-fade-blue2-dark"><i class="far fa-user color-blue2-dark"></i></a> Avan Andante <br>
                           <a href="#" class="icon rounded-xs mr-1 mt-2 icon-xs bg-fade-blue2-dark"><i class="fas fa-mobile-alt color-blue2-dark"></i></a> 09077737633
                        </p>
                    </div>
                    <div class="float-left ml-n5 mt-2">
                        <p class="  ml-0 mb-0 pb-0">
                          <img src="images/payment/Gcash.png" class="rounded-m shadow-xl" width="110">
                        </p>
                    </div>
                </div>
            </div>
        </div>


   <div class="card card-style" style="display: none;"   id="cod">
            <div class="content mb-0">
                <div class="row justify-content-center">
                    <div class="col-9">
                        <h4 class="mb-3">Cash on Delivery</h4>
                        <p class="mt-n1 color-black font-800 font-20 line-height-m">
                          
                       
                        </p>
                    </div>
                    <div class="float-left ml-n5 mt-2">
                        <p class="  ml-0 mb-0 pb-0">
                          <img src="images/payment/cod.png" class="rounded-m shadow-xl" width="110">
                        </p>
                    </div>
                </div>
            </div>
        </div>




          <div class="card card-style" style="display: none;"   id="palawan">
            <div class="content mb-0">
                <div class="row justify-content-center">
                    <div class="col-9">
                        <h4 class="mb-3">Send Money to</h4>
                        <p class="mt-n1 color-black font-800 font-20 line-height-m">
                           <a href="#" class="icon rounded-xs mr-1 icon-xs bg-fade-blue2-dark"><i class="far fa-user color-blue2-dark"></i></a> Avan Andante <br>
                           <a href="#" class="icon rounded-xs mr-1 mt-2 icon-xs bg-fade-blue2-dark"><i class="fas fa-mobile-alt color-blue2-dark"></i></a> 09077737633
                        </p>
                    </div>
                    <div class="float-left ml-n5 mt-2">
                        <p class="  ml-0 mb-0 pb-0">
                          <img src="images/payment/Palawan.png" class="rounded-m shadow-xl" width="110">
                        </p>
                    </div>
                </div>
            </div>
        </div>


<script type="text/javascript">
    
</script>


<script type="text/javascript">

function checkAlert(evt) {
  if (evt.target.value === "Gcash") {
    $("#gcash").show();
     $("#palawan").hide();
     $("#cod").hide();
     $("#input_payment_details").show();
    document.getElementById("payment_method").value ="Gcash";
  }

    if (evt.target.value === "Palawan") {
    $("#palawan").show();
     $("#gcash").hide();
     $("#cod").hide();
     $("#input_payment_details").show();
     document.getElementById("payment_method").value ="Palawan";
  }


      if (evt.target.value === "COD") {
     $("#cod").show();
    $("#palawan").hide();
     $("#gcash").hide();
     $("#input_payment_details").hide();
     document.getElementById("payment_method").value ="Cash on Delivery";
      document.getElementById("code").value ="Cash on Delivery";
      document.getElementById("sender_name").value ="Cash on Delivery";
       document.getElementById("sender_number").value ="Cash on Delivery";
     
       document.getElementById("amount").value ="<?php echo $grand_total; ?>";
  }


}

 
</script>

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

       

    $status = $_SESSION['status'];
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
 

    $total_ss = $grand_total;
   

 ?>

        <div class="card card-style" id="input_payment_details">
            <div class="content">

                <h4>Payment Details</h4>
                <p> 
                    After you send money, 
                    Please verify your payment method.

 
                </p>
                <div class="input-style input-style-2 input-required mb-3">
                    <span class="color-highlight">Reference # / Transaction Code</span>
                    <em>(required)</em>
                    <input class="form-control" type="text" id="code" name="code" required placeholder="Reference / Transaction Code">
                </div> 
                <div class="input-style input-style-2 input-required mb-3">
                    <span class="color-highlight">Sender Name</span>
                    <em>(required)</em>
                    <input class="form-control" type="text" name="sender_name" id="sender_name" placeholder="Sender Name">
                </div> 

                <div class="input-style input-style-2 input-required mb-3">
                    <span class="color-highlight">Sender Number</span>
                    <em>(required)</em>
                    <input class="form-control" name="sender_number" name="sender_number" type="number" id="sender_number" placeholder="Sender Number">
                </div>

                <div class="input-style input-style-3 input-required mb-3">
                    <span class="color-highlight">Amount</span>
                    <em>(required)</em>
                    <input class="form-control" readonly type="number" value="<?php echo $grand_total; ?>"  name="amount" id="amount" placeholder="<?php echo number_format($grand_total); ?>">
                </div> 

                <h5>Proof of Payment</h5>
              
             
                   
                    <input   name="file" type="file"  accept="image/*">


                    <input   type="text" name="payment_method" required id="payment_method" style="display:none;"  >

                    <input   type="text" name="order_number" id="order_number"  style="display:none;">
                    <input   type="text" name="total" value="<?php echo number_format($grand_total); ?>"  style="display:none;">
                    <input style="display:none;" type="text" name="total_vat" value="<?php echo $amount; ?>">


                    <div class="input-style mt-4 has-icon input-style-2 input-required">
                    <i class="input-icon fa fa-receipt color-theme"></i>
                    <span>Voucher Code</span>
                    <em>(Optional)</em>
                    <input type="text"   id="voucherInput" name="voucher" placeholder="Enter Voucher Code">
                </div> 

<button id="submitButton" type="button" onclick="apply_voucher()" class="btn btn-success" style="display: none;">Apply Voucher</button>

                   
              <button type="submit" style="display:none;" id="place_" name="place_"> Order now</button>
            </div>
        </div>
</form>



<div style="display:none;">
    
    <form method="POST" action="checkout.php">
              <input type="text" required id="coderr" name="voucher"  >
                  <button type="submit" name="apply_now" style="display:none;" id="apply_now"> ss</button>

    </form>



</div>





<script>



    function apply_voucher(){
        var code = document.getElementById('voucherInput').value;
         var button_apply = document.getElementById('apply_now');
            document.getElementById('coderr').value = code;
            button_apply.click();

    }


    document.getElementById('voucherInput').addEventListener('input', function() {
        var voucherInput = document.getElementById('voucherInput');
        var submitButton = document.getElementById('submitButton');

        if (voucherInput.value.trim() !== '') {
            submitButton.style.display = 'block';
        } else {
            submitButton.style.display = 'none';
        }
    });
</script>



 <script>

function ordernow(){
document.getElementById("place_").click();

}

let x = Math.floor((Math.random() * 10000000) + 1);
document.getElementById("order_number").value = 'smbrn-'+x;
</script>
              
        <div class="card mt-4 preload-img" data-src="images/pictures/20s.jpg">
            <div class="card-body py-4">
                <h2 class="color-white text-center">Submit Order</h2>
                <p class="color-white boxed-text-xl">
                    After tapping the purchase button we'll immediately start processing your order
                </p>
                <div class="card card-style mx-0">
                    <div class="content">
                        <div class="row mb-0">


<?php
$uid = $_SESSION['id'];
$sql = "SELECT *  FROM voucher_history where uid = '$uid' and order_number=''";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  echo '<div class="col-6 text-left"><h6 class="font-600">Voucher Code Applied</h6></div>
  <div class="col-6 text-right"><h6 class="font-600">₱ '.number_format($row['amount']) .' <small class="text-success"> ['.$row['code'].']</small </h6></div>
';
  }
} else {
  
}





 ?>
                             

                            <div class="col-6 text-left"><h6 class="font-600">Total</h6></div>
                            <div class="col-6 text-right"><h6 class="font-600">₱ <?php echo number_format($display); ?> </h6></div>
                       <div class="col-6 text-left"><h6 class="font-600">Discount </h6></div>
                    <div class="col-6 text-right"><h6 class="font-600">₱ <?php echo $discount; ?> <?php echo ''.$ttext1.' ' ?> </h6></div>
                            <div class="col-6 text-left"><h6 class="font-600">Shipping</h6></div>
                            <div class="col-6 text-right"><h6 class="font-600 color-green1-dark">₱ 0</h6></div>
                            <div class="col-12"><div class="divider mt-3"></div></div>
                             

                            <div class="col-6 text-left"><h4>Grand Total</h4></div>
                            <div class="col-6 text-right"><h4>₱ <?php echo number_format($grand_total); ?></h4></div>
                        </div>

                        <div class="divider mt-4"></div>

                        <a href="#" onclick="ordernow()" class="btn btn-full btn-m rounded-sm bg-highlight font-800 text-uppercase">Place Order</a>

                    </div>
                </div>
            </div>
            <div class="card-overlay bg-highlight opacity-95"></div>
            <div class="card-overlay dark-mode-tint"></div>
        </div>
 
               
       
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
</html>