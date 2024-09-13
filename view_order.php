<?php
error_reporting(error_reporting() & ~E_NOTICE);
include "database.php";
  date_default_timezone_set('Asia/Singapore');
  $month = date("F");
  $day = date("d");
  $year = date("Y");
  $time = date("h:i A");

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
  <title>Manage Order | Sembrano Store</title>
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
  
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

<link rel="stylesheet" href="dist/css/adminlte.min.css?v=3.2.0">
 



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
<span class="d-none d-md-inline"><?php echo $_SESSION['fullname']; ?>   </span>
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
     <style type="text/css">
       .modal-header {
    border-bottom: 0 none;
}

.modal-footer {
    border-top: 0 none;
}
     </style>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-teal elevation-4">
 
    <a href="index.php" class="brand-link">
       <img src="logo.png" alt="Logo" class="brand-image     " style="opacity: .8">
      <span class="brand-text font-weight-bold"> Sembrano Store</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
 

     
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
            <a href="user.php" class="nav-link  ">
              <i class="nav-icon fas fa-users"></i>
              <p>
                 Registered Users
                 
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="order.php" class="nav-link active ">
              <i class="nav-icon fa-solid fa-dolly"></i>
              <p>
                 Manage Orders
                 
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="payment.php" class="nav-link ">
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
            <a href="category.php" class="nav-link">
              <i class="nav-icon fa-solid fa-box-open"></i>
              <p>
                Manage Category
               
              </p>
            </a>
        

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
            <h1 class="m-0">Manage Order</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Manage Order</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
 


    <!-- Main content -->
    <section class="content">
<div class="card">
<div class="card-body">
 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
             
                 <?php
                 $invo = $_GET['order_number'];
                 $sql = "SELECT * FROM payment where order_number='$invo' group by order_number order by id ASC  ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

    $invo_id = $row['id'];
    $month = $row['month'];
    $day = $row['day'];
    $year = $row['year'];
    
  }
 
}


                  ?>

            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <img src="logo.png" alt="Logo" width="50px" class="" style="opacity: .8"> Sembrano Store
                    <small class="float-right">Date: <?php echo $month; ?> <?php echo $day; ?>, <?php echo $year; ?></small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  From
                  <address>
                    <strong>Sembrano Store.</strong><br>
                   Bago Bantay, Quezon City<br>
                   Metro Manila, Philippines<br>
                    Phone: 09077737633<br>
                    Email: sembrano@store.cloud
                  </address>
                </div>
                <!-- /.col -->

                <?php
                $user_id = $_GET['user_id'];
                $sql = "SELECT * FROM user where id ='$user_id' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {


    echo ' <div class="col-sm-4 invoice-col">
                  To
                  <address>
                    <strong>'.$row['fullname'].'</strong><br>
                    '.$row['street'].', '.$row['address'].'<br>
                    '.$row['city'].', '.$row['province'].'<br>
                    Phone: '.$row['contact'].'<br>
                    Email: '.$row['email'].'
                  </address>
                </div>';
    
  }
} else {
 
}


                 ?>



                
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <b>Invoice #<?php echo $invo_id; ?></b><br>
                  <br>
                  <b>Order #:</b> <?php echo $_GET['order_number'] ?><br>
                  <b>Payment Date:</b> <?php echo $month; ?> <?php echo $day; ?>, <?php echo $year; ?><br>
                  <b>Account:</b> <?php echo $_GET['user_id'] ?>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->




              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>Qty</th>
                      <th>Product</th>
                      <th>Price</th>
                       
                    </tr>
                    </thead>
                    <tbody>
                      <?php
 $order_number = $_GET['order_number'];
 
