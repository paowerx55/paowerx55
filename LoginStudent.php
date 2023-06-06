<!DOCTYPE html>
<html>
<head>
<title>Admin</title>
</head>
<link rel="stylesheet" type="text/css" href="Design.css">
<body>
<img src="title.PNG" align="top">
      
         <form  method = "POST">
     <table align="center" class="tbl" id="logintable" >
       <tr><td>
       <p align="center"> Log in as Admin<p> <br/>
           <input type="text" class="input" name="UserName" placeholder="Name" required> </br>
            <input type = "password" class = "input" name = "Password" placeholder = "Password" required></br>
            <button name = "btnsignin" type="submit" class="btn">Sign in</button>
         </td></tr></table>
<?php
include("CreateDB.php");
include("Connect.php");
if (isset($_POST['btnsignin'])){

   $db= "project";
  $conn = new mysqli($servername, $username, $password, $db);
      $username = mysqli_real_escape_string($conn,$_POST['UserName']);
      $password = mysqli_real_escape_string($conn,$_POST['Password']);  
      $sql = "SELECT * FROM `studentacc` WHERE `StudUser` LIKE '$username' AND `StudPass` LIKE '$password'";
        if ($conn->query($sql) == TRUE) {
         header("location: HomepageStudent.php");
        
      }else {
       echo '<script lang="javascript">
alert ("Invalid Username and Password");
</script>';
echo  mysqli_error($conn);
      
   }
}

?>
     </form>
      </div> 
      
</body>
</html>



