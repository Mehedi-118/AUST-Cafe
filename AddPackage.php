<?php include "./header.php"; ?>
<div class="row">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="col-md-8" style="margin-left: 10%;margin-right: 10%;margin-top:5%">
            <label for="">Pacakge Name</label>
            <input type="text" name="pkgName" required>
        </div>
        <div class="col-md-8" style="margin-left: 10%;margin-right: 10%;">
            <label for="">Pacakge price</label>
            <input type="text" name="pkgPrice" required>
        </div>
        <div class="col-md-8" style="margin-left: 10%;margin-right: 10%;">
            <label for="">Item 1</label>
            <input type="text" name="pkgItem1" required>
        </div>
        <div class="col-md-8" style="margin-left: 10%;margin-right: 10%;">
            <label for="">Item 2</label>
            <input type="text" name="pkgItem2">

        </div>
        <div class="col-md-8" style="margin-left: 10%;margin-right: 10%;">
            <label for="">Item 3</label>
            <input type="text" name="pkgItem3">
        </div>
        <div class="col-md-8" style="margin-left: 10%;margin-right: 10%;">
            <label for="">Item 4</label>
            <input type="text" name="pkgItem4">

        </div>
        <div class="col-md-8" style="margin-left: 10%;margin-right: 10%;">
            <label for="">Item 5</label>
            <input type="text" name="pkgItem5">
        </div>
        <div class="col-md-8" style="margin-left: 10%;margin-right: 10%;">
            <label for="">Item 6</label>
            <input type="text" name="pkgItem6">
        </div>
        <div class="col-md-8" style="margin-left: 10%;margin-right: 10%;">
            <button type='submit' class='order-btn' id='package1'>Add Item</a></button>
        </div>
    </form>
</div>


<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    include "./dbConfig.php";
    $pkgName=$_POST['pkgName'];
    $pkgPrice=$_POST['pkgPrice'];
    $pkgItem1=$_POST['pkgItem1'];
    $pkgItem2=$_POST['pkgItem2'];
    $pkgItem3=$_POST['pkgItem3'];
    $pkgItem4=$_POST['pkgItem4'];
    $pkgItem5=$_POST['pkgItem5'];
    $pkgItem6=$_POST['pkgItem6'];
    $flag=1;
    $stmt = "INSERT INTO `package`(`Name`,`Price`)VALUES('$pkgName','$pkgPrice');";
    if (mysqli_query($mysqli, $stmt))
    {
        $pkgId = "SELECT Id FROM `package` WHERE name=\'$pkgName\';";
        $pkgDetails1="INSERT INTO `packagedetails`(`PackageId`,`ItemName`)VALUES('$pkgId','$pkgItem1');";
        if (mysqli_query($mysqli, $pkgDetails1))
        {
            
        }
        else{
            $flag=0;
        }
        if( $pkgItem2!='' ||  $pkgItem2!=null)
        {
            $pkgDetails2="INSERT INTO `packagedetails`(`PackageId`,`ItemName`)VALUES('$pkgId','$pkgItem2');";
            if (mysqli_query($mysqli, $pkgDetails2))
            {
                
            }
            else{
                $flag=0;
            }
        }
        if( $pkgItem3!='' ||  $pkgItem3!=null)
        {
            $pkgDetails3="INSERT INTO packagedetails(PackageId,ItemName)VALUES('$pkgId','$pkgItem3');";
            if (mysqli_query($mysqli, $pkgDetails3))
            {
                
            }
            else{
                $flag=0;
            }
        }
        if( $pkgItem4!='' ||  $pkgItem4!=null)
        {
            $pkgDetails4="INSERT INTO packagedetails(PackageId,ItemName)VALUES('$pkgId','$pkgItem4');";
            if (mysqli_query($mysqli, $pkgItem4))
            {
                
            } else{
                $flag=0;
            }
        }
        if( $pkgItem5!='' ||  $pkgItem5!=null)
        {
            $pkgDetails5="INSERT INTO packagedetails(PackageId,ItemName)VALUES('$pkgId','$pkgItem5');";
            if (mysqli_query($mysqli, $pkgItem5))
            {
                
            } else{
                $flag=0;
            }

        }
        if( $pkgItem6!='' ||  $pkgItem6!=null)
        {
            
            $pkgDetails6="INSERT INTO packagedetails(PackageId,ItemName)VALUES('$pkgId','$pkgItem6');";
            if (mysqli_query($mysqli, $pkgItem6))
            {
                
            } else{
                $flag=0;
            }
        }
        
        if($flag=0)
        {
            echo '<div class="alert alert-danger" role="alert">
						Could not add item 
					</div>';
        }
        else {
            exit();
        }
        header("Location: Menu.php ");
        exit();

    }
    else {
        echo '<div class="alert alert-danger" role="alert">
						Failed to add Package;
					</div>';
    }
    


}


include "./footer.php";
?>