$sql = "SELECT * FROM orders where order_number = '$order_number' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

    $status =  $row['order_status'];
    $pstatus =  $row['payment_status'];


   if($status != 'Pending'){

 

    $stats = '<span style="font-size:15px;" class="badge bg-info"> '.$row['order_status'].'</span> ';
   }

    if($status == 'Pending'){
 

    $stats = '<span style="font-size:15px;" class="badge bg-warning"> '.$row['order_status'].'</span> ';
   }

       if($status == 'Cancelled'){
 

    $stats = '<span style="font-size:15px;" class="badge bg-danger"> '.$row['order_status'].'</span> ';
   }


 if($pstatus == 'Confirmed'){

 

    $pstats = '<span style="font-size:15px;" class="badge bg-success"> '.$row['payment_status'].'</span> ';
   }

    if($pstatus == 'Pending'){
 

    $pstats = '<span style="font-size:15px;" class="badge bg-warning"> '.$row['payment_status'].'</span> ';
   }


    if($pstatus == 'Cancelled'){
 

    $pstats = '<span style="font-size:15px;" class="badge bg-danger"> '.$row['payment_status'].'</span> ';
   }

   
echo '  <tr>
                      <td> '.$row['quantity'].'</td>
                      <td>'.$row['product_name'].'</td>
                      <td>₱ '.$row['price'].'</td>
                    
                    </tr>';   
  }
} else {
   
}
 

 $sql = "SELECT * FROM payment where order_number = '$order_number' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
        $payment_method = $row['payment_method'];

      
        $grand_totald = $row['total'];


    if($payment_method == 'Gcash'){
      $img = 'Gcash.png';
    }

    if($payment_method == 'Palawan'){
      $img = 'Palawan.png';
    }
  }
} else {
 
}



$user_id = $_GET['user_id'];
$sql = "SELECT * FROM user where id = '$user_id' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
        $ustatus = $row['status'];
   

  
  }
} else {
 
}




    
    
    $grand_total = $grand_totald - $discount;
 
$sql = "SELECT * FROM payment where order_number = '$order_number' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

    $subtotal = $row['amount'] + $discount;
    $gsubtotal=  number_format($subtotal);
    $total_vat = $row['total_vat'];
    $vat = $row['vat'];
  }
} else {
   
}



  $discount = 0;
  if($ustatus == 'Senior Cetizen' || $ustatus == 'PWD'){
        $ttext1 = '<small class="text-success"> ['.$ustatus.'] </small>';
       
         $discount = $total_vat * 0.1;

    }



?>
                  
                    
              
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <!-- accepted payments column -->
                <div class="col-6">
                  <p class="lead">Payment Method:</p>
 
                  <img src="mobile-app/images/payment/<?php echo $img; ?>" width="150px" class="rounded" alt="<?php echo $payment_method; ?>">
                   


                </div>
                <!-- /.col -->
                <div class="col-6">
                  <p class="lead">Payment Date <?php echo $month; ?> <?php echo $day; ?>, <?php echo $year; ?></p>

                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th style="width:50%">Subtotal:</th>
                        <td><?php echo $total_vat; ?></td>
                      </tr>

                      <tr>
                        <th style="width:50%">Tax VAT:</th>
                        <td><?php echo $vat; ?></td>
                      </tr>


                      <tr>
                        <th>Discount</th>
                        <td>₱ <?php echo $discount; ?> <?php echo $ttext1; ?> </td>
                      </tr>

                      <tr>
                        <th>Payment Status</th>
                        <td> <?php echo $pstats; ?> </td>
                      </tr>
                       
                      <tr>
                        <th>Order Status</th>
                        <td> <?php echo $stats; ?></td>
                      </tr>
                       
                      <tr>
                        <th>Total:</th>
                        <td class="text-bold">₱ <?php echo $grand_totald; ?></td>
                      </tr>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                  <a href="invoice-print.php?payment_status=<?php echo $_GET['payment_status']; ?>&order_status=<?php echo $_GET['order_status']; ?>&order_number=<?php echo $_GET['order_number']; ?>&user_id=<?php echo $_GET['user_id']; ?>" rel="noopener" target="_blank" class="btn btn-default float-right"><i class="fas fa-print"></i> Print</a>
                
                  
                </div>
              </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
</div>

</div>
    </section>
    <!-- /.content -->
  </div>
 
 

 

  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2023 <a href="#">Sembrano Store</a>.</strong>
    All rights reserved.
  
  </footer>

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

<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": [  "excel", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

</body>
</html>
