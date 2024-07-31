<?php session_start();

if(isset($_POST["btnSubmit"]))
{
	
//read the values user has given and assign to the varibles

$email = $_POST["txtEmail"];
$password = $_POST["txtPassword"];

//connect with the database

$con = mysqli_connect("localhost","root","","elegant car","3306");

//error handling

if(!$con)
{
	die("Sorry we have th etechnical issue");
}

//sql query

$sql = "SELECT * FROM `tbluser` WHERE `Email`='".$email."' AND `Password`='".$password."'";

//execute the query against the database

$result = mysqli_query($con,$sql);
	
if (mysqli_num_rows($result)>0)
{
	//create a session
	
	$_SESSION["userName"] = $email;
	
	header('Location:Home.php');
}
else
{
	header('Location:login.php');
}
}
?>