<?php
// database connection "host","username","password","databasename"
$con=mysqli_connect("localhost","root","","chimuly");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security
$name = mysqli_real_escape_string($con, $_POST['name']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$phone = mysqli_real_escape_string($con, $_POST['phone']);
$message = mysqli_real_escape_string($con, $_POST['message']);


$sql="INSERT INTO contact(name,email,phone,message)
VALUES ('$name', '$email', '$phone', '$message')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "1 record added";
//header("location: insert_products.php");
mysqli_close($con);
?>