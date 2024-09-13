<?php
error_reporting(error_reporting() & ~E_NOTICE);
include "database.php";
 
   if($_SESSION['login']=="yes")                          
{
 echo '
     <script>
            window.location="index.php"
            </script>';
}
else
{

 
}  

?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>login Sembrano Store</title>
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
        
     <br><br>
        <div class="card header-card shape-rounded" data-card-height="150">
            <div class="card-overlay bg-highlight opacity-95"></div>
            <div class="card-overlay dark-mode-tint"></div>
            <div class="card-bg preload-img" data-src=" "></div>
        </div>
        
        <div class="card card-style">
            <br>
           <center> <img src="logo.png" class="mb-2" width="50%"> </center>
           <center> <h2 class="badge bg-highlight color-white">Sembrano Store</h2></center>
            <div class="content mt-2 mb-0">
                <form method="post" action="login.php">
                <div class="input-style has-icon input-style-1 input-required pb-1">
                    <i class="input-icon fa fa-at color-theme"></i>
                    <span>email</span>
                    <em>(required)</em>
                    <input type="email" id="email" placeholder="Email">
                </div> 
                <div class="input-style has-icon input-style-1   pb-1">
                    <i class="input-icon fa fa-lock color-theme"></i>
                    <span>Password</span>
                    <em>(required)</em>
                    <input type="password" min="8" max="20" id="password" placeholder="Password">
                </div> 

              
                <a href="#" onclick="try_login()" class="btn btn-m mt-2 mb-4 btn-full bg-green1-dark rounded-sm text-uppercase font-900">Login</a>

          
              </form>

                <div class="divider mt-4 mb-3"></div>

                <div class="d-flex">
                    <div class="w-50 font-11 pb-2 color-theme opacity-60 pb-3 text-left"><a href="register.php" class="color-theme">Create Account</a></div>
                 
                </div>
            </div>
            
        </div>

       
                    <a href="#" style="display:none;" id="click1" data-menu="menu-warning-2">
                        <i class="fa fa-times color-red2-dark"></i>
                        <span>invalid</span>
                        <i class="fa fa-angle-right"></i>
                    </a>

                    <a href="#" style="display:none;" id="click2" data-menu="menu-warning-3">
                        <i class="fa fa-times color-red2-dark"></i>
                        <span>unv</span>
                        <i class="fa fa-angle-right"></i>
                    </a>



    </div>    
    <!-- end of page content-->


       <!---------------->
    <!---------------->
    <!--invalid login-->
    <!---------------->
    <!---------------->
    <div id="menu-warning-2" class="menu menu-box-modal bg-red2-dark rounded-m" 
         data-menu-height="200" 
         data-menu-width="310">
        <h1 class="text-center mt-3 pt-1"><i class="fa fa-3x fa-times-circle color-white shadow-xl rounded-circle"></i></h1>
        <h1 class="text-center mt-3 color-white font-700">Wooops!</h1>
        <p class="boxed-text-l color-white opacity-70">
            Invalid Email/Password.
        </p>
        <a href="#" style="display:none;" id="hide1" class="close-menu btn btn-m btn-center-m button-s shadow-l rounded-s text-uppercase font-900 bg-white">Go Back</a>
    </div>   


         <!---------------->
    <!---------------->
    <!--not yet verified-->
    <!---------------->
    <!---------------->
    <div id="menu-warning-3" class="menu menu-box-modal   rounded-m" 
         data-menu-height="250" 
         data-menu-width="310">
       
             <center>  <img src="wait.gif" width="100px" class="img-fluid"></center> 
        <h1 class="text-center mt-3 color-dark font-700">Admin Verification!</h1>
        <p class="boxed-text-l color-dark  ">
           Your account is not yet verified by admin. Please wait to get your account verified by admin.
        </p>
       
    </div>   





    
     <script type="text/javascript">
    
    function try_login() {
        // body...
 
 var email = document.getElementById("email").value;
 
 var password = document.getElementById("password").value;
  

   var xhttp = new XMLHttpRequest();
   xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {

      var check = this.responseText;

      if(check == 0){

        $("#click1").click();

      }

      if(check == 2){

        $("#click2").click();

      }


      if(check == 1){

         window.location="index.php";

      }



      
    };
   };
   xhttp.open("GET", "php/login.php?email="+email+"&password="+password, true);
   xhttp.send();

 

    }


</script>

  
   
    
    
</div>    


<script type="text/javascript" src="scripts/jquery.js"></script>
<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>
</body>
