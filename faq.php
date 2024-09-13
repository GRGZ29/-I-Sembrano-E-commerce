
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
<title>Azures BootStrap</title>
<link rel="stylesheet" type="text/css" href="styles/bootstrap.css">
<link rel="stylesheet" type="text/css" href="styles/style.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900|Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="fonts/css/fontawesome-all.min.css">    
<link rel="manifest" href="_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js">
 
</head>
    
<body class="theme-light" data-highlight="green1">
    
<div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>
    
<div id="page">
    
    <!-- header and footer bar go here-->
 
  <div id="footer-bar" class="footer-bar-5">
         <a href="index.php"  ><i class="fa fa-home color-highlight"></i><span>Home</span></a>
            <a href="#" onclick="cart()"><i class="fa fa-shopping-cart color-highlight"></i><span>Cart</span></a>
            <a href="order_list.php"><i class="fas fa-shipping-fast color-highlight"></i></i><span>Orders</span></a>
           
            <a href="category.php"><i class="fa fa-search color-highlight"></i><span>Category</span></a>
            <a href="#" data-menu="side-menu"><i class="fa fa-bars color-highlight"></i><span>Menu</span> </a>
        </div>
    
    <script type="text/javascript">
         // view cart...
function cart() {
   
          window.location="cart.php";
    
} // view cart...


    </script>
    <div class="page-content">
        
        <div class="page-title page-title-small">
            <h2><a href="#" data-back-button><i class="fa fa-arrow-left"></i></a>FAQ</h2>
              <a href="#" data-menu="side-menu" class="bg-fade-gray1-dark shadow-xl preload-img" data-src="user.png"></a>
        </div>
        <div class="card header-card shape-rounded" data-card-height="150">
            <div class="card-overlay bg-highlight opacity-95"></div>
            <div class="card-overlay dark-mode-tint"></div>
        
        </div>


        <div class="card card-style">
            <div class="content mb-2">
                <h3>Frequent Questions</h3>
                <p class="color-highlight font-12 mt-n2 mb-2">Really, we get asked this often.</p>
                <p>
                    We get asked these questions a lot, so we made this small section to help you out identifying what you need faster.
                </p>

                <div class="divider mt-2 mb-2"></div>

                <div class="d-flex">
                    <div class="pt-1">
                        <h5 data-activate="question-1" class="font-600">What payment methods do you accept?</h5>
                    </div>
                    <div class="ml-auto mr-1 pr-2">
                        <div class="custom-control classic-switch">
                            <input type="checkbox" class="classic-input" id="question-1">
                            <label class="custom-control-label" for="question-1"></label>
                            <i class="fa fa-angle-down font-11 color-green1-dark"></i>
                        </div>
                    </div>
                </div>
                <div data-switch="question-1" class="switch-is-unchecked">
                    <p class="pb-3">
                   - Gcash <br>
                   - Palawan 
                    </p>
                </div>

                <div class="divider mt-2 mb-2"></div>

                <div class="d-flex">
                    <div class="pt-1">
                        <h5 data-activate="question-2" class="font-600">Are there any discounts available on the app?</h5>
                    </div>
                    <div class="ml-auto mr-1 pr-2">
                        <div class="custom-control classic-switch">
                            <input type="checkbox" class="classic-input" id="question-2">
                            <label class="custom-control-label" for="question-2"></label>
                            <i class="fa fa-angle-down font-11 color-green1-dark"></i>
                        </div>
                    </div>
                </div>
                <div data-switch="question-2" class="switch-is-unchecked">
                    <p class="pb-3">
                      PWD & Senior Cetizen. 
                    </p>
                </div>

                <div class="divider mt-2 mb-2"></div>

                <div class="d-flex">
                    <div class="pt-1">
                        <h5 data-activate="question-3" class="font-600">What platforms does the eCommerce app support?</h5>
                    </div>
                    <div class="ml-auto mr-1 pr-2">
                        <div class="custom-control classic-switch">
                            <input type="checkbox" class="classic-input" id="question-3">
                            <label class="custom-control-label" for="question-3"></label>
                            <i class="fa fa-angle-down font-11 color-green1-dark"></i>
                        </div>
                    </div>
                </div>
                <div data-switch="question-3" class="switch-is-unchecked">
                    <p class="pb-3">
                     Android devices.
                    </p>
                </div>      

                <div class="divider mt-2 mb-2"></div>

                <div class="d-flex">
                    <div class="pt-1">
                        <h5 data-activate="question-4" class="font-600">Is there a customer support team available or day  to assist with app-related queries?</h5>
                    </div>
                    <div class="ml-auto mr-1 pr-2">
                        <div class="custom-control classic-switch">
                            <input type="checkbox" class="classic-input" id="question-4">
                            <label class="custom-control-label" for="question-4"></label>
                            <i class="fa fa-angle-down font-11 color-green1-dark"></i>
                        </div>
                    </div>
                </div>
                <div data-switch="question-4" class="switch-is-unchecked">
                    <p>
                    Availability: 7:00 AM to 5:00 PM Monday to Friday.
                    </p>
                </div>

                <div class="divider mt-2 mb-2"></div>

                <div class="d-flex">
                    <div class="pt-1">
                        <h5 data-activate="question-5" class="font-600">How soon can I expect delivery of my ordered products? </h5>
                    </div>
                    <div class="ml-auto mr-1 pr-2">
                        <div class="custom-control classic-switch">
                            <input type="checkbox" class="classic-input" id="question-5">
                            <label class="custom-control-label" for="question-5"></label>
                            <i class="fa fa-angle-down font-11 color-green1-dark"></i>
                        </div>
                    </div>
                </div>
                <div data-switch="question-5" class="switch-is-unchecked">
                    <p class="pb-3">
                      2 days.
                    </p>
                </div>

                <div class="divider mt-2 mb-2"></div>

                <div class="d-flex">
                    <div class="pt-1">
                        <h5 data-activate="question-6" class="font-600">How can I contact customer support if I encounter issues with the app? </h5>
                    </div>
                    <div class="ml-auto mr-1 pr-2">
                        <div class="custom-control classic-switch">
                            <input type="checkbox" class="classic-input" id="question-6">
                            <label class="custom-control-label" for="question-6"></label>
                            <i class="fa fa-angle-down font-11 color-green1-dark"></i>
                        </div>
                    </div>
                </div>
                <div data-switch="question-6" class="switch-is-unchecked">
                    <p class="pb-3">
                    Contact # : 0917 891 7600. <br>
                    Email :  sembranocrfac@gmail.com
                    </p>
                </div>


                <div class="divider mt-2 mb-2"></div>

                <div class="d-flex">
                    <div class="pt-1">
                        <h5 data-activate="question-7" class="font-600">Are the product prices inclusive of taxes and shipping fees? </h5>
                    </div>
                    <div class="ml-auto mr-1 pr-2">
                        <div class="custom-control classic-switch">
                            <input type="checkbox" class="classic-input" id="question-7">
                            <label class="custom-control-label" for="question-6"></label>
                            <i class="fa fa-angle-down font-11 color-green1-dark"></i>
                        </div>
                    </div>
                </div>
                <div data-switch="question-7" class="switch-is-unchecked">
                    <p class="pb-3">
                NO
                    </p>
                </div>



           <div class="divider mt-2 mb-2"></div>

                <div class="d-flex">
                    <div class="pt-1">
                        <h5 data-activate="question-8" class="font-600">What types of agricultural products do you offer?  </h5>
                    </div>
                    <div class="ml-auto mr-1 pr-2">
                        <div class="custom-control classic-switch">
                            <input type="checkbox" class="classic-input" id="question-8">
                            <label class="custom-control-label" for="question-8"></label>
                            <i class="fa fa-angle-down font-11 color-green1-dark"></i>
                        </div>
                    </div>
                </div>
                <div data-switch="question-8" class="switch-is-unchecked">
                    <p class="pb-3">
              grains, root vegetables, plants 
                    </p>
                </div>


                       <div class="divider mt-2 mb-2"></div>

                <div class="d-flex">
                    <div class="pt-1">
                        <h5 data-activate="question-9" class="font-600">Can I buy agricultural products in bulk quantities?</h5>
                    </div>
                    <div class="ml-auto mr-1 pr-2">
                        <div class="custom-control classic-switch">
                            <input type="checkbox" class="classic-input" id="question-9">
                            <label class="custom-control-label" for="question-9"></label>
                            <i class="fa fa-angle-down font-11 color-green1-dark"></i>
                        </div>
                    </div>
                </div>
                <div data-switch="question-9" class="switch-is-unchecked">
                    <p class="pb-3">
             yes
                    </p>
                </div>


            <div class="divider mt-2 mb-2"></div>

                <div class="d-flex">
                    <div class="pt-1">
                        <h5 data-activate="question-10" class="font-600">Are your agricultural products locally sourced?</h5>
                    </div>
                    <div class="ml-auto mr-1 pr-2">
                        <div class="custom-control classic-switch">
                            <input type="checkbox" class="classic-input" id="question-10">
                            <label class="custom-control-label" for="question-9"></label>
                            <i class="fa fa-angle-down font-11 color-green1-dark"></i>
                        </div>
                    </div>
                </div>
                <div data-switch="question-10" class="switch-is-unchecked">
                    <p class="pb-3">
          our local farmers' members
                    </p>
                </div>
            </div>
        </div>

           
        
    </div>    
    <!-- end of page content-->
    
    
 
    
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
