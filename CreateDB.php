<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "CREATE DATABASE IF NOT EXISTS project
";
if ($conn->query($sql) === TRUE) {
	$db= "project";
	$conn = new mysqli($servername, $username, $password, $db);

    $sql = "CREATE TABLE IF NOT EXISTS StudMedInfo ( 
Name VARCHAR(50) NOT NULL,
Section VARCHAR(10) NOT NULL,
Age VARCHAR(3) NOT NULL,
Height VARCHAR(5) NOT NULL,
Weight VARCHAR(5) NOT NULL,
BloodPresure VARCHAR(10) NOT NULL,
Vision VARCHAR(5) NOT NULL)";

	$sqlad = "CREATE TABLE IF NOT EXISTS AdminsAcc ( 
AdUser VARCHAR(50) NOT NULL,
AdPass VARCHAR(30) NOT NULL)";

    $sqlst = "CREATE TABLE IF NOT EXISTS StudentAcc ( 
StudUser VARCHAR(50) NOT NULL,
StudPass VARCHAR(30) NOT NULL)";

if ($conn->query($sqlst) === TRUE) {
$SQL = ("INSERT INTO `adminsacc` (`AdUser`, `AdPass`) VALUES ('NEWUSERADMIN', 'NEWPASSADMIN');");}
    $result = mysqli_query($conn,$SQL);

if ($conn->query($sqlad) === TRUE) {
	$SQL = ("INSERT INTO`StudentAcc` (`StudUser`, `StudPass`) VALUES ('NEWUSERSTUDENT', 'NEWPASSSTUDENT');");}
    $result = mysqli_query($conn,$SQL);
}




?>