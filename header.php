<?php
session_start();

echo ' 
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

'

?>