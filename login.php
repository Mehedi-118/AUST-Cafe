<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="css/l-style.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet"> 
		<link href="https://fonts.googleapis.com/css?family=Chewy" rel="stylesheet">
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		
		<style>
		
			.card {
				margin-top:20%;
				max-width: 500px;
				padding: 20px;
				border-radius: 20px;
				border:1px solid gray;
				background: #F7FFE5;
			    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;

			}
			.card-body input{
				margin-bottom: 5px;
			}
		</style>
	</head>

	<body>	
	<div class="row">
		<div class="col-md-6 mx-auto">
		<div class="card mx-auto">
        	<h2 class="mb-4 text-center">Log in</h2>
				<?php 
				session_start();
				$flag=0;
				if ($_SERVER['REQUEST_METHOD'] === 'POST')
				{
					include "./dbConfig.php";
					
					$email = $_POST['email'];
					$password = $_POST['pass'];
					$sql = "SELECT * FROM user";
					$result = mysqli_query($mysqli, $sql);
					if (mysqli_num_rows($result) > 0) 
					{
						while ($row = mysqli_fetch_assoc($result)) 
						{
							
							if($row["Email"]===$email && $row["Password"]===$password  )
							{
								$flag=1;
								echo '
									<div class="alert alert-success" role="alert">
										Log in Successful!
									</div>
									';
									
									$_SESSION['userEmail'] =$email;	
									header("Refresh:4; url=index.php");
							}
						}
						if($flag===0)
						{
							echo '
									<div class="alert alert-danger" role="alert">
										Invalid email or password!
									</div>
									';
						}
					}
					else{
						echo '
							<div class="alert alert-info" role="alert">
								No user exist Sign up first!
							</div>
							';
					}
				}
				if($flag===1)
				{
				
					header("Location: index.php ");				
				}
				
				?>
				<div class="card-body">
					<form  method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

						<div class="row">
							<div class="col-md-3">
								<label for="name">Email</label>
							</div>
							<div class="col-md-9">
								<input type="email" name="email" placeholder="Email"class="form-control m-1" required>
							</div>
			
						</div>
						<div class="row">
							<div class="col-md-3">
								<label for="name">Password</label>
							</div>
							<div class="col-md-9">
							<input type="Password" name="pass" placeholder="Password"class="form-control m-1"required>
							</div>
			
						</div>
						<div class="row mx-auto">
							<input type="submit" value="Login" class="btn btn-primary mx-auto">
						</div>
					</form>
					<br>
					<p class="text-center"> Don't have account? <a href="Registration.php">Click Here</a></p>
				</div>

			</div>
		</div>
	</div>
	

	<?php include "./footer.php";
		
	?>
	<script>
		setTimeout(function() {
			$('.alert').fadeOut('fast');
		},1000);
	</script>
	</body>
</html>