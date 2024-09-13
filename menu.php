<?php 
include "database.php";

?>
<div class="menu-header">
    <a href="#" data-toggle-theme class="border-right-0"><i class="fa font-12 color-yellow1-dark fa-lightbulb"></i></a>
    
   
</div>

<div class="menu-logo text-center">
    <a href="#"><img class="rounded-circle  " width="80" src="user.png"></a>
    <h1 class="pt-3 font-800 font-28 text-uppercase"><?php echo $_SESSION['fullname'];  ?></h1>
    <p class="font-11 mt-n2"><span class="color-highlight">Sembrano</span> Store.</p>
</div>

<div class="menu-items">
    <h5 class="text-uppercase opacity-20 font-12 pl-3">Menu</h5>
    <a id="nav-welcome" href="index.php">
       <i class="fa fa-home color-green1-dark"></i>
        <span>Home</span>
        
        <i class="fa fa-circle"></i>
    </a>

    <a id="nav-welcome" href="my.php">
       <i class="fa fa-heart color-green1-dark"></i>
        <span>Favorites</span>
        
        <i class="fa fa-circle"></i>
    </a>

    
    <a id="nav-welcome" href="faq.php">
       <i class="fa fa-question color-green1-dark"></i>
        <span>F.A.Q.</span>
        
        <i class="fa fa-circle"></i>
    </a>



     
    <a id="nav-settings" href="profile.php">
      <i class="fa fa-user-cog color-green1-dark"></i>
        <span>User Settings</span>
        <i class="fa fa-circle"></i>
    </a>
    <a href="logout.php"  >
    <i class="fas fa-sign-out-alt color-red2-dark"></i>
        <span>Log out</span>
       
    </a>
</div>

<div class="text-center pt-2">
    
    <p class="mb-0 pt-3 font-10 opacity-30">Copyright <span class="copyright-year"></span> Sembrano Store. All rights reserved</p>
</div>
