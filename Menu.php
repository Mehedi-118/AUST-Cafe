<?php include "./header.php" ?>

<section class="pricing-table">
	<div class="container">
		<div class="row">
			<h1 class="text-c"><span class="r-heading">Here our's Combo Pacages </span><span class="r-heading1">You Can try it</span> </h1>


			<?php
			include "./dbConfig.php";
			$sql = "SELECT * from package inner join packagedetails on package.Id=packagedetails.PackageId order by PackageId asc;";
			$result = mysqli_query($mysqli, $sql);
			if (mysqli_num_rows($result) > 0) {
				$prevPkgId = 0;
				while ($row = mysqli_fetch_assoc($result)) {
					$PackageId = $row['PackageId'];
					$prevPkgId = $PackageId;
					if ($PackageId === $prevPkgId) {

						echo "
								<form method='GET' action='AddtoCart.php?>'>
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
						while ($itemRow = mysqli_fetch_assoc($result)) {
							if ($itemRow['PackageId'] === $PackageId) {

								echo "<li>{$itemRow['ItemName']}</li>";
							} else {
								break;
							}
						}
						echo
						"</ul>
											<button type='submit' class='order-btn' id='package1'>Order</a></button>	
										</div>
									</div>
								</form>";
					} else {
						$prevPkgId = $PackageId;
					}
				}
			} else {
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

		</div>
	</div>
</section>


<section class="footer">
	<div class="container">
		<div class="row">
			<p>© 2018 CAFE. All Rights Reserved. Vallagena BD group</p>

		</div>

	</div>
</section>


<?php include "./footer.php"; ?>

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

				if($userName=="admin@cafe.com")
				{
					
					echo "<script>
						
						var addItem = document.createElement('a');
						addItem.href = 'AddPackage.php';
						addItem.textContent = 'Add new Package';

						var addPkgLi = document.createElement('li');
						addPkgLi.appendChild(addItem);

						var myList = document.getElementById('myList');
						myList.appendChild(addPkgLi);
							
						
					</script>";
				}
} else {
	// echo '<div>sami </div>';
}
?>
</body>

</html>