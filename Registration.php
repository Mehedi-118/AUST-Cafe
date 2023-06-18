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
		</style>

	</head>
	<body>

	
	<div class="row">
		<div class="col-md-6 mx-auto">
		<div class="card mx-auto">
        <h2 class="mb-4">Registration Form</h2>
		<form  method="POST" action="signup.php">

			<div class="card-body">
				<div class="row">
					<div class="col-md-3">
						<label for="name">Name</label>
					</div>
					<div class="col-md-9">
						<input type ="text" name="Name" placeholder="Name" required>
					</div>
	
				</div>
				<div class="row">
					<div class="col-md-3">
						<label for="name">Email</label>
					</div>
					<div class="col-md-9">
						<input type ="text" name="Email" placeholder="Email" required>
					</div>
	
				</div>
				<div class="row">
					<div class="col-md-3">
						<label for="name">Password</label>
					</div>
					<div class="col-md-9">
						<input type ="text" name="Password" placeholder="Password"required>
					</div>
	
				</div>
				<div class="row">
					<div class="col-md-3">
						<label for="name">Confirm Password</label>
					</div>
					<div class="col-md-9">
						<input type ="text" name="ConfirmPassword" placeholder="Confirm Password"required>
					</div>
	
				</div>
				<div class="row ">
					<div class="col-md-3 mx-auto">
	
						<input type="submit" value="Sign Up" class="btn btn-primary  mx-auto"	>
					</div>
				</div>
		
				
			</div>


		</form>
    </div>
		</div>
	</div>
	
	</body>
		
</html>