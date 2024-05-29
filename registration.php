<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registration style.css">
   </head>
<body>
  <div class="wrapper">
    <h2>Registration</h2>
    <form action="#" method="POST" class="login-email">
      <div class="input-box">
        <input type="text" placeholder="Enter your name" name="Fullname" id="Fullname" required>
      </div>
      <div class="input-box">
        <input type="text" placeholder="Enter your email" name="Email" id="Email" required>
      </div>
	   <div class="input-box">
	  <input type="text" placeholder="Enter username" name="Username" id="Username" required>
	  </div>

		<div class="text">
	  <select id="Gender" name="Gender"  required>
			<option value="" disabled selected color="#FF0000">Select Gender</option>
			<option value="" name="Gender" value="f">Female</option>
			<option value="" name="Gender" value="m">Male</option>
			<option value="" name="Gender" value="o">Other</option>
			</select>
	  <div class="text1">
	  <select name="City" id="City"  required>
			<option value="none" disabled selected color="#FF0000">Select City</option>
			<option value="ahmedabad">Ahmedabad</option>
			<option value="surat">Surat</option>
			<option value="baroda">Baroda</option>
			<option value="rajkot">Rajkot</option>
			</select>
	</div>
      <div class="input-box">
        <input type="Password" placeholder="Create password" name="Password" required>
      </div>
      <div class="input-box">
        <input type="Password" placeholder="Confirm password" required>
      </div>
     
      
        <input type="submit" name="submit" value="Register Now">
      
      <div class="text">
        <h3>Already have an account? <a href="landing page.html" >Login now</a></h3>
      </div>
	  
    </form>
  </div>
  
</body>
</html>


<?php
		if(isset($_POST['submit']))
		{
		
			$Fullname = $_POST['Fullname'];
			$Email = $_POST['Email'];
			$Username = $_POST['Username'];
			$Gender = $_POST['Gender'];
			$City = $_POST['City'];
			$Password = $_POST['Password'];
		
			$cn = mysqli_connect("localhost","root","","appointapp");

			$q="INSERT INTO registration VALUES ('$Fullname', '$Email', '$Username', '$Gender', '$City', '$Password')";
			echo ($q);
			mysqli_query($cn,$q) or die("Query execution error" . mysqli_error($cn));
		}
		
?>
