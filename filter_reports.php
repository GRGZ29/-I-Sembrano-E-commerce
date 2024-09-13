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
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Dashboard | Sembrano Store</title>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="icon" href="logo.png">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 


  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

 
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
       
      
    </ul>



    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
   
 
 <li class="nav-item dropdown user-menu">
<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
<img src="user.png" class="user-image img-circle elevation-2" alt="User Image">
<span class="d-none d-md-inline"><?php echo $_SESSION['fullname']; ?> </span>
</a>
<ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

<li class="user-header bg-white">
<img src="user.png" class="img-circle elevation-2" alt="User Image">
<p>
<?php echo $_SESSION['fullname']; ?>
<small>Administrator</small>
</p>
</li>
 

<li class="user-footer">
<a href="#" class="btn btn-default btn-flat">Profile</a>
<a href="logout.php" class="btn btn-default btn-flat float-right">Sign out</a>
</li>
</ul>
</li>
 
 
 
 
      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-teal elevation-3">
 
    <a href="index.php" class="brand-link">
       <img src="logo.png" alt="Logo" class="brand-image     " style="opacity: .8">
      <span class="brand-text text-center font-weight-bold">Sembrano Store</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
    
     

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav text-bold nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item  ">
            <a href="index.php" class="nav-link  ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                
              </p>
            </a>
           
          </li>


          <li class="nav-item">
            <a href="user.php" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                 Registered Users
                 
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="order.php" class="nav-link">
              <i class="nav-icon fa-solid fa-dolly"></i>
              <p>
                 Manage Orders
                 
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="payment.php" class="nav-link">
              <i class="nav-icon fa-solid fa-money-check-dollar"></i>
              <p>
                  Payments
                 
              </p>
            </a>
          </li>


 <li class="nav-item">
            <a href="discount.php" class="nav-link">
              <i class="nav-icon fa-solid fa-percent"></i>
              <p>
                  Discounts
                 
              </p>
            </a>
          </li> 

          <li class="nav-item">
            <a href="voucher.php" class="nav-link">
              <i class="nav-icon fa-solid fa-ticket"></i>
              <p>
                  Voucher
                 
              </p>
            </a>
          </li>
         
 
          <li class="nav-item">
            <a href="product.php" class="nav-link">

              <i class="nav-icon fa-brands fa-product-hunt"></i>
              <p>  
                Manage  Product
                 
                
              </p>
            </a>
         
          </li>

 

          <li class="nav-item">
            <a href="route.php" class="nav-link">
              <i class="nav-icon fa-solid fa-box-open"></i>
              <p>
                Manage Category
               
              </p>
            </a>
        
        <li class="nav-item">
            <a href="staff.php" class="nav-link">
              <i class="nav-icon fa-solid fa-address-card"></i>
              <p>
                   Store Staff
               
              </p>
            </a>
           
          </li>



          <li class="nav-item">
            <a href="admin.php" class="nav-link">
              <i class="nav-icon fas fa-user-cog"></i>
              <p>
                   Administrator
               
              </p>
            </a>
           
          </li>
 

          <li class="nav-item">
            <a href="logs.php" class="nav-link">
              <i class="nav-icon fa-solid fa-clock-rotate-left"></i>
              <p>
                   Audit Trail
               
              </p>
            </a>
           
          </li>

  <li class="nav-item  ">
            <a href="reports.php" class="nav-link  ">
              <i class="nav-icon fa-solid fa-file-invoice-dollar"></i>
              <p>
                Report Dashboard
               
              </p>
            </a>
            
          </li>


        <li class="nav-item">
                <a href="sales_reports.php" class="nav-link">
                  <i class="fa-regular fa-file-lines nav-icon"></i>
                  <p>Sales Report</p>
                </a>
              </li>

                        <li class="nav-item">
            <a href="query.php" class="nav-link">
              <i class="nav-icon fa-solid fa-comments"></i>
              <p>
                  Messages
                 
              </p>
            </a>
          </li>


      
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Admin Reports Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Admin Reports Dashboard </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->

        <section class="content">
        <div class="container-fluid">
            <h4 class="text-center">Filter Reports by Date</h4>
        
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                      <form method="GET" action="filter_reports.php">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Month</label>
                                    <select name="month" class="form-control"  >
                                        <option value="January">January</option>
                                        <option value="February">February</option>
                                        <option value="March">March</option>
                                        <option value="April">April</option>
                                        <option value="May">May</option>
                                        <option value="June">June</option>
                                        <option value="July">July</option>
                                        <option value="August">August</option>
                                        <option value="September">September</option>
                                        <option value="October">October</option>
                                        <option value="November">November</option>
                                        <option value="December">December</option>
                                    </select>
                                </div>
                            </div>
                         
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Year</label>
                                    <select name="year" class="form-control" >
                                        <option  selected value="2024">2024</option>
                                        <option value="2023" >2023</option>
                                    </select>
                                </div>
                            </div>


                        </div>
                        <button type="submit" class="btn btn-success mb-2 float-left"><i class="fa-solid fa-filter"></i> Apply Filter</button>
                        </form>
                    </div>
                </div>
     
        </div>
    </section>
    

    <section class="content">
      <div class="container-fluid">
    <h2 class="text-center text-info text-bold mb-4">  Reports by <?php echo $_GET['month']; ?> <?php echo $_GET['day']; ?>, <?php echo $_GET['year']; ?></h2>

   <div class="row">
 



     <?php
