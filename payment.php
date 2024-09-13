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
  <title>Manage Payment | Sembrano Store</title>
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
            <a href="order.php" class="nav-link ">
              <i class="nav-icon fa-solid fa-dolly"></i>
              <p>
                 Manage Orders
                 
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="payment.php" class="nav-link active">
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
          </li>


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
            <h1 class="m-0">Manage Payment</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Manage Payment</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
 


    <!-- Main content -->
    <section class="content">
<div class="card">
<div class="card-header">
<h3 class="card-title">Payment list</h3>
</div>

<div class="card-body">
<table id="example1" class="table table-hover table-bordered table-striped">
<thead>
<tr>
 
<th>ORDER #</th>

<th>User ID #</th>
<th>Contact</th>
<th>Payment Method</th>
<th>Amount</th>
<th>Payment Status</th>
<th>Order Status</th>
<th>Date Placed</th>
<th> </th>

</tr>
</thead>
<tbody>


<?php
 
$sql = "SELECT * FROM payment group by order_number order by id DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

   $status =  $row['status'];

   if($status != 'Pending'){
 
    $stats = '<span style="font-size:15px;" class="badge bg-success"> '.$row['status'].'</span> ';
   }

    if($status == 'Pending'){
      $confirm_button = ' <a href="#" data-toggle="modal" data-target="#con'.$row['id'].'">   <span class="badge bg-primary"><i class="fa-solid fa-pen-to-square"></i> </span></a>';
    $stats = '<span style="font-size:15px;" class="badge bg-warning"> '.$row['status'].'</span> ';
   }


 if($status == 'Cancelled'){

    $confirm_button = '';
    $stats = '<span style="font-size:15px;" class="badge bg-danger"> '.$row['status'].'</span> ';
   }


    if($status == 'Refund'){
      $confirm_button = ' <a href="#" data-toggle="modal" data-target="#ref'.$row['id'].'">   <span class="badge bg-warning"><i class="fa-solid fa-pen-to-square"></i> </span></a>';
    $stats = '<span style="font-size:15px;" class="badge bg-warning"> '.$row['status'].'</span> ';
   }



   $order_number = $row['order_number'];


// order status start

$sql2 = "SELECT * FROM orders where order_number = '$order_number' group by order_number ";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
  // output data of each row
  while($row2 = $result2->fetch_assoc()) {
   
       $order_status =  $row2['order_status'];

   if($order_status != 'Pending'){
    $order_stats = '<span style="font-size:15px;" class="badge bg-info"> '.$row2['order_status'].'</span> ';
   }

   if($order_status == 'Refund'){
    $order_stats = '<span style="font-size:15px;" class="badge bg-info"> '.$row2['order_status'].' On-Process</span> ';
   }


    if($order_status == 'Pending'){
    $order_stats = '<span style="font-size:15px;" class="badge bg-warning"> '.$row2['order_status'].'</span> ';
   }


    if($order_status == 'Refunded'){
    $order_stats = '<span style="font-size:15px;" class="badge bg-warning"> '.$row2['order_status'].'</span> ';
   }



       if($order_status == 'Cancelled'){
    $order_stats = '<span style="font-size:15px;" class="badge bg-danger"> '.$row2['order_status'].'</span> ';
   }




  }
} else {
 
}


//  order status end

$payment_method  = $row['payment_method'];

if($payment_method == 'Gcash'){
   $text1 = '';

  $img = 'mobile-app/images/payment/Gcash.png';
}

if($payment_method == 'Palawan'){

   $text1 = '';

  $img = 'mobile-app/images/payment/Palawan.png';
}

if($payment_method == 'Cash on Delivery'){

  $text1 = 'style="display:none;';

  $img = 'mobile-app/images/payment/cod.png';
}


    
    echo '

<tr>
<td class="text-bold"><span style="font-size:20px;" class="badge bg-info"> '.$row['order_number'].'</span></td>
<td> '.$row['user_id'].' </td>
<td>'.$row['contact'].'</td>
<td>'.$row['payment_method'].'</td>
<td>₱ '.number_format($row['amount'], 2).'</td>
<td>'.$stats.'</td>
 <td>'.$order_stats.'</td>
