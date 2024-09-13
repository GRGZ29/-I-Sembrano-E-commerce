<?php include "database.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Login Page | Sembrano Store</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
 
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-success">
    <div class="card-header text-center">
     <img src="logo.png" width="30%"><br>
      <a href="index.php" class="h1 text-success"><b>Sembrano Store</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to continue.</p>
<?php
if(isset($_REQUEST['login']))
  {
    
  $email=trim($_REQUEST['email']);
  $password=trim($_REQUEST['password']);
 

  $query="select * from admin where email = '$email' and password='$password'";
  
  $login_data=select($query);
  $n=mysqli_num_rows($login_data);
  if($n==1)
  {




    while($data=mysqli_fetch_array($login_data))
    {
    extract($data);
    
    }

     $_SESSION['role']=$role;
    
    
    if($role == 'Admin'){

      $_SESSION['id']=$id;
    $_SESSION['fullname']=$fullname;
 
    $_SESSION['email']=$email;
    $_SESSION['contact']=$contact;
    $_SESSION['login']="yes";

    echo '  <meta http-equiv="refresh" content="3; URL=index.php" />';

         echo'

<p class="text-success">You Successfully Signed in as Administrator. Redirecting...</p>

';



    }


     if($role == 'Staff'){

      $_SESSION['id']=$id;
    $_SESSION['fullname']=$fullname;
 
    $_SESSION['email']=$email;
    $_SESSION['contact']=$contact;
    $_SESSION['login']="staff";

    echo '  <meta http-equiv="refresh" content="3; URL=staff/index.php" />';


     echo'

<p class="text-success">You Successfully Signed in as Staff. Redirecting...</p>

';

    
    }


 
    
 





 

  }
  else
  {
          echo'


<div class="alert alert-danger alert-dismissible">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
<h5><i class="icon fas fa-exclamation-triangle"></i>Invalid!</h5>
Invalid Email and/or Password!
</div>


          ';
  }
  }
       
        ?>
      <form action="login.php" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-success">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="login" class="btn btn-success text-bold btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

 
      <!-- /.social-auth-links -->

      <p class="mb-1">
        
      </p>
      <p class="mb-0">
        
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
