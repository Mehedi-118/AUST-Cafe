<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Menu</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lobster&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lobster|Pacifico&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
<body>




	<?php include "./header.php" ?>
	<section class="pricing-table">
			<div class="container">
				<div class="row">
					<h1 class="text-c"><span class="r-heading">Here our's Combo Pacages </span><span class="r-heading1">You Can try it</span> </h1>
					<?php 
						if(isset($_GET['packageId']) && isset($_GET['packageName'])) {
							$packageId=$_GET['packageId'];
							$packageName=$_GET['packageName'];
							myFunction($packageId,$packageName);
						}
						
						function myFunction($pkgId,$pkgName) {
							if(isset($_SESSION['userEmail']))
							{
								
								echo "Function called successfully ".$_SESSION['userEmail']. ' ';
								// header("Location:cart.php");
					
							}
							else
							{
								echo'<div class="alert alert-info" role="alert">
										You have to Log in first!
									</div>';
								 header("Refresh:3; url=login.php");
							}
						}
					?>
					

					<?php
					include "./dbConfig.php";
					$sql = "SELECT * from package inner join packagedetails on package.Id=packagedetails.PackageId order by PackageId asc;";
					$result = mysqli_query($mysqli, $sql);
					if (mysqli_num_rows($result) > 0) 
					{
						$prevPkgId=0;
						while ($row = mysqli_fetch_assoc($result))
						{
							$PackageId=$row['PackageId'];
							$prevPkgId=$PackageId;
							if($PackageId===$prevPkgId)
							{

								echo "
								<form method='GET' action='<?php echo htmlspecialchars($_SERVER[PHP_SELF]); ?>'>
									<div class='col-md-4 pricing-details'>
										<div class='pricing-border'>
											<div class='pricing-amount'>
												<h1><sup>৳</sup>{$row['Price']}</h1>
												<p>It's New</p>
											</div>
											<input type='hidden' name='packageId' value='{$row['PackageId']}' />
											<input type='hidden' name='packageName' value='{$row['Name']}' />
											<h2>{$row['Name']}</h2>
											<ul>";
												while ($itemRow = mysqli_fetch_assoc($result)) 
												{
													if($itemRow['PackageId']===$PackageId)
													{
	
														echo "<li>{$itemRow['ItemName']}</li>";
													}
													else
													{
														break;
													}
												}
												echo 
											"</ul>
											<button type='submit' class='order-btn' id='package1'>Order</a></button>	
										</div>
									</div>
								</form>";
							}
							else{
								$prevPkgId=$PackageId;
							}

						}

					}
					else
					{
						echo "  <div class='col-md-4 pricing-details'>
									<div class='pricing-border'>
										<div class='pricing-amount'>
											
										</div>
										
										<h2> No Package Found</h2>
										<ul>
											
										</ul>
										<button type='submit' class='order-btn' id='package1' disable>---------</a></button>	
									</div>
								</div>";
					}
					
					?>

						<!-- <div class="col-md-4 pricing-box pricing-details">
							<div class="pricing-border">
								<div class="pricing-amount">
									<h1><sup>৳</sup>499</h1>
									<p>It's New</p>
								</div>
								<h2>Combo 1</h2>
									<ul>
										<li>Thai Clear/Corn Soup</li>
										<li>Wonthon</li>
										<li>Wedges</li>
										<li>Pasta Salad</li>
										<li>Steam Rice</li>
										<li>Thai Rice</li>
										<li>Chicken Massala</li>
										<li>Thai Noodles</li>
										<li>Ice Cream</li>
									</ul>
									<button type="submit" name="combo1" class="order-btn" id="package1">Order</a></button>	
							</div>
						</div>

						<div class="col-md-4 pricing-details">
							<div class="pricing-border">
								<div class="pricing-amount">
									<h1><sup>৳</sup>999</h1>
									<p>It's Hot</p>
								</div>
								<h2>Combo 2</h2>

									<ul>
										<li>Chicken Pasta-1</li>
										<li>Mexican Hot Pizza - 6 inc</li>
										<li>Chicken/Beef Burger - 1pc</li>
										<li>pasta Salad</li>
										<li>Thai soup</li>
										<li>Dosa</li>
										<li>Special Apple Juice</li>
										<li>Ice Cream</li>
										<li>Pepsi/Coca Cola/Dew</li>
									</ul>
									<button type="submit" name="combo2" class="order-btn"id="package2">Order</a></button>
							</div>
						</div>

						<div class="col-md-4 pricing-details">
							<div class="pricing-border">
								<div class="pricing-amount">
									<h1><sup>৳</sup>1550</h1>
									<p>It's Amazing</p>
								</div>
								<h2>Combo 3</h2>

									<ul>
										<li>T-Bone Steak</li>
										<li>BBQ Half Chicken</li>
										<li>Mexican Half Chicken</li>
										<li>Rib eye Steak</li>
										<li>Meat Supreme Pizza</li>
										<li>Pepperoni Pizza</li>
										<li>Red valvet Cake</li>
										<li>Ice Cream</li>
										<li>Pepsi/Coca Cola/Dew</li>
									</ul>
									<button type="submit" name="combo3" class="order-btn" id="package3">Order</a></button>

								
							</div>
						</div> -->
					
				</div>
			</div>
		</section>


		<section class="footer">
			<div class= "container">
				<div class="row">
					<p>© 2018  CAFE. All Rights Reserved. Vallagena BD group</p>
					
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


		<script>
			setTimeout(function() {
				$('.alert').fadeOut('fast');
			},3000);
		</script>
	</body>
</html>