<td>'.$row['month'].' '.$row['day'].', '.$row['year'].'</td>
<td> <h4> 

'.$confirm_button.'


    <a href="#" data-toggle="modal" data-target="#del'.$row['id'].'">   <span class="badge bg-danger"> <i class="fas fa-trash "></i> </span></a>


   

     </h4></td>

</tr>

 
    ';


        // confirm modal
    echo '<!-- Modal -->
<div class="modal fade" id="con'.$row['id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
         
      </div>
      <div class="modal-body">
    <center> <h2><strong> Payment Confirmation <strong> </h2> </center>
         <form style="display:none;" method="post" action="payment.php">
             
                    <br>
                         <!-- Widget: user widget style 1 -->
            <div class="card  card-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-success">
                <h3 class="text-bold mb-n2">'.$payment_method.'</h3>
           
              </div>
              <div  class="widget-user-image mt-2">
                <img class="img-circle elevation-2" src="'.$img.'" alt="User Avatar">
              </div>
              <div '.$text1.' class="card-footer">
                <div class="row">
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">'.$row['sender_name'].'</h5>
                      <hr>
                      <span class=" ">Sender Name</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">'.$row['sender_number'].'</h5>
                        <hr>
                      <span class="description-text">'.$payment_method.' #</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4">
                    <div class="description-block">
                      <h5 class="description-header">'.$row['code'].'</h5>
                        <hr>
                      <span class="description-text">Ref #</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.widget-user -->
                <a '.$text1.' href="mobile-app/images/proof/'.$row['proof'].'" download="mobile-app/images/proof/'.$row['proof'].'">  Click here to download Proof of payment </a>
                    
                      <input style="display:none;" type="text" name="id" value="'.$order_number.'">
                      <input style="display:none;" type="text" name="odnum" value="'.$order_number.'">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="update" class="btn btn-success">Confirm payment</button>
      </div>
      </form>
    </div>
  </div>
</div>';


   // refund modal
    echo '<!-- Modal -->
<div class="modal fade" id="ref'.$row['id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
         
      </div>
      <div class="modal-body">
    <center> <h2><strong>Refund Payment Confirmation <strong> </h2> </center>
         <form style="display:none;" method="post" action="payment.php">
             
             <p class="text-normal h2">Refund Reason : '.$row['reason'].' </p>
                    <br>
                         <!-- Widget: user widget style 1 -->
            <div class="card  card-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-warning">
                <h3 class="text-bold mb-n2">'.$payment_method.'</h3>
           
              </div>
              <div  class="widget-user-image mt-2">
                <img class="img-circle elevation-2" src="'.$img.'" alt="User Avatar">
              </div>
              <div '.$text1.' class="card-footer">
                <div class="row">
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">'.$row['sender_name'].'</h5>
                      <hr>
                      <span class=" ">Sender Name</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">'.$row['sender_number'].'</h5>
                        <hr>
                      <span class="description-text">'.$payment_method.' #</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4">
                    <div class="description-block">
                      <h5 class="description-header">'.$row['code'].'</h5>
                        <hr>
                      <span class="description-text">Ref #</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.widget-user -->
                <a '.$text1.' href="mobile-app/images/proof/'.$row['proof'].'" download="mobile-app/images/proof/'.$row['proof'].'">  Click here to download Proof of payment </a>
                    
                      <input style="display:none;" type="text" name="id" value="'.$order_number.'">
                      <input style="display:none;" type="text" name="odnum" value="'.$order_number.'">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="refund" class="btn btn-warning">Confirm refund payment</button>
      </div>
      </form>
    </div>
  </div>
</div>';





    // delete modal
    echo '<!-- Modal -->
<div class="modal fade" id="del'.$row['id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
         
      </div>
      <div class="modal-body">
    <center> <h2><strong> Delete order ??? <strong> </h2> </center>
         <form style="display:none;" method="post" action="payment.php">
          
                    
                       
                  
                    
                      <input style="display:none;" type="text" name="id" value="'.$order_number.'">
                      <input style="display:none;" type="text" name="odnum" value="'.$order_number.'">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
        <button type="submit" name="del" class="btn btn-danger">Delete</button>
      </div>
      </form>
    </div>
  </div>
