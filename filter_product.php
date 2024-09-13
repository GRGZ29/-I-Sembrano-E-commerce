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
  <title>Manage Product | Sembrano Store</title>
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
            <a href="product.php" class="nav-link active">

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
            <h1 class="m-0">Manage Product</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Manage Product</li>
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
<h3 class="card-title">  <div class="form-group ">
                  <label for="a"><code>Filter By Category</code></label>
                  <select class="form-control " name="category"  onchange="category(event)" id="a">
                  
                                     <?php
$category = $_GET['category'];
echo '<option selected disabled value="'.$category.'">'.$category.' [Selected Category]</option>';
 
$sql = "SELECT * FROM category where category!='$category' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   echo '<option value="'.$row['category'].'">'.$row['category'].'</option>';
  }
} else {
  
}
 
?>

<script type="text/javascript">
  function category(evt) {
 
 
     window.location="filter_product.php?category="+evt.target.value;
 

}

</script>

                  </select>
                </div> 

               
              </h3>

 <button type="button" data-toggle="modal" data-target="#add" class="btn btn-primary  float-right">  <i class="fas fa-plus"></i> Add New Product</button>   


</div>

<div class="card-body">

<table id="example1" class="table table-hover table-striped">
<thead>
<tr>
 <th> </th>
<th>Product ID #</th>

<th>Product Name</th>
<th>Category</th>
<th>Description</th>
<th>Price</th>

 
<th>Stock</th>

 
<th> </th>

</tr>
</thead>
<tbody>


<?php
 
$category = $_GET['category'];
 $sql = "SELECT * FROM category ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   
    $cat .= '     <option value="'.$row['category'].'">'.$row['category'].'</option>';

  }
} else {
  
}


$sql = "SELECT * FROM product  where category='$category'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    

    $stock = $row['stock'];

    if($stock == 0){
      $status = '<span style="font-size:14px;" class="badge bg-danger"><i class="fa-solid fa-circle-exclamation"></i> Out of Stock(s)</span>';
    }

    if($stock > 0){
      $status = '<span style="font-size:14px;"  class="badge bg-success">  '.$stock.'</span>';
      
    }


    echo '

<tr>
<td > <img src="mobile-app/product/'.$row['image'].'" width="50px"></td>
<td> '.$row['id'].' </td>
<td>'.$row['product_name'].'</td>
<td>'.$row['category'].'</td>
<td>'.$row['description'].'</td>
<td class="text-bold" >₱ '.$row['price'].'</td>
 
<td> '.$status.' <br>
 
</td>
 
<td> <h4>   


  <a href="#" data-toggle="modal" data-target="#ver'.$row['id'].'">   <span class="badge bg-primary"> <i class="fas fa-edit "></i> </span></a>


    <a href="#" data-toggle="modal" data-target="#del'.$row['id'].'">   <span class="badge bg-danger"> <i class="fas fa-trash "></i> </span></a>


     </h4>
    </td>

</tr>

 
    ';


    // delete modal
    echo '<!-- Modal -->
<div class="modal fade" id="del'.$row['id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
         
      </div>
      <div class="modal-body">
    <center> <h2><strong>  Are you sure to delete ?? <strong> </h2> </center>
         <form style="display:none;" method="post" action="user.php">
          
                    
                       
                  
                    
                      <input style="display:none;" type="text" name="id" value="'.$row['id'].'">
                      <input style="display:none;" type="text" name="product" value="'.$row['product'].'">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
        <button type="submit" name="del" class="btn btn-danger">Delete</button>
      </div>
      </form>
    </div>
  </div>
</div>';


   // update modal
    echo '<!-- Modal -->
<div class="modal fade" id="ver'.$row['id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
   
      <div class="modal-body">
     <h3><strong class="text-bold">Update Product </strong> </h3>  
     <hr>
         <form   method="post" action="product.php" enctype="multipart/form-data">
          
      <center>   <img src="mobile-app/product/'.$row['image'].'" width="150px">  </center>



                <div class="form-group">
                    <label for="dd">Product Image</label>
                    <input type="file" class="form-control" id="dd"   name="file"    >
                  </div>
                  <input type="hidden" name="img" value="'.$row['image'].'">

                  <div class="form-group">
                    <label for="dd">Product Name</label>
                    <input type="text" class="form-control" id="dd" required name="product_name"   value="'.$row['product_name'].'">
                  </div>


                  <div class="form-group">
                    <label for="dd">Price</label>
                    <input type="number" class="form-control" id="dd" required name="price" min="1"    value="'.$row['price'].'">
                  </div>


                  <div class="form-group">
                    <label for="dd">Stock</label>
                    <input type="number" class="form-control" id="dd" required name="stock" min="1"    value="'.$row['stock'].'">
                  </div>

 

                
  <div class="form-group ">
                  <label for="a"><code>Category</code></label>
                  <select class="form-control" name="category" id="a">
                '.$cat.'
                  </select>
                </div> 



                    
                       
                    <div class="form-group">
                        <label>Description</label>
                        <textarea required name="description" class="form-control" rows="3" placeholder="Enter ...">'.$row['description'].'</textarea>
                      </div>
                    
                      <input style="display:none;" type="text" name="id" value="'.$row['id'].'">


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="update_product" class="btn btn-success">Update</button>
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
     $product = $_POST['product'];
