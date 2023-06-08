<!DOCTYPE html>
<html>
<head>
<title>Portal</title>

<script type="text/JavaScript">
  function studportal(){
window.location.href="LoginStudent.php";    
  }
  function adportal(){
window.location.href="LoginAdmin.php";    
  }

</script>
</head>
<link rel="stylesheet" type="text/css" href="Design.css">
<body>
<img src="title.PNG" align="top">
<table class="tblAdmin" >

   <tr>
      <td>
	  <img src="Admin.png" align="middle" width="350px" height="350"><br/>
	  <p align="center">
	  <input type="button" name="btnAdmin" class="btn" onClick="adportal()" value="ADMIN"></p>				
	  <br/><b class="b">Log in as Admin.</b>
	</td>
   </tr>
</table>
<table class="tblstudent">
   <tr>
      <td>
	  <img src="Student.png" align="top" height="350px" width="350px">
		   <p align="center"><input name="btnStudent" type="button"class="btn" onClick="studportal()"  value="STUDENT" width="50px">
 <b class="b">Search for your<br/>Informations</b>
      </td>
   </tr>

</table>

</body>
</html>

