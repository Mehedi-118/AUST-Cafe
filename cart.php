<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Cart</title>
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
		
		
		<?php include "./header.php" ?>
        <section class="cart">
        <div class="container" >
            <h1>Cart</h1>
            <table class="table">
            <thead>
                <tr>
                <th>Item</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Product 1</td>
                    <td>$10</td>
                    <td>2</td>
                    <td>$20</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3">Subtotal</td>
                    <td>$35</td>
                </tr>
                
            </tfoot>
            </table>
    <button class="btn btn-primary" style="margin-bottom:20%">Checkout</button>
  </div>
 

        </section>

        <!--DashBroad Section Start-->
		<section class="footer">
			<div class= "container">
				<div class="row">
					<p>©  All Rights Reserved.</p>
					
				</div>
				
			</div>
		</section>

		<?php include "./footer.php";?>
		
		<?php
			if(isset($_SESSION['userEmail']))
			{
				
				
				$userName=$_SESSION['userEmail'];
				echo
				"<script>
					var btn= document.getElementById('logInBtn');
					
					var loginName='{$userName}';
					console.log(loginName);
					if(loginName!='')
					{
						btn.innerText=loginName;
						btn.style.pointerEvents='none';
						var logoutLink = document.createElement('a');
						logoutLink.href = 'logout.php';
						logoutLink.textContent = 'Log Out';

						var logoutLi = document.createElement('li');
						logoutLi.appendChild(logoutLink);

						var myList = document.getElementById('myList');
						myList.appendChild(logoutLi);
						
					}
				</script>";
			} 
			else
			{
				echo '<div>sami </div>';
			}
			
		?>
    </body>
</html>