<?php session_start();

if(isset($_POST["btnSubmit"]))
{
	
//read the values user has given and assign to the varibles

	$name = $_POST["txtName"];
	$email = $_POST["txtEmail"];
	$password = $_POST["txtPassword"];
	$contact = $_POST["txtContactNo"];


//connect with the database

	$con = mysqli_connect("localhost","root","","elegant car","3306");

//error handling

if(!$con)
{
	die("Sorry we have th etechnical issue");
}

//insert data to database 

$sql = "INSERT INTO `tbluser`(`Email`, `Name`, `Password`, `Contact_number`) 
VALUES ('".$email."','".$name."','".$password."','".$contact."');";

//execute the query against the database

$result = mysqli_query($con,$sql);
	header('Location:Login.php');

}
?>