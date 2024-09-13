<?php

session_start();
 define( 'DOIFD_SERVICE', '');

define("Server","sql309.infinityfree.com");
  define("User","if0_35756578");
  define("Password","IHwDBSf95QJ129");
  define("Database","if0_35756578_avan");
  function iud($query)
  {
    $cid=mysqli_connect(Server,User,Password,Database) or die("connection error");
  $result=mysqli_query($cid,$query);
  $n=mysqli_affected_rows($cid);
  mysqli_close($cid);
  return $n;
  }
  
function select($query)
{
  $cid=mysqli_connect(Server,User,Password,Database) or die("connection error");
  $result=mysqli_query($cid,$query);
  mysqli_close($cid);
  return $result;
}

 


$servername = "sql309.infinityfree.com";
$username = "if0_35756578";
$password = "IHwDBSf95QJ129";
$dbname = "if0_35756578_avan";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}





?>