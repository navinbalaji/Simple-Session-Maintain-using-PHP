<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Shopping Cart</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="assets/css/custom.css"/>		
	</head>

	<body>
		
		<nav class="navbar">
			<div class="container">
				<a class="navbar-brand" href="#">Your online store</a>
				<a class="navbar-brand" href="#">Welcome:<?php echo($_SESSION['mail']);?></a>
				<div class="navbar-right">
					<div class="container minicart">
						<a class="navbar-brand" href="logout.php">Logout</a>
					</div>
				</div>
			</div>
		</nav>
		
		<div class="container-fluid breadcrumbBox text-center">
			<ol class="breadcrumb">
				<li><a href="#">Review</a></li>
				<li class="active"><a href="#">Order</a></li>
				<li><a href="#">Payment</a></li>
			</ol>
		</div>
		
		<div class="container text-center">

			<div class="col-md-5 col-sm-12">
				<div class="bigcart"></div>
				<h1>Your shopping cart</h1>
			</div>
			
			<div class="col-md-7 col-sm-12 text-left">
				<ul>
					<li class="row list-inline columnCaptions">
						<span>QTY</span>
						<span>ITEM</span>
						<span>Price</span>
					</li>
					<li class="row">
						<span class="quantity">1</span>
						<span class="itemName">Dosa</span>
						<span class="popbtn"><a class="arrow"></a></span>
						<span class="price">Rs:50.00</span>
					</li>
					<li class="row">
						<span class="quantity">10</span>
						<span class="itemName">IDLY</span>
						<span class="popbtn"><a class="arrow"></a></span>
						<span class="price">RS:10.00</span>
					</li>
					<li class="row">
						<span class="quantity">2</span>
						<span class="itemName">poori</span>
						<span class="popbtn"><a class="arrow"></a></span>
						<span class="price">Rs:10</span>				
					</li>
					<li class="row">
						<span class="quantity">1</span>
						<span class="itemName">cooldrinks</span>
						<span class="popbtn"><a class="arrow"></a></span>
						<span class="price">Rs:60.00</span>
					</li>
					<li class="row">
						<span class="quantity">1</span>
						<span class="itemName">Burger</span>
						<span class="popbtn" data-parent="#asd" data-toggle="collapse" data-target="#demo"><a class="arrow"></a></span>
						<span class="price">RS:45.00</span>				
					</li>
					<li class="row totals">
						<span class="itemName">Total:</span>
						<span class="price">$1375.00</span>
						<span class="order"> <a class="text-center">ORDER</a></span>
					</li>
				</ul>
			</div>

		</div>
		<div id="popover" style="display: none">
			<a href="#"><span class="glyphicon glyphicon-pencil"></span></a>
			<a href="#"><span class="glyphicon glyphicon-remove"></span></a>
		</div>
		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> 
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/customjs.js"></script>
<?
session_unset();
session_destroy();
header("location:home.php");
exit();
?>
	</body>
</html>