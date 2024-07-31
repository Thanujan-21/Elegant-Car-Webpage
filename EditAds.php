<?php session_start();
if(!isset($_SESSION["userName"]))
{
	header('Location:login.php');
}else{
	
	if(isset($_POST["btnSubmit1"]))
{
	
//read the values user has given and assign to the varibles

$Brand = $_POST["txtBrand"];
$Model = $_POST["txtModel"];
$category = $_POST["lstCategory"];
$price = $_POST["txtPrice"];
		
		if(!file_exists($_FILES["imageFile"]["tmp_name"]) ||!is_uploaded_file($_FILES["imageFile"]["tmp_name"]))
		{
			$image = $_POST["imagePath"];
		}
		else
		{
			$image = "upload/".basename($_FILES["imageFile"]["name"]);
			move_uploaded_file($_FILES["imageFile"]["tmp_name"],$image);

		}
		
	if(isset($_POST["chkPublish"])){
		$status = 1;
	}else{
		$status = 0;
	}


//connect with the database

$con = mysqli_connect("localhost","root","","elegant car","3306");

//error handling

if(!$con)
{
	die("Sorry we have th etechnical issue");
}

//insert data to database 

$sql = "UPDATE `tblads` SET `Brand`='".$Brand."',`Model`='".$Model."',`price`='".$price."',`imagepath`='".$image."',`publish`='".$status."',`Category`='".$category."' WHERE `email`='".$_SESSION["userName"]."' AND `ADregistration`=".$_SESSION["id"].";";

//execute the query against the database

		
		if(mysqli_query($con,$sql))
		{
				header('Location:ViewmyADS.php');

		}
}
}
	?>