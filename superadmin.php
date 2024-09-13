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
  <title>Manage Admin | Sembrano Store</title>
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
<span class="d-none d-md-inline"><?php echo $_SESSION['fullname']; ?>  </span>
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
            <a href="product.php" class="nav-link ">

              <i class="nav-icon fa-brands fa-product-hunt"></i>
              <p>  
                Manage  Product
                 
                
              </p>
            </a>
         
          </li>

 

          <li class="nav-item">
            <a href="category.php" class="nav-link ">
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
            <a href="superadmin.php" class="nav-link active">
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
            <li class="nav-item">
            <a href="sales.php" class="nav-link">
              <i class="nav-icon fas fa-chart-bar"></i>
              <p>
                   Sales Report
               
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
            <h1 class="m-0">Manage  Admin</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Manage Admin</li>
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
<h3 class="card-title"><i class="fa-solid fa-user-shield"></i> Administrator list</h3> <button type="button" data-toggle="modal" data-target="#add" class="btn float-right  btn-success btn-md"> <i class="fa-solid fa-user-shield"></i>  Add  Super Administrator</button>
</div>

<div class="card-body">
<table id="example1" class="table table-bordered table-striped">
<thead>
<tr>
 
<th>Admin ID #</th>

<th>Fullname</th>
 
<th>Email</th>
<th>Contact</th>
<th>Role</th>
<th>Action</th>

</tr>
</thead>
<tbody>


<?php
 
$sql = "SELECT * FROM superadmin where role = 'superadmin' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    
    echo '

<tr>
<td >'.$row['id'].'</td>
<td> '.$row['fullname'].' </td>
 
<td>'.$row['email'].'</td>
<td> '.$row['contact'].'</td>
<td><span class="badge bg-success"> <i class="fa-solid fa-user-shield"></i>  Super Administrator</span></td>
<td> <h4> <a href="#" data-toggle="modal" data-target="#view'.$row['id'].'">   <span class="badge bg-info"> <i class="fas fa-edit "></i> </span></a>
    <a href="#" data-toggle="modal" data-target="#del'.$row['id'].'">   <span class="badge bg-danger"> <i class="fas fa-trash "></i> </span></a> </h4></td>

</tr>



<!-- Modal view request start -->
<div class="modal fade" id="view'.$row['id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Manage Admin ID # - '.$row['id'].'</h5>
       
      </div>
      <div class="modal-body">
 
 
<ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
 
 
<li class="nav-item">
<a class="nav-link active" id="custom-content-below-messages-tab'.$row['id'].'" data-toggle="pill" href="#custom-content-below-messages'.$row['id'].'" role="tab" aria-controls="custom-content-below-messages'.$row['id'].'" aria-selected="false">Administrator Information</a>
</li>
 
</ul>
<div class="tab-content" id="custom-content-below-tabContent'.$row['id'].'">

 
<div class="tab-pane fade show active " id="custom-content-below-messages'.$row['id'].'" role="tabpanel" aria-labelledby="custom-content-below-messages-tab'.$row['id'].'">


  <div class="card-body row">
  <form action="superadmin.php" method="post">
<div class="form-group col-6">
<label for="text">Admin ID #</label>
<input type="text" class="form-control" id="text" name="dd" disabled   value="'.$row['id'].'" placeholder="ID #">
</div>
<div class="form-group col-6">
<label for="text">Email</label>
<input type="text" class="form-control" id="text" name="email"  value="'.$row['email'].'" placeholder="Email">
</div>

<div class="form-group col-6">
<label for="text">Fullname</label>
<input type="text" class="form-control" id="text" name="fullname"   value="'.$row['fullname'].'" placeholder="Fullname">
</div>

 

<div class="form-group col-6">
<label for="text">Contact</label>
<input type="text" class="form-control" id="text" name="contact"  value="'.$row['contact'].'" placeholder="Contact #">
</div>

 

<input type="text" style="display:none;" name="user_id" value="'.$row['id'].'">
</div>


</div>
 
</div>
 

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         <button type="submit" name="update" class="btn btn-success" >Update</button>
      </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal view request end -->
    ';


    // delete modal
    echo '<!-- Modal -->
<div class="modal fade" id="del'.$row['id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Admin ID # : '.$row['id'].'</h5>
        
      </div>


      <div class="modal-body">
    <center> <h2 class="text-bold"> Delete Admin Account ???  </h2> </center>
         <form style="display:none;" method="post" action="superadmin.php">
          
                    
                       
                  
                    
                      <input style="display:none;" type="text" name="id" value="'.$row['id'].'">
                      <input style="display:none;" type="text" name="fullname" value="'.$row['fullname'].'">

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
  echo "No Pending Request";
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
     $fullname = $_POST['fullname'];
