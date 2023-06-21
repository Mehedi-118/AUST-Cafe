
<?php include "./header.php" ?>
	  
  
   <div class="new">
				<!--Header Left-->
			 	<div class="row">
			 		<div class="col-md-12">
					 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.5134358215196!2d90.39578561119939!3d23.729063578596083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8e8ccf2afb5%3A0xfde166eb920114d4!2sInstitute%20of%20Information%20Technology!5e0!3m2!1sen!2sbd!4v1687158296866!5m2!1sen!2sbd" width="100%" height="600px" style="border:0;" allowfullscreen="true" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

			 			
			 		</div>
			 	</div>	

	
  </div>
  <?php include "./footer.php";
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