$month = $_GET['month'];
$day = $_GET['day'];
$year = $_GET['year'];
 $sql = "SELECT  * from orders where order_status = 'Pending' and month='$month' and year='$year'  group by order_number ";
    if ($result = mysqli_query($conn, $sql)) {
    $pending = mysqli_num_rows( $result );
} 
 ?>

               <div class="col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo $pending;?> </h3>

                <p><?php echo $_GET['month']; ?>  Pending Order(s) </p>
              </div>
              <div class="icon">
                <i class="  fa-solid fa-dolly"></i>
              </div>
            
            </div>
          </div>
     <?php

 $sql = "SELECT  * from orders where order_status = 'Delivered' and month='$month' and year='$year'    group by order_number ";
    if ($result = mysqli_query($conn, $sql)) {
    $com = mysqli_num_rows( $result );
} 
 ?>
               <!-- ./col -->
          <div class="col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $com;?></h3>

                <p><?php echo $_GET['month']; ?>  Success Orders</p>
              </div>
              <div class="icon">
                <i class="fa-solid fa-dolly"></i>
              </div>
              
            </div>
          </div>


         <?php
 
$sql = "SELECT SUM(amount) as total FROM payment where  status !='Pending' and status !='Refunded' and month='$month' and year='$year'   ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   
 $mts = $row['total'];

 if($mts == 0){
  $mts = 0;
 }

  }
} else {
 
}


$grand_gross = 0;
$sql = "SELECT * FROM orders where payment_status != 'Pending' and payment_status != 'Refunded'   and month='$month' and year='$year' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    
    $product_id = $row['product_id'];
    $quantity = $row['quantity'];


    /// gross sale

    $sql2 = "SELECT * FROM product where id = '$product_id'    ";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
  // output data of each row
  while($row2 = $result2->fetch_assoc()) {


    $price = $row2['price'];
    $purchase = $row2['purchase'];

    $net = $price - $purchase;
   


  }
} else {
   
}


    ////
$sub = $net * $quantity;
$grand_gross = $grand_gross + $sub;


  }
} else {
 
}


 
?>


            <div class="col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>₱ <?php echo number_format($mts); ?> </h3>

                <p><?php echo $_GET['month']; ?>  Total Sales</p>
              </div>
              <div class="icon">
                <i class="fa-solid fa-money-bill-transfer"></i>
              </div>
            
            </div>
          </div>


          <div class="col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>₱ <?php echo number_format($grand_gross); ?>  </h3>

                <p><?php echo $_GET['month']; ?> Total Net Gross Sales </p>
              </div>
              <div class="icon">
              <i class="fa-solid fa-money-bill-trend-up"></i>
              </div>
            
            </div>
          </div>






</div> <div class="row">
 
      <section class="col-12 ">
                  <div class="card">
              <div class="card-header  ">
                <h3 class="card-title">Monthly Sales</h3>
                
              </div>

              <div class="card-body">     <div id="chart4"  ></div></div>
     
            </div>

            <!-- /.card -->
          </section>
            <section class="col-12 ">
                  <div class="card">
              <div class="card-header  ">
                <h3 class="card-title text-bold"><i class="fa-solid text-warning  fa-ranking-star"></i> <?php echo $_GET['month']; ?> Top Selling Products</h3>
                
              </div>

             <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Product Name</th>
                    <th>Description</th>
                    <th>Purchase Price</th>
                    <th>Selling Price</th>
                    <th>Sales This Month</th>
                    
                  </tr>
                  </thead>
                  <tbody>
            
