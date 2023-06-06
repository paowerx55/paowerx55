<!DOCTYPE html>
<html>
<head>
<title>Admin</title>
</head>
<link rel="stylesheet" type="text/css" href="Design.css">
<body>
<img src="title.PNG" align="top">
      
         <form  method = "">
		 <table align="center" class="tbl" id="logintable" >
		   <tr><td>
		   <p align="center"> Log in as Admin<p> <br/>
           <input type="text" class="input" name="UserName" placeholder="Name" required> </br>
            <input type = "password" class = "input" name = "Password" placeholder = "Password" required></br>
            <button name = "btnsignin" type="submit" class="btn">Sign in</button>
         </td></tr></table>    </form>
<?php

include("Connect.php");
if (isset($_POST['btnsignin'])){
 if($_SERVER["REQUEST_METHOD"] == "POST") {

        $db= "project";
  $conn = new mysqli($servername, $username, $password, $db);

      $myusername = mysqli_real_escape_string($conn,$_POST['UserName']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['Password']); 
   

      $sql = "SELECT id FROM adminsacc WHERE AdUser = '$myusername' and AdPass = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
    
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
 }

?>

      </div> 
      
</body>
</html>



