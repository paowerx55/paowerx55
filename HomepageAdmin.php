<!DOCTYPE html>
<html>
<head>
<title>Redord List</title>
<link rel="stylesheet" href="Design.css">
</head>
<script type="text/javascript">
  function Newform(){
window.location.href="NewForm.php";    
  }
  function Logout(){
window.location.href="LoginAdmin.php";    
  }

</script>
<body>
<div align="center" class="divinfo" dir="ltr" lang="en" >
<h1>Medical Records of Cluster 6 Students in<br>Arellano University Jose Rizal High School</h1> 

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
$sql = "SELECT * FROM `StudMedInfo`";
      $result = mysqli_query($conn,$sql);

      if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
	
	  echo '<tr><td>'. $row['Name']." </td><td> ". $row['Age']." </td><td> ". $row['Section']. "</td> <td>" . $row['Vision'] . "</td><td>" .$row['Height']."</td><td>".$row['Weight']."</td><td>".$row['BloodPresure'] ."</tr>";
    }
} else {

    echo "0 results";
}


?>
</table>

</div>
   <form action="SearchAdmin.php" method="POST">
      <input type="text" class="search" name="SearchInfo">
    </form>
<input type="button" name="Newform" value="New Form" onclick="Newform()" class="btn">
<input type="button" name="Logout" value="Logout" onclick="Logout()" class="btn">
</body>
</html>

