<!DOCTYPE html>
<html>
<head>
<title>Redord List</title>
<link rel="stylesheet" href="Design.css">
<script type="text/javascript">
  function Portal(){
window.location.href="Portal.php";    
  }
  function Logout(){
window.location.href="LoginAdmin.php";    
  }

</script>
<body>
<div align="center" class="divinfo" >
<h1>Medical Records of Cluster 6 Students in <br>Arellano University Jose Rizal High School</h1>
 
<table rules="all" class="tblinfo">
    <th><p>Name</p></th>
    <th><p>Age</p></th>
    <th><p>Section</p></th>
    <th><p>Vision</p></th>
  <th><p>Height</p></th>
  <th><p>Weight</p></th>
  <th><p>BloodPresure</p></th>
<?php
 include("CreateDB.php");
 session_start();
if (isset($_POST['SearchInfo']))
{
     $db= "project";
  $conn = new mysqli($servername, $username, $password, $db);
      $search = mysqli_real_escape_string($conn,$_POST['SearchInfo']);
$sql = "SELECT * FROM `studmedinfo` WHERE `Name` LIKE '%$search%'";
      $result = mysqli_query($conn,$sql);

      if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
  
    echo '<tr><td>'. $row['Name']." </td><td> ". $row['Age']." </td><td> ". $row['Section']. "</td> <td>" . $row['Vision'] . "</td><td>" .$row['Height']."</td><td>".$row['Weight']."</td><td>".$row['BloodPresure'] ."</tr>";
    }
} else {

    echo "0 results";
}
}
?>
</table>
</div>

   <form action="SearchStudent.php" method="POST">
      <input type="text" class="search" name="SearchInfo">
    </form>
<input type="button" name="Newform" value="PORTAL" onclick="Portal()" class="btn">
<input type="button" name="Logout" value="LOGOUT" onclick="Logout()" class="btn">
</body>
</html>

