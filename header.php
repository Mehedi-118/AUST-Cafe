<?php
session_start();

					
echo ' 
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>FOOD WHEELS</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lobster&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lobster&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lobster|Pacifico&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
<section style="background-color: black;margin-block: -21px;padding-top: 44px;">
			<h1 style="text-align: center;color: crimson;font-style: oblique;font-family: initial;font-size: 65px;"> FOOD WHEELS</h1>
</section>
<section class="header">
		  <nav class="navbar navbar-default">
			  <div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				  <a class="navbar-brand" href="#"><img src="images/logo1.png" class="logo" style="margin-top: 28px;"></a>	
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav navbar-right" id="myList">
					<li><a href="index.php"> Home</a></li>
					<li><a href="Menu.php">Menu</a></li>
					<li><a href="Cart.php">Cart</a></li>
					<li><a href="location.php">Location</a></li>
					<li><a id="logInBtn" href="login.php"> Login</a></li>

						 
				  </ul>
				</div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
 </section >

<!--Header Section Start-->
<section style="background-color: black;">
    <div class="container">
    
        <!--Header Left-->
        <div class="row">
            <!--Header right-->

            <div class="contact-info ">
                <div class="social-info">
                    <ul class="list-inline">
                        <li><i class="fa fa-facebook"> </i></li>
                        <li><i class="fa fa-twitter"> </i></li>
                        <li><i class="fa fa-linkedin"></i></li>
                    </ul>
                </div>
            </div>
        </div>	
</div>
</section>

';

?>