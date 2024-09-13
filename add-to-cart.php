<?php
 include 'database.php';
 
 $id = $_SESSION['id'];
 $product_id=$_POST['product_id'];
 $product_name=$_POST['product_name'];
 $price=$_POST['price'];
 $image=$_POST['image'];





$sql = "SELECT * FROM cart where product_id = '$product_id' and user_id='$id' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

    $sql2 = "UPDATE cart SET quantity = quantity + 1 WHERE product_id='$product_id' and user_id='$id' ";

if (mysqli_query($conn, $sql2)) {
    
 
} else {
 
} 


    
  }
} else {

    $sql="INSERT INTO `cart` (  `product_id`, `user_id`, `quantity`, `product_name`, `price`, `image`) VALUES ('$product_id', '$id', '1', '$product_name', '$price', '$image')";
if ($conn->query($sql) === TRUE) {
    echo "data inserted";
}
else 
{
    echo "failed";
}
 
}

?>


 
                         