

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #f05959;
  color: white;
}
.center 
{
  padding: 20px 0;
  text-align: center;
}

</style>
<title> Landing Page </title>
</head>
<body bgcolor="#e3fffa">
<div>
<div class="topnav">
  <a class="active" href="landing page.html">Home</a>
  <a href="contact us.html">Contact</a>
  <a href="about us.html">About</a>
</div>



	<div class="center">
		<center>
			<h1 style="font-size:80px;color:#4c7e8c;"><b>Welcome To AppointApp</b></h1>
			<h1 style="color:#f05959;"> we make managing appointments easier </h1>
			<h3 style="color:grey;"> Please, log in before booking an appointment </h3>
		</center>

	<form action="connect.html" method="post">
 
  
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="Username" required><br><br>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="Password" required><br><br>

    <button type="submit">Login</button>
	<button type="reset">Cancel</button>
	
	</div>

</form>

<h2 style="text-align:center">don't have an account? register <u><a href = "registration.php">here.</a></u></h2>
	<form method="get" action="registration.html" style="text-align:center">
    
</form> 
</div>

</body
</html>
<?php
error_reporting(0);
$cn=mysqli_connect("localhost","root","") or die("Connection error : " . mysqli_connect_error());

mysqli_select_db($cn,"appointapp") or die("DB selection error");

		if(isset($_POST['Submit']))
		{
		
			$Fullname = $_POST['Fullname'];
			$Email = $_POST['Email'];
			$Username = $_POST['Username'];
			$Gender = $_POST['Gender'];
			$City = $_POST['City'];
			$Password = $_POST['Password'];
		

		$q="INSERT INTO registration (Fullname, Email, Username, Gender, City, Password) VALUES ('$Fullname', '$Email', '$Username', '$Gender', '$City', '$Password')";
		echo ($q);
		mysqli_query($cn,$q) or die("Query execution error" . mysqli_error($cn));
		
		}

		mysqli_close($cn);
?>