// sql to delete a record
$sql = "DELETE FROM superadmin WHERE id='$id'";

if ($conn->query($sql) === TRUE) {



  echo '<script> 
  const para = document.getElementById("para");
function myMessage() {
  Swal.fire({
  position: "center",
  icon: "success",
  title: "Successfully Deleted Admin info",
  showConfirmButton: false,
  timer: 3000
})
}
setTimeout(myMessage, 1000);






  </script>';



  echo '  <meta http-equiv="refresh" content="3; URL=superadmin.php" />';
} else {
 
}


$uid = $_SESSION['id'];
$fullname1 = $_SESSION['fullname'];
$activity = ' Deleted   '.$fullname.' Admin Account ';
$sql = "INSERT INTO logs (user_id, fullname, activity, month, day, year, time)
VALUES ('$uid', '$fullname1', '$activity', '$month', '$day', '$year', '$time')";

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

$fullname = $_POST['fullname'];
 
$email = $_POST['email'];
$contact = $_POST['contact'];
$user_id = $_POST['user_id'];
$sql = "UPDATE superadmim SET fullname ='$fullname', email= '$email', contact = '$contact'  WHERE id='$user_id'";

if ($conn->query($sql) === TRUE) {

  echo '<script> 
  const para = document.getElementById("para");
function myMessage() {
  Swal.fire({
  position: "center",
  icon: "success",
  title: "Successfully Updated Admin info",
  showConfirmButton: false,
  timer: 3000
})
}
setTimeout(myMessage, 1000);






  </script>';
  echo '  <meta http-equiv="refresh" content="3; URL=superadmin.php" />';

} else {
  echo "Error updating record: " . $conn->error;
}

$uid = $_SESSION['id'];
$fullname1 = $_SESSION['fullname'];
$activity = ' Updated   '.$fullname.' Admin Account ';
$sql = "INSERT INTO logs (user_id, fullname, activity, month, day, year, time)
VALUES ('$uid', '$fullname1', '$activity', '$month', '$day', '$year', '$time')";

if ($conn->query($sql) === TRUE) {
 // echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


 }
?>

<!-- add admin Modal -->
<div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Administrator</h5>
  
      </div>
      <div class="modal-body mt-n3">


<form action="superadmin.php" method="post">
<div class="card-body">
<div class="form-group">
<label for="text">Fullname</label>
<input type="text" class="form-control" id="fullname" name="fullname" required placeholder="Enter Fullname">
</div>

 <div class="form-group">
<label for="text">Email</label>
<input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
</div>

 <div class="form-group">
<label for="text">Contact #</label>
<input type="text" class="form-control" id="contact" name="contact" placeholder="Enter Contact">
</div>

 <div class="form-group">
<label for="text">Password</label>
<input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
</div>

  <div class="form-group">
<label for="text">Password</label>
<input type="password" class="form-control" id="confirm_password" required placeholder="Confirm Password">
</div>


<span id='message'></span> 

</div>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" id="admin_add" name="add_admin" class="btn btn-primary">Add  Super Admin</button>
      </form>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">

  function confirm() {
  $('#password, #confirm_password').on('keyup', function () {
  if ($('#password').val() == $('#confirm_password').val()) {
    $('#message').html(' ').css('color', 'green');
 
       $("#admin_add").show();
       
    
  } else {
    $('#message').html('Password does not Match').css('color', 'red');
 
              $("#admin_add").hide();
    
  }
 
});
}
setInterval(confirm, 1000);

</script>


<?php
 if(isset($_POST['add_admin']))
  {

$fullname = $_POST['fullname'];
 
$email = $_POST['email'];
$contact = $_POST['contact'];
$password = $_POST['password'];
 

$sql = "INSERT INTO superadmin (fullname,email,contact,password, role)
VALUES ('$fullname', '$email', '$contact', '$password', 'superadmin')";

if ($conn->query($sql) === TRUE) {
 

  echo '<script> 
 
function myMessage() {
  Swal.fire({
  position: "center",
  icon: "success",
  title: "Successfully Added Admin ",
  showConfirmButton: false,
  timer: 3000
})
}
setTimeout(myMessage, 1000);

  </script>';
  echo '  <meta http-equiv="refresh" content="3; URL=superadmin.php" />';



} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


$uid = $_SESSION['id'];
$fullname1 = $_SESSION['fullname'];
$activity = ' Added New '.$fullname.' SuperAdmin Account ';
$sql = "INSERT INTO logs (user_id, fullname, activity, month, day, year, time)
VALUES ('$uid', '$fullname1', '$activity', '$month', '$day', '$year', '$time')";

if ($conn->query($sql) === TRUE) {
 // echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}



 }
?>



  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2024 <a href="#">Sembrano Store</a>.</strong>
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
