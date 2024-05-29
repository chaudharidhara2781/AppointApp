<php
   include("connect.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['Username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['Password']); 
      
      $sql = "SELECT registration FROM apoointapp WHERE Username = '$Username' and Password = '$Password'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $Username and $Password, table row must be 1 row
		
      if($count == 1) {
         session_register("Username");
         $_SESSION['login_user'] = $Username;
         
         header("location: landing page.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>