<?php
 $i = 1;
$sql = "SELECT * FROM orders where month='$month' and year='$year' group by product_id  order by id  DESC limit 10";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

  $pid = $row['product_id'];
  $on = $row['order_number'];
 
  $mm_sales = 0;

////////////////////////22222222222222
$sql2 = "SELECT * FROM product where id='$pid'";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
  // output data of each row
  while($row2 = $result2->fetch_assoc()) {
    $description = $row2['description'];
    $purchase = $row2['purchase'];
     $price = $row2['price'];

  }
} else {
 
}

/////////////////////////2222222222222222


//////////////////333333333333

 $sql3 = "SELECT * FROM orders where  product_id = '$pid' and month='$month' and year='$year' order by id  DESC ";
$result3 = $conn->query($sql3);

if ($result3->num_rows > 0) {
  // output data of each row
  while($row3 = $result3->fetch_assoc()) {
   
  $qty = $row3['quantity'];
  $pricee = $row3['price'];

$grand_total =  $qty * $pricee;

  $mm_sales = $mm_sales + $grand_total;
 

  }
} else {
 
}

/////////////////333333333333



    echo '
                  <tr>
                    <td class="text-success text-bold">
                     '.$i.' 
                    </td>
                   <td class="text-bold"> '.$row['product_name'].'</td>
                    <td>
                      '.$description.' 
                    </td>

                    <td>
                     ₱ '.number_format($purchase, 2).' 
                    </td>

                     <td>
                     ₱ '.number_format($price, 2).' 
                    </td>

                  

                    <td>
                    ₱ '.number_format($mm_sales, 2).' 

                    </td>
                    
                  </tr>


    ';
    $i = $i + 1;
  }
} else {
  echo "<span class='ml-4'> No Sales </span>";
}

?>

                  


                   
                
                  </tbody>
                </table>
              </div>
     
            </div>

            <!-- /.card -->
          </section>

 


          </div>
        <div class="row">
          <!-- Left col -->
      




          <section class="col-12  ">
                  <div class="card">
              <div class="card-header border-0">
                <h3 class="card-title"> Registered Users in month of <?php echo $_GET['month']; ?> </h3>
                <div class="card-tools">
                  
                  
                </div>
              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                  <thead>
                  <tr>
                    <th></th>
                    <th>Name</th>
                    <th>Contact</th>
                    <th>Email</th>
                    <th>Date</th>
                    
                  </tr>
                  </thead>
                  <tbody>
            
<?php
 
$sql = "SELECT * FROM user where month='$month' and year='$year'  order by id DESC limit 10";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo '
                  <tr>
                    <td>
                      <img src="user.png" alt="image" class="img-circle img-size-32 mr-2">
                     
                    </td>
                   <td class="text-success mr-1"> '.$row['fullname'].'</td>
                    <td>
                      '.$row['contact'].' 
                    </td>

                    <td>
                      '.$row['email'].' 
                    </td>


                    <td>
                      '.$row['month'].' '.$row['day'].', '.$row['year'].'
                    </td>
                    
                  </tr>


    ';
  }
} else {
  echo "<span class='ml-4'> No Registered User </span>";
}

