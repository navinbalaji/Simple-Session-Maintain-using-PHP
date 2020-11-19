<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shop";
$fname=$_POST['first_name'];
$lname=$_POST['last_name'];
$email=$_POST['Email'];
$gen=$_POST['gender'];
$addr=$_POST['Address'];
$pin=$_POST['pincode'];
$phnum=$_POST['phnumber'];
$pass=$_POST['password'];
$cpass=$_POST['confirm_password'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else
{
    $sql = "INSERT INTO users(firstname,lastname,email,gender,address,pincode,phonenumber,password,conformpassword) VALUES ('$fname','$lname','$email','$gen','$addr','$pin','$phnum','$pass','$cpass')";

          if (mysqli_query($conn, $sql)) {
           echo "<script> alert('User Registration succesful')</script>";
           echo"<script>window.location='index.php'</script>";
          }else {
         echo "Error: " . $sql . "<br>" . mysqli_error($conn);
             }
}
mysqli_close($conn);
?>
