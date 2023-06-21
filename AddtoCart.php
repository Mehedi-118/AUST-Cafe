<!-- <!DOCTYPE html>
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
 -->

        <?php
        include "./header.php" ;
        include "./dbConfig.php";
        if ($_SERVER['REQUEST_METHOD'] === 'GET')
        {
            if (isset($_SESSION['userEmail'])) 
            {
    
    
                $userName = $_SESSION['userEmail'];
                $pkgId=$_GET['packageId'];
                $pkgName=$_GET['packageId'];
                $sql = "INSERT INTO purchase (UserId, PackageId)
                        VALUES ((SELECT Id FROM user WHERE Email = '{$_SESSION['userEmail']}'),$pkgId)";
                $result = mysqli_query($mysqli, $sql);
                if($result)
                {
                    echo'<div class="alert alert-success" role="alert" style="margin-bottom:30%">
                            Item Added to cart Successfully!
                        </div>';
                        header("Refresh:4; url=Menu.php");
                }
            } 
            else {
                echo '<div class="alert alert-info" role="alert" style="margin-bottom:30%">
                                You have to Log in first!
                             </div>';
                header("Refresh:3; url=login.php");
            }
            


        }
        ?>
        
	<?php include "./footer.php";?>
	<!-- </body>
</html> -->