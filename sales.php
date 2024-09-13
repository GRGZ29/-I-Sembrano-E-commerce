<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sales Report| Sembrano Store</title>
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
 
  <!-- Favicon -->
  <link rel="icon" href="logo.png">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<!-- Logo for printing -->
  
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
          <span class="d-none d-md-inline"><?php echo $_SESSION['fullname']; ?></span>
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
  <!-- Sidebar -->
<aside class="main-sidebar sidebar-light-teal elevation-4">
  <!-- Brand Logo -->
  <a href="index.php" class="brand-link">
    <img src="logo.png" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-bold">Sembrano Store</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav text-bold  nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->

        <li class="nav-item">
          <a href="index.php" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Dashboard</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="user.php" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>Registered Users</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="order.php" class="nav-link">
            <i class="nav-icon fas fa-dolly"></i>
            <p>Manage Orders</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="payment.php" class="nav-link">
            <i class="nav-icon fas fa-money-check-dollar"></i>
            <p>Payments</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="product.php" class="nav-link">
            <i class="nav-icon fas fa-boxes"></i>
            <p>Manage Products</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="category.php" class="nav-link">
            <i class="nav-icon fas fa-box-open"></i>
            <p>Manage Categories</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="staff.php" class="nav-link">
            <i class="nav-icon fas fa-address-card"></i>
            <p>Store Staff</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="admin.php" class="nav-link">
            <i class="nav-icon fas fa-user-cog"></i>
            <p>Administrator</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="logs.php" class="nav-link">
            <i class="nav-icon fas fa-history"></i>
            <p>Audit Trail</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="sales.php" class="nav-link active">
            <i class="nav-icon fas fa-chart-bar"></i>
            <p>Sales Report</p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
<!-- /.main-sidebar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Sales</h1>
          </div>
          <!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Sales</li>
            </ol>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    
    <div class="content">
      <div class="container-fluid">
        <h2>Sales Report</h2>
        <div class="search-container">
          <!-- Your search form goes here -->
        </div>
        <div class="dataTables_length" id="example1_length">
         
            </select>
           
          </label>
        </div>
        <table id="example1" class="table table-hover table-bordered table-striped">
          <thead>
            <tr>
              <th>Order #</th>
               <th>Buyer Name</th> 
              <th>Product Name</th>
              <th>category</th>
              <th>Purchase Date</th>
              <th>Total Amount</th>
                   

            

            </tr>
          </thead>

          <tbody>
            <!-- PHP code for fetching data -->
            <?php
            include "database.php"; // Include your database connection code

            $sql = "SELECT 
    subquery.product_name, 
    subquery.category, 
    subquery.payment_date, 
    subquery.order_number,
    p.total,
    u.fullname
FROM 
    (
        SELECT 
            o1.product_name, 
            p.category, 
            CONCAT(o1.`month`, '-', o1.`day`, '-', o1.`year`) AS payment_date, 
            o1.order_number 
        FROM 
            orders o1 
        JOIN 
            product p ON o1.product_name = p.product_name 
        WHERE 
            o1.id = (
                SELECT 
                    MAX(id) 
                FROM 
                    orders o2 
                WHERE 
                    o1.product_name = o2.product_name
            ) 
        UNION 
        SELECT 
            o3.product_name, 
            p.category, 
            CONCAT(o3.`month`, '-', o3.`day`, '-', o3.`year`) AS payment_date, 
            o3.order_number 
        FROM 
            orders o3 
        JOIN 
            product p ON o3.product_name = p.product_name 
        WHERE 
            o3.id = (
                SELECT 
                    MIN(id) 
                FROM 
                    orders o4 
                WHERE 
                    o3.product_name = o4.product_name
            )
    ) AS subquery
JOIN 
    payment p ON subquery.order_number = p.order_number
JOIN
    user u ON p.user_id = u.id
ORDER BY 
    subquery.product_name, 
    subquery.payment_date DESC";


            if(isset($_GET['search'])) {
              $search = $_GET['search'];
              $sql .= " WHERE `product_name` LIKE '%$search%'";
            }

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                
                echo "<td>".$row['order_number']."</td>";
                echo "<td>".$row['fullname']."</td>";
                echo "<td>".$row['product_name']."</td>";
                echo "<td>".$row['category']."</td>"; 
                echo "<td>".$row['payment_date']."</td>";
                echo "<td>".$row['total']."</td>";
                



                echo "</tr>";
              }
            } else {
              echo "<tr><td colspan='12'>No products found</td></tr>";
            }
            $conn->close();
            ?>
          </tbody>
        </table>
      </div>
      <!-- /.container-fluid -->
    </div>    
    </div>
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
<!-- JavaScript Libraries -->
<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="plugins/chart.js/Chart.min.js"></script>
<script src="plugins/sparklines/sparkline.js"></script>
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="dist/js/adminlte.js"></script>
<script src="dist/js/demo.js"></script>
<script src="dist/js/pages/dashboard.js"></script>
<!-- DataTables -->
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
  $(document).ready(function() {
    $('#example1').DataTable({
      dom: 'Blfrtip',
      lengthMenu: [ [10,25, 1000,2000,3000,4000], [10,25, 1000,2000,3000,4000] ], // Show options for 25 and 1000 entries
      buttons: [
        {
          extend: 'excelHtml5',
          exportOptions: {
            columns: ':visible'
          }
        },
        {
          extend: 'pdfHtml5',
          exportOptions: {
            columns: ':visible'
          }
        },
        {
          extend: 'print',
          exportOptions: {
            columns: ':visible'
          }
        },
        'colvis'
      ]
    });
  });
</script>
</body>
</html>
