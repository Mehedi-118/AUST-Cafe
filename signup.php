<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
<?php
	if ($_SERVER['REQUEST_METHOD'] === 'POST'){

		$servername   = "localhost";
		$database = "database";
		$username = "root";
		$dbName="food";
		$mysqli = mysqli_connect($servername,$username,"",$dbName);
		if ($mysqli->connect_error) {
			die("Connection failed: " . $mysqli->connect_error);
		}
		else {
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
						
						 if($row["Email"]===$email)
						 {
							$message ="This Email already exist try another one";
							$flag=1;
						 }
					}
					if($flag==0)
					{
						echo "insid11";
						$stmt = "INSERT INTO `user`(`Name`, `Email`, `Password`) VALUES ('$firstname','$email','$password')";
						if (mysqli_query($mysqli, $stmt))
                        {

                            header("Location: index.php ");
                            exit();
                        }
					}
				} 
				else {
                    $stmt = "INSERT INTO `user`(`Name`, `Email`, `Password`)VALUES('$firstname','$email','$password')";
                    if (mysqli_query($mysqli, $stmt))
                    {

                        header("Location: index.php ");
                        exit();
                    }
				}

	
			}	
			
			
		}
		// Close connection
		$mysqli->close();
	}
	?>
    <script> var message = "<?php $message; ?>";
    if(message!="")

        alert(message);
</script>
</body>
</html>