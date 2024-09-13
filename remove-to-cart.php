<?php
 include 'database.php';
 

 $product_id=$_POST['product_id'];

 $price=$_POST['price'];
 $image=$_POST['image'];





$sql = "DELETE  FROM cart where product_id = '$product_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {


    
  }
} else {

  
 
}





?>


 
                         