?>

                  


                   
                
                  </tbody>
                </table>
              </div>
            </div>

            <!-- /.card -->
          </section>
 
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
 
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2024 <a href="#">Sembrano Store</a>.</strong>
    All rights reserved.
  
  </footer>


 <?php

    $sql = "SELECT  * from orders where order_status = 'Pending' and month = 'January' group by order_number ";
    if ($result = mysqli_query($conn, $sql)) {
    $jan = mysqli_num_rows( $result );
} 
 ?>


  <?php

    $sql = "SELECT  * from orders where order_status = 'Pending' and month = 'February' group by order_number  ";
    if ($result = mysqli_query($conn, $sql)) {
    $feb = mysqli_num_rows( $result );
} 
 ?>


  <?php

    $sql = "SELECT  * from orders where order_status = 'Pending' and month = 'March' group by order_number  ";
    if ($result = mysqli_query($conn, $sql)) {
    $mar = mysqli_num_rows( $result );
} 
 ?>



 <?php

    $sql = "SELECT  * from orders where order_status = 'Pending' and month = 'April'  group by order_number ";
    if ($result = mysqli_query($conn, $sql)) {
    $apr = mysqli_num_rows( $result );
} 
 ?>



 <?php

    $sql = "SELECT  * from orders where order_status = 'Pending' and month = 'May' group by order_number ";
    if ($result = mysqli_query($conn, $sql)) {
    $may = mysqli_num_rows( $result );
} 
 ?>


 <?php

    $sql = "SELECT  * from orders where order_status = 'Pending' and month = 'June' group by order_number  ";
    if ($result = mysqli_query($conn, $sql)) {
    $jun = mysqli_num_rows( $result );
} 
 ?>


 <?php

    $sql = "SELECT  * from orders where order_status = 'Pending' and month = 'July' group by order_number ";
    if ($result = mysqli_query($conn, $sql)) {
    $jul = mysqli_num_rows( $result );
} 
 ?>


 <?php

    $sql = "SELECT  * from orders where order_status = 'Pending' and month = 'August' group by order_number ";
    if ($result = mysqli_query($conn, $sql)) {
    $aug = mysqli_num_rows( $result );
} 
 ?>


 <?php

    $sql = "SELECT  * from orders where order_status = 'Pending' and month = 'September' group by order_number  ";
    if ($result = mysqli_query($conn, $sql)) {
    $sep = mysqli_num_rows( $result );
} 
 ?>


 <?php

    $sql = "SELECT  * from orders where order_status = 'Pending' and month = 'October' group by order_number ";
    if ($result = mysqli_query($conn, $sql)) {
    $oct = mysqli_num_rows( $result );
} 
 ?>


 <?php

    $sql = "SELECT  * from orders where order_status = 'Pending' and month = 'November' group by order_number ";
    if ($result = mysqli_query($conn, $sql)) {
    $nov = mysqli_num_rows( $result );
} 
 ?>

 <?php

    $sql = "SELECT  * from orders where order_status = 'Pending' and month = 'December' group by order_number ";
    if ($result = mysqli_query($conn, $sql)) {
    $dec = mysqli_num_rows( $result );
} 
 ?>

  <!-- /.Approved -->
 <?php

    $sql = "SELECT  * from orders where order_status = 'Delivered' and month = 'January' group by order_number ";
    if ($result = mysqli_query($conn, $sql)) {
    $jan2 = mysqli_num_rows( $result );
} 
 ?>


  <?php

    $sql = "SELECT  * from orders where order_status = 'Delivered' and month = 'February' group by order_number ";
    if ($result = mysqli_query($conn, $sql)) {
    $feb2 = mysqli_num_rows( $result );
} 
 ?>


  <?php

    $sql = "SELECT  * from orders where order_status = 'Delivered' and month = 'March' group by order_number ";
    if ($result = mysqli_query($conn, $sql)) {
    $mar2 = mysqli_num_rows( $result );
} 
 ?>



 <?php

    $sql = "SELECT  * from orders where order_status = 'Delivered' and month = 'April' group by order_number ";
    if ($result = mysqli_query($conn, $sql)) {
    $apr2 = mysqli_num_rows( $result );
} 
 ?>



 <?php

    $sql = "SELECT  * from orders where order_status = 'Delivered' and month = 'May' group by order_number ";
    if ($result = mysqli_query($conn, $sql)) {
    $may2 = mysqli_num_rows( $result );
} 
 ?>


 <?php

    $sql = "SELECT  * from orders where order_status = 'Delivered' and month = 'June'  group by order_number";
    if ($result = mysqli_query($conn, $sql)) {
    $jun2 = mysqli_num_rows( $result );
} 
 ?>


 <?php

    $sql = "SELECT  * from orders where order_status = 'Delivered' and month = 'July' group by order_number ";
    if ($result = mysqli_query($conn, $sql)) {
    $jul2 = mysqli_num_rows( $result );
} 
 ?>


 <?php

    $sql = "SELECT  * from orders where order_status = 'Delivered' and month = 'August' group by order_number ";
    if ($result = mysqli_query($conn, $sql)) {
    $aug2 = mysqli_num_rows( $result );
} 
 ?>


 <?php

    $sql = "SELECT  * from orders where order_status = 'Delivered' and month = 'September' group by order_number ";
    if ($result = mysqli_query($conn, $sql)) {
    $sep2 = mysqli_num_rows( $result );
} 
 ?>


 <?php

    $sql = "SELECT  * from orders where order_status = 'Delivered' and month = 'October' group by order_number ";
    if ($result = mysqli_query($conn, $sql)) {
    $oct2 = mysqli_num_rows( $result );
} 
 ?>


 <?php

    $sql = "SELECT  * from orders where order_status = 'Delivered' and month = 'November' group by order_number ";
    if ($result = mysqli_query($conn, $sql)) {
    $nov2 = mysqli_num_rows( $result );
} 
 ?>

 <?php

    $sql = "SELECT  * from orders where order_status = 'Delivered' and month = 'December' group by order_number ";
    if ($result = mysqli_query($conn, $sql)) {
    $dec2 = mysqli_num_rows( $result );
} 
 ?>


  <!-- /.user --> <!-- /.user --> <!-- /.user --> <!-- /.user -->







 <?php

    $sql = "SELECT  * from user where   month = 'January'  ";
    if ($result = mysqli_query($conn, $sql)) {
    $jan3 = mysqli_num_rows( $result );
} 
 ?>


  <?php

    $sql = "SELECT  * from user where   month = 'February'  ";
    if ($result = mysqli_query($conn, $sql)) {
    $feb3 = mysqli_num_rows( $result );
} 
 ?>


  <?php

    $sql = "SELECT  * from user where   month = 'March'  ";
    if ($result = mysqli_query($conn, $sql)) {
    $mar3 = mysqli_num_rows( $result );
} 
 ?>



 <?php

    $sql = "SELECT  * from user where  month = 'April'  ";
    if ($result = mysqli_query($conn, $sql)) {
    $apr3 = mysqli_num_rows( $result );
} 
 ?>



 <?php

    $sql = "SELECT  * from user where   month = 'May'  ";
    if ($result = mysqli_query($conn, $sql)) {
    $may3 = mysqli_num_rows( $result );
} 
 ?>


 <?php

    $sql = "SELECT  * from user where   month = 'June'  ";
    if ($result = mysqli_query($conn, $sql)) {
    $jun3 = mysqli_num_rows( $result );
} 
 ?>


 <?php

    $sql = "SELECT  * from user where   month = 'July'  ";
    if ($result = mysqli_query($conn, $sql)) {
    $jul3 = mysqli_num_rows( $result );
} 
 ?>


 <?php

    $sql = "SELECT  * from user where   month = 'August'  ";
    if ($result = mysqli_query($conn, $sql)) {
    $aug3 = mysqli_num_rows( $result );
} 
 ?>


 <?php

    $sql = "SELECT  * from user where   month = 'September'  ";
    if ($result = mysqli_query($conn, $sql)) {
    $sep3 = mysqli_num_rows( $result );
} 
 ?>


 <?php

    $sql = "SELECT  * from user where   month = 'October'  ";
    if ($result = mysqli_query($conn, $sql)) {
    $oct3 = mysqli_num_rows( $result );
} 
 ?>


 <?php

    $sql = "SELECT  * from user where   month = 'November'  ";
    if ($result = mysqli_query($conn, $sql)) {
    $nov3 = mysqli_num_rows( $result );
} 
 ?>

 <?php

    $sql = "SELECT  * from user where   month = 'December'  ";
    if ($result = mysqli_query($conn, $sql)) {
    $dec3 = mysqli_num_rows( $result );
} 
 ?>











 <?php

 $sql = "SELECT SUM(amount) as total FROM payment where  status = 'Confirmed' and month='January' and year='$year'  ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   
 $jan4 = $row['total'];

 if($jan4 == 0){
  $jan4 = 0;
 }

  }
} else {
 
}


 $sql = "SELECT SUM(amount) as total FROM payment where  status = 'Confirmed' and month='February' and year='$year'  ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   
 $feb4 = $row['total'];

 if($feb4 == 0){
  $feb4 = 0;
 }

  }
} else {
 
}



 $sql = "SELECT SUM(amount) as total FROM payment where  status = 'Confirmed' and month='March' and year='$year'  ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   
 $mar4 = $row['total'];

 if($mar4 == 0){
  $mar4 = 0;
 }

  }
} else {
 
}



 $sql = "SELECT SUM(amount) as total FROM payment where  status = 'Confirmed' and month='April' and year='$year'  ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   
 $apr4 = $row['total'];

 if($apr4 == 0){
  $apr4 = 0;
 }

  }
} else {
 
}


 $sql = "SELECT SUM(amount) as total FROM payment where  status = 'Confirmed' and month='May' and year='$year'  ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   
 $may4 = $row['total'];

 if($may4 == 0){
  $may4 = 0;
 }

  }
} else {
 
}




 $sql = "SELECT SUM(amount) as total FROM payment where  status = 'Confirmed' and month='June' and year='$year'  ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   
 $jun4 = $row['total'];

 if($jun4 == 0){
  $jun4 = 0;
 }

  }
} else {
 
}


 $sql = "SELECT SUM(amount) as total FROM payment where  status = 'Confirmed' and month='July' and year='$year'  ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   
 $jul4 = $row['total'];

 if($jul4 == 0){
  $jul4 = 0;
 }

  }
} else {
 
}




 $sql = "SELECT SUM(amount) as total FROM payment where  status = 'Confirmed' and month='August' and year='$year'  ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   
 $aug4 = $row['total'];

 if($aug4 == 0){
  $aug4 = 0;
 }

  }
} else {
 
}



 $sql = "SELECT SUM(amount) as total FROM payment where  status = 'Confirmed' and month='September' and year='$year'  ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   
 $sep4 = $row['total'];

 if($sep4 == 0){
  $sep4 = 0;
 }

  }
} else {
 
}



 $sql = "SELECT SUM(amount) as total FROM payment where  status = 'Confirmed' and month='November' and year='$year'  ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   
 $nov4 = $row['total'];

 if($nov4 == 0){
  $nov4 = 0;
 }

  }
} else {
 
}



 $sql = "SELECT SUM(amount) as total FROM payment where  status = 'Confirmed' and month='December' and year='$year'  ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   
 $dec4 = $row['total'];

 if($dec4 == 0){
  $dec4 = 0;
 }

  }
} else {
 
}



 
 ?>

 
   
 
  





