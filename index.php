<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Home-login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/sign-in/">
<link href="/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <link href="signin.css" rel="stylesheet">
    <<script type="text/javascript">
      function sub() {
        var inputEmail=document.getElementByName("inputEmail").value;
        var inputPassword=document.getElementByName("inputPassword").value;
      }
    </script>
  </head>
  <body class="text-center">
    <form class="form-signin" method="post" action="index.php">
  <img class="mb-4" src="buy.png" alt="" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal">Online Shoping</h1>
  <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
  <label for="inputEmail" class="sr-only">Email address</label>
  <input type="email" name="inputEmail" class="form-control" placeholder="Email address" required autofocus>
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" name="inputPassword" class="form-control" placeholder="Password" required>
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
  </div>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit" onclick="sub()">Sign in</button>
  <a href="Registration.html">Create an Account</a>
  <p class="mt-5 mb-3 text-muted">&copy; 2020-2021</p>
</form>
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shop";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }
if(count($_POST)>0)
{
  $result=mysqli_query($conn,"SELECT * FROM users WHERE email='".$_POST["inputEmail"]."' and Password= '".$_POST["inputPassword"]."'");
  $count=mysqli_num_rows($result);
  if($count==0)
  {
    echo "<script type='text/javascript'> alert('Invalid username or password')</script>";
   echo'<script type="text/javascript">window.location="index.php"</script>';
   }
   else
   {
  echo '<script type="text/javascript">window.location="shop.html"</script>';

  $_SESSION['mail']=$_POST['inputEmail'];
  header("Location:shop.php");
   }
}
mysqli_close($conn);
?>
</body>
</html>
