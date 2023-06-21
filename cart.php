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
	<?php include "./header.php"; ?>
	<?php include "./dbConfig.php"; ?>

	
	<section class="cart">
		<?php
			if (isset($_SESSION['userEmail'])) {


				$userName = $_SESSION['userEmail'];
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
			} else {
				echo'<div class="alert alert-info" role="alert" style="margin-bottom:30%">
						You have to Log in first!
					 </div>';
					header("Refresh:3; url=login.php");
			}

			?>
		<div class="container">



		<?php

			if ($_SERVER['REQUEST_METHOD'] === 'GET')
			{
				$pkgId=$_GET['packageId'];
				$pkgName=$_GET['packageId'];
				$sql = "INSERT INTO purchase (UserId, PackageId)
       					VALUES ((SELECT Id FROM user WHERE Email = '{$_SESSION['userEmail']}'),$pkgId)";
				$result = mysqli_query($mysqli, $sql);

			}
		?>

			<?php

			$actvUser = '';
			if (isset($_SESSION['userEmail'])) {
				$actvUser = $_SESSION['userEmail'];
			}
			$sql = "select count(*) QTY, u.Name,u.Email,pkg.Name,pkg.Price,pd.ItemName from purchase p inner join user u on p.UserId=u.Id inner JOIN package pkg on pkg.Id=p.PackageId inner join  packagedetails pd on pd.PackageId=p.PackageId where u.Email='{$actvUser}' GROUP by  u.Name,u.Email,pkg.Name,pkg.Price,pd.ItemName ORDER by p.PackageId ASC;";
			$result = mysqli_query($mysqli, $sql);
			if (mysqli_num_rows($result) > 0) {
				echo "<h1>Order Details</h1>";
				$prevPkgName = 0;
				$subtotal=0;
				while ($row = mysqli_fetch_assoc($result)) {

					$PackageName = $row['Name'];
					$prevPkgName = $PackageName;
					$totalPrice=$row['Price']*$row['QTY'];
					$subtotal+=$totalPrice;
					if ($PackageName === $prevPkgName) {
						echo "
									
								<table class='table'>
									<thead>
										<tr>
											<th>Package Name</th>
											<th>Item</th>
											<th>Price</th>
											<th>Quantity</th>
											<th>Total</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>{$row['Name']}</td>
											
											<td style='padding:0'>
												<table class='table m-0 p-0'>
													";
													while ($itemRow = mysqli_fetch_assoc($result)) {

														if ($itemRow['Name'] === $PackageName) {

															echo "	
																	<tr>
																		<td>{$itemRow['ItemName']}</td>
																	</tr>
																	";
														} else {
															break;
														}
													}
								echo "
												</table>
											</td>
											<td>
												{$row['Price']}<sup>৳</sup>
											</td>
											<td>
												{$row['QTY']}
											</td>
											<td>
												{$totalPrice} <sup>৳</sup>
											</td>
									</tbody>";
					} else {
						$prevPkgId = $PackageId;
					}
				}
				echo "
									<tfoot>
										<tr>
											<td colspan='4'>Subtotal</td>
											<td>{$subtotal} <sup>৳</sup></td>
										</tr>
										
									</tfoot>
								</table>
									<button class='btn btn-primary' style='margin-bottom:20%'>Checkout</button>
				
				";
			}

			?>
		</div>


	</section>

	<!--DashBroad Section Start-->
	<section class="footer">
		<div class="container">
			<div class="row">
				<p>© All Rights Reserved.</p>

			</div>

		</div>
	</section>

	<?php include "./footer.php"; ?>

	
</body>

</html>