<script> 
 







         var options = {
          series: [{
            name: "Registered User",
            data: [<?php echo $jan3;?>, <?php echo $feb3;?>, <?php echo $mar3;?>, <?php echo $apr3;?>, <?php echo $may3;?>, <?php echo $jun3;?>, <?php echo $jul3;?>, <?php echo $aug3;?>, <?php echo $sep3;?>, <?php echo $oct3;?>, <?php echo $nov3;?>, <?php echo $dec3;?>]
        }],
          chart: {
          height: 400,
          type: 'line',
          zoom: {
            enabled: false
          }
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          curve: 'smooth'
        },
      
     
        xaxis: {
          categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]
        }
        };

        var chart2 = new ApexCharts(document.querySelector("#chart2"), options);
        chart2.render();



           var options = {
          series: [{
          
            name: "Pending",
               color:  '#F4C430',
            data: [<?php echo $jan;?>, <?php echo $feb;?>, <?php echo $mar;?>, <?php echo $apr;?>, <?php echo $may;?>, <?php echo $jun;?>, <?php echo $jul;?>, <?php echo $aug;?>, <?php echo $sep;?>, <?php echo $oct;?>, <?php echo $nov;?>, <?php echo $dec;?>]
        },
        {
              name: "Completed",
            data: [<?php echo $jan2;?>, <?php echo $feb2;?>, <?php echo $mar2;?>, <?php echo $apr2;?>, <?php echo $may2;?>, <?php echo $jun2;?>, <?php echo $jul2;?>, <?php echo $aug2;?>, <?php echo $sep2;?>, <?php echo $oct2;?>, <?php echo $nov2;?>, <?php echo $dec2;?>]
        }

        ],
          chart: {
          height: 400,
          type: 'bar',
          zoom: {
            enabled: false
          }
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          curve: 'smooth'
        },
      
     
        xaxis: {
          categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]
        }
        };

        var chart3 = new ApexCharts(document.querySelector("#chart3"), options);
        chart3.render();




         var options = {
          series: [{
            name: "Monthly Sales",
            data: [<?php echo $jan4;?>, <?php echo $feb4;?>, <?php echo $mar4;?>, <?php echo $apr4;?>, <?php echo $may4;?>, <?php echo $jun4;?>, <?php echo $jul4;?>, <?php echo $aug4;?>, <?php echo $sep4;?>, <?php echo $oct4;?>, <?php echo $nov4;?>, <?php echo $dec4;?>]
        }],
          chart: {
          height: 400,
          type: 'line',
          zoom: {
            enabled: false
          }
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          curve: 'smooth'
        },
      
     
        xaxis: {
          categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]
        }
        };

        var chart4 = new ApexCharts(document.querySelector("#chart4"), options);
        chart4.render();

        </script>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
