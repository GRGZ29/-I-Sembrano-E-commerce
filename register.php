<?php
 
include "database.php";
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>Registration</title>
<link rel="stylesheet" type="text/css" href="styles/bootstrap.css">
<link rel="stylesheet" type="text/css" href="styles/style.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900|Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="fonts/css/fontawesome-all.min.css">    
<link rel="manifest" href="_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js">
<link rel="apple-touch-icon" sizes="180x180" href="app/icons/icon-192x192.png">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
    
<body class="theme-light" data-highlight="green1">
    
<div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>
    
<div id="page">
    
     
 
    
    <div class="page-content">
        
        <div class="page-title page-title-small">
          
    

        </div>
        <div class="card header-card shape-rounded" data-card-height="150">
            <div class="card-overlay bg-highlight opacity-95"></div>
            <div class="card-overlay dark-mode-tint"></div>
            <div class="card-bg preload-img" data-src="images/pictures/18lq.jpg"></div>
        </div>
        
        <div class="card card-style">
             <center> <img src="logo.png" class="mt-2 mb-2" width="30%"> </center>
              <center> <h2 class="badge bg-highlight color-white">Account Registration</h2></center>


                <?php


if(isset($_POST['register']))
  {


 $location = "images/";
    $file_new_name = date("dmy") . time() . $_FILES["file"]["name"]; // New and unique name of uploaded file
    $file_name = $_FILES["file"]["name"]; // Get uploaded file name
    $file_temp = $_FILES["file"]["tmp_name"]; // Get uploaded file temp
    $file_size = $_FILES["file"]["size"]; // Get uploaded file size

     $file_new_name2 = date("dmy") . time() . $_FILES["file2"]["name"]; // New and unique name of uploaded file
    $file_name2 = $_FILES["file2"]["name"]; // Get uploaded file name
    $file_temp2 = $_FILES["file2"]["tmp_name"]; // Get uploaded file temp
    $file_size2 = $_FILES["file2"]["size"]; // Get uploaded file size



$fullname = $_POST['fullname'];
$address = $_POST['address'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$password = $_POST['password'];

$street = $_POST['street'];
$city = $_POST['city'];
$province = $_POST['province'];

date_default_timezone_set('Asia/Singapore');
  $month = date("F");
  $day = date("d");
  $year = date("Y");
  $time = date("h:i A");


  $sql = "SELECT * FROM user where email = '$email' limit 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

    echo ' 
        <div class="ml-3 mr-3 alert alert-small rounded-s shadow-xl bg-yellow1-dark" role="alert">
            <span><i class="fa fa-exclamation-triangle"></i></span>
            <strong>Opps! Email is Already Registered</strong>
            <button type="button" class="close color-white opacity-60 font-16" data-dismiss="alert" aria-label="Close">&times;</button>
        </div>  ';
    
  }
} else {

    $sql = "INSERT INTO user (fullname,address,street, city, province, contact,email,password,month,day,year, file, coop_id)
VALUES ('$fullname', '$address', '$street',  '$city', '$province', '$contact', '$email', '$password', '$month', '$day', '$year', '$file_name', '$file_name2')";

if ($conn->query($sql) === TRUE) {
 move_uploaded_file($file_temp, $location . $file_name); 
  move_uploaded_file($file_temp2, $location . $file_name2); 
echo ' <script>
    window.location="wait.php"
        </script>   ';

 

} else {
 
}


  
}


 


 }

   ?>


            <div class="content mb-0 mt-1">
                <form action="register.php" method="post" enctype="multipart/form-data">

                    <br>

                    <h5>Upload Valid ID (Driver license, Passport, Senior citizen ID, PWD)</h5>
                  <input   name="file" type="file" required  accept="image/*">
 

 <div class="d-flex mt-4 mb-4">
                    <div class="pt-1">
                        <h5 data-activate="toggle-id-3" class="font-500 font-13">Are you COOP MEMBER</h5>
                    </div>
                    <div class="ml-auto mr-4 pr-2">
                        <div class="custom-control ios-switch ios-switch-icon">
                            <input type="checkbox" class="ios-input" id="toggle-id-3">
                            <label class="custom-control-label" for="toggle-id-3"></label>
                            <span>YES</span>
                            <span>NO</span>
                        </div>
                    </div>
                </div>
                <div data-switch="toggle-id-3" class="switch-is-unchecked">
                    <p class="mb-0 pb-0 pt-2">Please Upload COOP MEMBER ID for verification.</p>
                    <h5>Upload Valid ID (Coop member)</h5>
                  <input   name="file2" type="file"    accept="image/*">

                </div>


                <div class="input-style mt-2 has-icon input-style-1 input-required">
                    <i class="input-icon fa fa-user color-theme"></i>
                    <span>Fullname</span>
                    <em>(required)</em>
                    <input type="name" required name="fullname" placeholder="Fullname">
                </div> 
                <div class="input-style has-icon input-style-1 input-required">
                    <i class="input-icon fa fa-at color-theme"></i>
                    <span>Email</span>
                    <em>(required)</em>
                    <input type="email" required name="email" required placeholder="Email">
                </div>

                <div class="input-style has-icon input-style-1 input-required">
                    <i class="input-icon fa fa-mobile color-theme"></i>
                    <span>Contact #</span>
                    <em>(required)</em>
                    <input type="tel" required name="contact" placeholder="Contact #">
                </div> 


                <div class="input-style has-icon input-style-1 input-required">
                    <i class="input-icon fa fa-map-marker-alt color-theme"></i>
                    <span>House #</span>
                    <em>(required)</em>
                    <input type="name" required name="address" placeholder="House #">
                </div>

                <div class="input-style has-icon input-style-1 input-required">
                    <i class="input-icon fa fa-map-marker-alt color-theme"></i>
                    <span>Street</span>
                    <em>(required)</em>
                    <input type="name"  required name="street" placeholder="Street">
                </div>


                <div class="input-style has-icon input-style-1 input-required">
                    <i class="input-icon fa fa-map-marker-alt color-theme"></i>
                    <span>City/State</span>
                    <em>(required)</em>
                    <input type="name" required name="city" placeholder="City / State">
                </div>

                <div class="input-style has-icon input-style-1 input-required">
                    <i class="input-icon fa fa-map-marker-alt color-theme"></i>
                    <span>Provice</span>
                    <em>(required)</em>
                    <input type="name"  required name="province" placeholder="Provice">
                </div>

                <div class="input-style has-icon input-style-1 input-required">
                    <i class="input-icon fa fa-lock color-theme"></i>
                    <span>Password</span>
                    <em>(required)</em>
                    <input type="password" required min="8" max="20" name="password" id="password"  placeholder="Password">
                </div>


                <div class="input-style has-icon input-style-1 input-required">
                    <i class="input-icon fa fa-lock color-theme"></i>
                    <span>Confirm Password</span>
                    <em>(required)</em>
                    <input type="password" required min="8" max="20" id="confirm_password"  placeholder="Confirm Password">
                </div>


             <span id='message'></span>

     <button type="submit" name="register"   style="display:none;" name="register" id="register"  class="btn btn-m btn-block rounded-sm mt-3 shadow-l bg-green1-dark text-uppercase font-900"> Create Account</button>

    



       <br>

                <p class="text-left mb-3">
                    <a href="login.php" class="color-highlight   opacity-80 font-12">Already Registered? Sign in Here</a>
                </p>

                </form>

            </div>
        </div>

       
       <a style="display:none;" href="#" id="success1" data-menu="menu-success-1">
                        <i class="fa fa-check color-green1-dark"></i>
                        <span>Success Box</span>
                        <i class="fa fa-angle-right"></i>
                    </a>
         
    </div>    
    <!-- end of page content-->
    

        <!---------------->
    <!---------------->
    <!--Registration Success-->
    <!---------------->
    <!---------------->
    <div id="menu-success-1" class="menu menu-box-bottom menu-box-detached rounded-m" 
         data-menu-height="305" 
         data-menu-effect="menu-over">
        <h1 class="text-center mt-4"><i class="fa fa-3x fa-check-circle color-green1-dark"></i></h1>
        <h1 class="text-center mt-3 text-uppercase font-700">Successfully Registered</h1>
        <p class="boxed-text-l">
             You are successfully registered<br>Please Wait for admin approval.
        </p>
        <a href="#" class="close-menu btn btn-m btn-center-m button-s shadow-l rounded-s text-uppercase font-900 bg-green1-light">Great</a>
    </div>  



