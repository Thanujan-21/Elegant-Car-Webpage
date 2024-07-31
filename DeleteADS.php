<?php session_start();

// Connect with the database
$con = mysqli_connect("localhost", "root", "", "elegant car", "3306");

// Error handling
if (!$con) {
    die("Sorry, we are facing a technical issue");
}

// SQL query to delete the ad
$sql = "DELETE FROM `tblads` WHERE `tblads`.`ADregistration`=".$_GET["id"].";";

// Execute the query against the database
if (mysqli_query($con, $sql)) {
    header('Location: ViewmyADS.php');
} else {
    echo "Oops, something is wrong. Please try again.";
}
?>