</div>';

  }
} else {
  echo "No Orders";
}
 
?>


 

</tbody>
 
</table>
</div>

</div>
    </section>
    <!-- /.content -->
  </div>
 
<?php
 if(isset($_POST['del']))
  {

     $id = $_POST['id'];
     $odnum = $_POST['odnum'];
// sql to delete a record
$sql = "DELETE FROM payment WHERE order_number='$id'";

if ($conn->query($sql) === TRUE) {



  echo '<script> 
  const para = document.getElementById("para");
function myMessage() {
  Swal.fire({
  position: "center",
  icon: "success",
  title: "Successfully Deleted user info",
  showConfirmButton: false,
  timer: 3000
})
}
setTimeout(myMessage, 1000);






  </script>';



  echo '  <meta http-equiv="refresh" content="3; URL=payment.php" />';
} else {
 
}


$uid = $_SESSION['id'];
$fullname = $_SESSION['fullname'];
$activity = ' Deleted the Payment of order #  '.$odnum.' ';
$sql = "INSERT INTO logs (user_id, fullname, activity, month, day, year, time)
VALUES ('$uid', '$fullname', '$activity', '$month', '$day', '$year', '$time')";

if ($conn->query($sql) === TRUE) {
 // echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}



 }
?>



<?php
 if(isset($_POST['update']))
  {


 $odnum = $_POST['odnum'];
  
$id = $_POST['id'];
$sql = "UPDATE payment SET status ='Confirmed'  WHERE order_number='$id'";

if ($conn->query($sql) === TRUE) {

  echo '<script> 
  const para = document.getElementById("para");
function myMessage() {
  Swal.fire({
  position: "center",
  icon: "success",
  title: "Successfully Confirmed Payment",
  showConfirmButton: false,
  timer: 3000
})
}
setTimeout(myMessage, 1000);

  </script>';
  echo '  <meta http-equiv="refresh" content="3; URL=payment.php" />';

} else {
  echo "Error updating record: " . $conn->error;
}

$uid = $_SESSION['id'];
$fullname = $_SESSION['fullname'];
$activity = ' Updated the Payment of order #  '.$odnum.' ';
$sql = "INSERT INTO logs (user_id, fullname, activity, month, day, year, time)
VALUES ('$uid', '$fullname', '$activity', '$month', '$day', '$year', '$time')";

if ($conn->query($sql) === TRUE) {
 // echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "UPDATE orders SET payment_status='Confirmed' WHERE order_number='$id' ";

if ($conn->query($sql) === TRUE) {
  // echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

 }
?>


<?php
 if(isset($_POST['refund']))
  {


 $odnum = $_POST['odnum'];
  
$id = $_POST['id'];
$sql = "UPDATE payment SET status ='Refunded', order_status='Refunded'  WHERE order_number='$id'";

if ($conn->query($sql) === TRUE) {

  echo '<script> 
  const para = document.getElementById("para");
function myMessage() {
  Swal.fire({
  position: "center",
  icon: "success",
  title: "Successfully Refunded Payment",
  showConfirmButton: false,
  timer: 3000
})
}
setTimeout(myMessage, 1000);

  </script>';
  echo '  <meta http-equiv="refresh" content="3; URL=payment.php" />';

} else {
  echo "Error updating record: " . $conn->error;
}

$uid = $_SESSION['id'];
$fullname = $_SESSION['fullname'];
$activity = ' Refunded the Payment of order #  '.$odnum.' ';
$sql = "INSERT INTO logs (user_id, fullname, activity, month, day, year, time)
VALUES ('$uid', '$fullname', '$activity', '$month', '$day', '$year', '$time')";

if ($conn->query($sql) === TRUE) {
 // echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "UPDATE orders SET payment_status='Refunded', order_status='Refunded' WHERE order_number='$id' ";

if ($conn->query($sql) === TRUE) {
  // echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

 }
?>



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