<script type="text/javascript">
    
    function register_click() {
        // body...
 var fullname = document.getElementById("fullname").value;
 var email = document.getElementById("email").value;
 var contact = document.getElementById("contact").value;
 var street = document.getElementById("street").value;
 var city = document.getElementById("city").value;
 var province = document.getElementById("province").value;
 var address = document.getElementById("address").value;
 var password = document.getElementById("password").value;
  

   var xhttp = new XMLHttpRequest();
   xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {

        $("#success1").click();

        const redirect = setTimeout(login, 5000);

function login() {
 window.location="login.php";
}

    };
   };
   xhttp.open("GET", "php/register.php?fullname="+fullname+"&address="+address+"&street="+street+"&city="+city+"&province="+province+"&contact="+contact+"&email="+email+"&password="+password+"", true);
   xhttp.send();

 

    }


</script>


    
        <script type="text/javascript">
var i = 0;
  function confirm_password() {

  if ($('#fullname').val() !='' &&  $('#email').val() !='' &&  $('#contact').val() !='' &&  $('#street').val() !='' &&  $('#city').val() !='' &&  $('#address').val() !='' &&  $('#province').val() !='' && i == 1 ) {
     
       $("#register").show();
       $("#not_complete").hide();
             
  } else {
   
 
              $("#register").hide();
              $("#not_complete").show();
               
  }


  $('#password, #confirm_password').on('keyup', function () {
  if ($('#password').val() == $('#confirm_password').val()) {
    $('#message').html('').css('color', 'green');
        
       

       i = 1;
       $("#register").show();
        $("#register").show();
             
  } else {
    $('#message').html('Password does not Match').css('color', 'red');
 
        i = 0;
              $("#register").hide();
              $("#not_complete").show();
               
  }
 
});

}
setInterval(confirm_password, 1000);
</script>
    
  


  
    
</div>    


<script type="text/javascript" src="scripts/jquery.js"></script>
<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>
</body>
</html>