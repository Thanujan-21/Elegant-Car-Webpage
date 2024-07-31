<?php session_start();

if(isset($_POST["btnSubmit"]))
{
	
//read the values user has given and assign to the varibles

	$email = $_POST["txtEmail"];
	$inquiry = $_POST["txtInquiry"];


//connect with the database

	$con = mysqli_connect("localhost","root","","elegant car","3306");

//error handling

if(!$con)
{
	die("Sorry we have th etechnical issue");
}

//insert data to database 

$sql = "INSERT INTO `tblinquiry`(`Email`, `Inquiry`) VALUES ('".$email."','".$inquiry."')";

//execute the query against the database

$result = mysqli_query($con,$sql);
	header('Location:Home.php');

}
?>