// sql to delete a record
$sql = "DELETE FROM product WHERE id='$id'";

if ($conn->query($sql) === TRUE) {



  echo '<script> 
 
  Swal.fire({
  position: "center",
  icon: "success",
  title: "Product Successfully Delete",
  showConfirmButton: false,
  timer: 1500
})
 
 

  </script>';
  echo '  <meta http-equiv="refresh" content="2; URL=product.php" />';
 
} else {
 
}

$uid = $_SESSION['id'];
$fullname = $_SESSION['fullname'];
$activity = ' Deleted  '.$product.' Product ';
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
 if(isset($_POST['update_product']))
  {


$id = $_POST['id'];
$product_name = $_POST['product_name'];
$description = $_POST['description'];
$price = $_POST['price'];
$category = $_POST['category'];
$stock = $_POST['stock'];
$image = $_POST['image'];
$img = $_POST['img'];




  $location = "mobile-app/product/";
  $file_new_name = date("dmy") . time() . $_FILES["file"]["name"]; // New and unique name of uploaded file
    $file_name = $_FILES["file"]["name"]; // Get uploaded file name
    $file_temp = $_FILES["file"]["tmp_name"]; // Get uploaded file temp
    $file_size = $_FILES["file"]["size"]; // Get uploaded file size


    if($file_name == ''){

      $file_name = $img;


    }

 
$sql = "UPDATE product SET product_name ='$product_name', description='$description', price='$price', category='$category', stock='$stock', image='$file_name' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {

  move_uploaded_file($file_temp, $location . $file_name);

  echo '<script> 
 
  Swal.fire({
  position: "center",
  icon: "success",
  title: "Product Successfully Updated",
  showConfirmButton: false,
  timer: 1500
})
 
  </script>';
  echo '  <meta http-equiv="refresh" content="2; URL=product.php" />';

} else {
  echo "Error updating record: " . $conn->error;
}

$uid = $_SESSION['id'];
$fullname = $_SESSION['fullname'];
$activity = ' Updated the   '.$product_name.' Product ';
$sql = "INSERT INTO logs (user_id, fullname, activity, month, day, year, time)
VALUES ('$uid', '$fullname', '$activity', '$month', '$day', '$year', '$time')";

if ($conn->query($sql) === TRUE) {
 // echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}



 }
?>



    <!-- add Modal -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
   
      <div class="modal-body">
     <h3><strong class="text-bold">Add New Product </strong> </h3>  
     <hr>
         <form   method="post" action="product.php" enctype="multipart/form-data">
          
   



                <div class="form-group">
                    <label for="dd">Product Image</label>
                    <input type="file" class="form-control" id="dd" required  name="file"    >
                  </div>
                

                  <div class="form-group">
                    <label for="dd">Product Name</label>
                    <input type="text" class="form-control" id="dd" required name="product_name"    >
                  </div>


                  <div class="form-group">
                    <label for="dd">Price</label>
                    <input type="number" class="form-control" id="dd" required name="price" min="1"    >
                  </div>


                  <div class="form-group">
                    <label for="dd">Stock</label>
                    <input type="number" class="form-control" id="dd" required name="stock" min="1"     >
                  </div>

 

                
              <div class="form-group ">
                  <label for="a"><code>Category</code></label>
                  <select class="form-control" name="category" id="a">
               <?php echo ' '.$cat.' '?>
                  </select>
                </div> 



                    
                       
                    <div class="form-group">
                        <label>Description</label>
                        <textarea required name="description" class="form-control" rows="3" placeholder="Enter Description ..."></textarea>
                      </div>
                    
                   


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="add_product" class="btn btn-success"><i class="fas fa-plus"></i> Add</button>
      </div>
      </form>
    </div>
  </div>
</div>


<?php
 if(isset($_POST['add_product']))
  {


$product_name = $_POST['product_name'];
$description = $_POST['description'];
$price = $_POST['price'];
$category = $_POST['category'];
$stock = $_POST['stock'];
$image = $_POST['image'];
$img = $_POST['img'];




  $location = "mobile-app/product/";
  $file_new_name = date("dmy") . time() . $_FILES["file"]["name"]; // New and unique name of uploaded file
    $file_name = $_FILES["file"]["name"]; // Get uploaded file name
    $file_temp = $_FILES["file"]["tmp_name"]; // Get uploaded file temp
    $file_size = $_FILES["file"]["size"]; // Get uploaded file size

    $sql = "INSERT INTO product (product_name, description, price, category, stock, image)
VALUES ('$product_name', '$description', '$price', '$category', '$stock', '$file_name' )";

if ($conn->query($sql) === TRUE) {
  

    move_uploaded_file($file_temp, $location . $file_name);

  echo '<script> 
 
  Swal.fire({
  position: "center",
  icon: "success",
  title: "Product Successfully Added",
  showConfirmButton: false,
  timer: 1500
})
 
  </script>';
  echo '  <meta http-equiv="refresh" content="2; URL=product.php" />';


} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


$uid = $_SESSION['id'];
$fullname = $_SESSION['fullname'];
$activity = ' Added New  '.$product_name.' Product ';
$sql = "INSERT INTO logs (user_id, fullname, activity, month, day, year, time)
VALUES ('$uid', '$fullname', '$activity', '$month', '$day', '$year', '$time')";

if ($conn->query($sql) === TRUE) {
 // echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}




} ?>
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
