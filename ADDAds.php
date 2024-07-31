<?php session_start();
if(!isset($_SESSION["userName"])){
	header('location:login.php');
}
?>
<!doctype html>
<html>
<head>
<link rel="icon" href="ec-low-resolution-logo-white-on-transparent-background.png" type="icon/x-icon">
<title>Elegant Cars</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="Navbar and Footer afterLogin.css" type="text/css">
<style>
*{
	padding: 0;
	margin: 0;
	text-decoration: none;
	list-style: none;
	box-sizing: border-box;
}

div{
	
	box-sizing: border-box;
}

/*background for page*/
section{
	background: url("pexels-scott-webb-2117938.jpg") no-repeat;
	background-size: cover;
	align-items: center;
	z-index: 1;
	height: calc(100vh - 80px);
	padding: 100px 0 0;
}



	
.form-style-5{
	max-width: 500px;
	padding: 10px 20px;
	margin: 0 auto;
	background: repeating-linear-gradient(120deg, #0082e6, #34495F);
	border-radius: 8px;   
	font-family: 'Poppins', sans-serif;
	overflow: visible;
	color: #ffffff;
}
.form-style-5 fieldset{
	border: none;
}
.form-style-5 legend {
	font-size: 1.4em;
	margin-bottom: 10px;
	color: #ffffff;
}
.form-style-5 label {
	display: block;
	margin-bottom: 8px;
}
.form-style-5 input[type="text"],
.form-style-5 input[type="date"],
.form-style-5 input[type="datetime"],
.form-style-5 input[type="email"],
.form-style-5 input[type="number"],
.form-style-5 input[type="search"],
.form-style-5 input[type="time"],
.form-style-5 input[type="url"],
.form-style-5 input[type="file"],
.form-style-5 textarea,
.form-style-5 select {
	font-family: 'Poppins', sans-serif;
	background: rgba(255,255,255,.1);
	border: none;
	border-radius: 4px;
	font-size: 15px;
	margin: 0;
	outline: 0;
	padding: 10px;
	width: 100%;
	box-sizing: border-box; 
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box; 
	background-color: #2c3e50;
	color:#ffffff;
	-webkit-box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
	box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
	margin-bottom: 30px;
	text-decoration: none;
}

.form-style-5 input[type="text"]:focus,
.form-style-5 input[type="date"]:focus,
.form-style-5 input[type="datetime"]:focus,
.form-style-5 input[type="email"]:focus,
.form-style-5 input[type="number"]:focus,
.form-style-5 input[type="search"]:focus,
.form-style-5 input[type="time"]:focus,
.form-style-5 input[type="url"]:focus,
.form-style-5 textarea:focus,

.form-style-5 input[type="file"]:focus,

.form-style-5 select:focus{
	background: #2c3e50;
}
.form-style-5 select{
	-webkit-appearance: menulist-button;
	height:45px;
}
.form-style-5 input[type="submit"],
.form-style-5 input[type="button"]
{
	position: relative;
	display: block;
	padding: 19px 39px 18px 39px;
	color: #FFF;
	margin: 0 auto;
	background: #0082e6;
	font-size: 18px;
	text-align: center;
	font-style: normal;
	width: 100%;
	border: 1px solid #007AD8;
	border-width: 1px 1px 3px;
	margin-bottom: 10px;
}
.form-style-5 input[type="submit"]:hover,
.form-style-5 input[type="button"]:hover
{
	background: #1b9bff ;
}


</style>

</head>
    
<body>
	<header>
		<nav class="nav">
			<input type="checkbox" id="check">
			<label for="check" class="checkbtn">
				<i class="fas fa-bars"></i>
			</label>
			<label class="Logo"><img src="elegant-cars-low-resolution-logo-white-on-transparent-background.png" class="logo"/></label>
			<ul>
				<li class="li1"><a href="Home.php">Home</a></li>
				<li class="li2"><a href="CarafterLogin.php">Car</a></li>
				<li class="li2"><a href="SUVafterLogin.php">SUV</a></li>
				<li class="li2"><a href="VANafterLogin.php">Van</a></li>
				<li class="li2"><a href="TruckafterLogin.php">Truck</a></li>
				<li class="li2"><a href="BUSafterLogin.php">Bus</a></li>
				<li><i class="fa-regular fa-user" style="color: #ffffff;" onClick="toggleMenu()"></i></li>
			</ul>
			<div class="sub-menu-wrap" id="submenu">
				<div class="sub-menu">
					<a href="#" class="sub-menu-link">
						<i class="fa-regular fa-pen-to-square"></i>
						<p>ADD your Ads</p>
						<span>></span>
					</a>
					<a href="ViewmyADS.php" class="sub-menu-link">
						<i class="fa-regular fa-eye"></i>
						<p>View your Ads</p>
						<span>></span>
					</a>
					<a href="#" class="sub-menu-link">
						<i class="fa-sharp fa-solid fa-bookmark"></i>
						<p>WishList And Favorites</p>
						<span>></span>
					</a>
					<a href="#" class="sub-menu-link">
						<i class="fa-sharp fa-regular fa-right-from-bracket"></i>
						<form action="Logouthandler.php" method="post">
							<button name="logout_btn">Logout</button>
						</form>
						<span>></span>
					</a>
				</div>
			</div>
		</nav>
	</header>
	
	
	<!---->
	<section>
	
	<div class="form-style-5">
		<form action="ADDAds.php" method="post" enctype="multipart/form-data">
		<fieldset>
		<legend>Product Info</legend>
		<p>
		Category  <select name="lstCategory" title="Category">
			<option value="Car">Car</option>
   		 	<option value="SUV">SUV</option>
   			<option value="Van">Van </option>
    		<option value="Truck">Truck</option>
   		  	<option value="Bus">Bus</option>
   		</select>
  			<input type="text" name="txtBrand" placeholder="Brand *" required>
  			<input type="text" name="txtModel" placeholder="Model *" required>
  			<input type="text" name="txtPrice" placeholder="Price *" required>
 			<input type="file" name="imageFile" placeholder="Upload a Picture" required>
			<label for="chkPublish">Publish the Advertisement : 
  				<input type="checkbox" name="chkPublish">
			</label>
 		 
		</p>


      
		</fieldset>
		<p>
 			 <input type="submit" value="Add Post" name="btnSubmit1"/>
		</p>
<?php
if(isset($_POST["btnSubmit1"]))
{
	
//read the values user has given and assign to the varibles

	$Brand = $_POST["txtBrand"];
	$Model = $_POST["txtModel"];
	$Price = $_POST["txtPrice"];
	$category = $_POST["lstCategory"];
	
	if(isset($_POST["chkPublish"])){
		$status = 1;
	}else{
		$status = 0;
	}

	$image = "upload/".basename($_FILES["imageFile"]["name"]);
	move_uploaded_file($_FILES["imageFile"]["tmp_name"],$image);

//connect with the database

	$con = mysqli_connect("localhost","root","","elegant car","3306");

//error handling

	if(!$con)
	{
		die("Sorry we have th etechnical issue");
	}

//insert data to database 

	$sql = "INSERT INTO `tblads`(`Brand`, `Model`, `price`, `imagepath`, `publish`, `ADregistration`, `Category`, `email`) VALUES ('".$Brand."','".$Model."','".$Price."','".$image."','".$status."',NULL ,'".$category."','".$_SESSION["userName"]."')";

	if(mysqli_query($con,$sql)){
		echo "Advertisement uploaded Successfully";
	}else{
		echo "Opps Something is wrong, Please select the file again";
	}
	
}
?>
		</form>
	</div>
	</section>
	
	
	
	
	
	
	
	
	
	<footer class="Sticky-footer">
		<div class="main-content">
			<div class="left box">
				<h2>About us</h2>
				<div class="content">
					<p></p>
					<div class="social">
						<a href="https://www.facebook.com/"><span class="fab fa-facebook-f"></span></a>
						<a href="https://twitter.com/"><span class="fab fa-twitter"></span></a>
						<a href="https://www.instagram.com/"><span class="fab fa-instagram"></span></a>
						<a href="https://www.youtube.com/"><span class="fab fa-youtube"></span></a>
					</div>
				</div>
			</div>
			
			<div class="center box">
				<h2>Address</h2>
				<div class="content">
					<div class="place">
						<span class="fas fa-map-marker-alt"></span>
						<span class="text">09, Wolfendhal lane, Colombo-13</span>
					</div>
					<div class="phone">
						<span class="fas fa-phone-alt fa-rotate-90"></span>
						<span class="text">+94776509668</span>
					</div>
					<div class="Email">
						<span class="fas fa-envelope"></span>
						<span class="text">thamathanujan@gmail.com</span>
					</div>
				</div>
			</div>
			
			<div class="right box">
				<h2>Contact us</h2>
				<div class="content">
				<form action="Inquiryhandler.php" method="post">
					<div class="email">
						<div class="text">Email *</div>
						<input type="email" name="txtEmail" required>
					</div>
					<div class="msg">
						<div class="text">Message *</div>
						<textarea row="2" clos="200" name="txtInquiry" required></textarea>
					</div>
					<div class="btn">
						<button type="submit" name="btnSubmit">Send</button>
					</div>
				</form>
				</div>
			</div>
		</div>
		
		<div class="bottom">
			<center>
				<span class="credits">Created By<a href="#"> Thanujan</a> | </span>
				<span class="far fa-copyright"></span><span>2023 All Rights Reserved.</span>
			</center>
		</div>
	</footer>
	
	<script>
		let submenu = document.getElementById("submenu");
		
		function toggleMenu(){
			submenu.classList.toggle("open-menu");
		}
	</script>
</body>
</html>