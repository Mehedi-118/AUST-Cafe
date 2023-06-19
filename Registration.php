<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/rstyle.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet"> 
		<link href="https://fonts.googleapis.com/css?family=Chewy" rel="stylesheet">
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		
		<title>Sign Up</title>

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
        <h2 class="mb-4 text-center">Registration Form</h2>


		<?php
	if ($_SERVER['REQUEST_METHOD'] === 'POST'){

			include "./dbConfig.php";
			
			$message = "";
			$flag =0;

			$firstname = $_POST['Name'];
			$email = $_POST['Email'];
			$password = $_POST['Password'];
            $conpassword = $_POST['ConfirmPassword'];
            if($password==$conpassword)
			{
				// Perform a SELECT query
				$sql = "SELECT * FROM user";
				$result = mysqli_query($mysqli, $sql);
                if (mysqli_num_rows($result) > 0) 
				{
					// Iterate over the rows and display the data
					while ($row = mysqli_fetch_assoc($result)) 
                    {
						
						if($row["Email"]==$email)
						{
							$message ="This Email already exist try another one";
							$flag=1;
							break;
						 }
					}
					if($flag==0)
					{
						$stmt = "INSERT INTO `user`(`Name`, `Email`, `Password`) VALUES ('$firstname','$email','$password')";
						if (mysqli_query($mysqli, $stmt))
                        {
							
                            header("Location: index.php ");
                            exit();
                        }
					}
				} 
				else 
				{
                    $stmt = "INSERT INTO `user`(`Name`, `Email`, `Password`)VALUES('$firstname','$email','$password')";
                    if (mysqli_query($mysqli, $stmt))
                    {
                        header("Location: index.php ");
                        exit();
                    }
				}
				if($flag==1)
				{
					echo '
					
					<div class="alert alert-danger" role="alert">
						This email already exist!
					</div>
					';
					header("Refresh:2; url=Registration.php");
				}

	
			}	
			
			
		
		$mysqli->close();
	}
	?>

		<form  method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

			<div class="card-body">
				<div class="row">
					<div class="col-md-3">
						<label for="name">Name</label>
					</div>
					<div class="col-md-9">
						<input type ="text" name="Name" placeholder="Name" class="form-control" required>
					</div>
	
				</div>
				<div class="row">
					<div class="col-md-3">
						<label for="name">Email</label>
					</div>
					<div class="col-md-9">
						<input type ="text" name="Email" placeholder="Email"class="form-control" required>
					</div>
	
				</div>
				<div class="row">
					<div class="col-md-3">
						<label for="name">Password</label>
					</div>
					<div class="col-md-9">
						<input type ="Password" name="Password" placeholder="Password" class="form-control" required>
					</div>
	
				</div>
				<div class="row">
					<div class="col-md-3">
						<label for="name">Confirm Password</label>
					</div>
					<div class="col-md-9">
						<input type ="Password" name="ConfirmPassword" placeholder="Confirm Password" class="form-control" required>
					</div>
	
				</div>
				<div class="row ">
					<div class="col-md-3 mx-auto">
						<input type="submit" value="Sign Up" class="btn btn-primary  mx-auto"	>
					</div>
				</div>
				<div>

					<a href="index.php" class="float-right">Back to Home</a>
				</div>
		
				
			</div>


		</form>
    </div>
		</div>
	</div>
	
	<?php include "./footer.php";?>
	<script>
		setTimeout(function() {
			$('.alert').fadeOut('fast');
		},2000);
	</script>	</body>
		
</html>