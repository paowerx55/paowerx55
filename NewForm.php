<!DOCTYPE html>
<html>
<head>
<title>Create New Form</title>
<link rel="stylesheet" type="text/css" href="Design.css">
</head>
<body>
<img src="title.PNG" align="top">
<form method="POST"  action="">

<table  width="1300px">
<tr><td><b>Name</b><br/>
<input type = "text" class="input" name = "inputName" placeholder = "First Name First" required autofocus><br>
<b>Age</b><br>
<input type = "text" class = "input" name = "inputAge" placeholder = "Number Only" required></td><td>
<b>Section</b><br>
<input type = "text" class = "input" name = "inputSec" placeholder = "12-CP-4P" required><br>
<b>Vision</b><br>
<input type = "text" class = "input" name = "inputVis" placeholder = "20/20" required></td><td>
<b>Height</b><br>
<input type = "text" class = "input" name = "inputHei" placeholder = "in Centimeters" required>
<b>Weight</b><br>
<input type = "text" class = "input" name = "inputWei" placeholder = "in Kilograms" required></td><td>
<b>BloodPresure </b><br>
<input type = "text" class = "input" name = "inputBP" placeholder = "120/80" required>
<button class="btn" type = "submit" name = "btnsubmit">Submit</button></td></tr>
         </table>
</form>
<?php	
 include("Connect.php");
 session_start();
if (isset($_POST['btnsubmit']))
{	$db= "project";
	$conn = new mysqli($servername, $username, $password, $db);
    $Name   = $_POST['inputName'];
    $Section  = $_POST['inputSec'];
	$Age	= $_POST['inputAge'];
    $Height = $_POST['inputHei'];
    $Weight    = $_POST['inputWei'];
    $Vision    = $_POST['inputVis'];
    $BP    = $_POST['inputBP'];
     $sql = "INSERT INTO studmedinfo (`Name`, `Section`, `Age`, `Height`, `Weight`, `BloodPresure`, `Vision`) VALUES ('$Name', '$Section', '$Age', '$Height', '$Weight', '$BP', '$Vision');";
mysqli_query($conn, $sql);
if(mysqli_query($conn,$sql))
 {
echo "<script>alert('INSERTED SUCCESSFULLY');</script>";
}
Else
 {
 echo  mysqli_error($conn);

 }

 }

?>


</body>
</html>
