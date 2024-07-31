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
<link rel="stylesheet" href="Navbar and Footer afterLogin.css" type="text/css">
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
/*For Grid CSS TEXT*/

.container{
	padding: 80px 0 0 0;
	margin: 0;
	height: 0;
	justify-content: center;
	align-content: center;
	background: gray;
	color: white;
	text-decoration: none;
	box-sizing: border-box;
	outline: none;
	border: none;
	text-transform: uppercase;
	transition: .2s linear;
}

.container .box-container{
	padding: 15px 9%;
	display: grid;
	grid-template-columns: repeat(auto-fit, minmax(270px, 1fr));
	gap: 15px;
	padding-bottom: 100px;
}

.container .box-container .box{
	box-shadow: 0 5px 10px rgba(0,0,0,.2);
	border-radius: 5px;
	background: #FFFFFF;
	text-align: center;
	height: auto;
}

.container .box-container .box h3{
	color: #444;
	font-size: 18px;
	padding: 10px 0;
	margin: 10px 0 0 0;
}

.container .box-container .box p{
	color: #777;
	font-size: 15px;
	line-height: 1.8;
	margin: 10px 0 0 0;
}

.container .box-container .box .btn{
	display: inline-block;
	background: #0082e6;
	color: #fff;
	font-size: 17px;
	border-radius: 10px;
	padding: 8px 25px;
	margin: 20px 0;
}

.container .box-container .box:hover{
	box-shadow: 0 10px 15px rgba(0,0,0,.3);
	transform: scale(1.03);
}


/*background for page*/
section{
	background: url("pexels-josh-sorenson-1586133.jpg") no-repeat;
	background-size: cover;
	align-items: center;
	z-index: 1;
	height: calc(200vh - 80px);
}

@media(max-width:1700px){
	.container{
		height: 0;
	}
	section{
		height: calc(300vh - 80px);
	}
	.box img{
		width: 150px;
	}
}

@media(max-width:1400px){
	.container{
		height: 0;
	}
	section{
		height: calc(400vh - 80px);
	}
	.box img{
		width: 150px;
	}
}

@media(max-width:1040px){
	.container{
		height: 0;
	}
	section{
		height: calc(530vh - 80px);
	}
	.box img{
		width: 150px;
	}
}

@media(max-width:691px){
	.container{
		height: 0;
	}
	section{
		height: calc(810vh - 80px);
	}
}

.box img{
	width: 300px;
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
				<li class="li2"><a href="#.php">Van</a></li>
				<li class="li2"><a href="TruckafterLogin.php">Truck</a></li>
				<li class="li2"><a href="BUSafterLogin.php">Bus</a></li>
				<li><i class="fa-regular fa-user" style="color: #ffffff;" onClick="toggleMenu()"></i></li>
			</ul>
			<div class="sub-menu-wrap" id="submenu">
				<div class="sub-menu">
					<a href="ADDAds.php" class="sub-menu-link">
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
	<div class="container">
		<div class="box-container">
	<?php
	$con = mysqli_connect("localhost","root","","elegant car","3306");

//Error Handling
	if(!$con){
		die("Sorry, We are facing Technical issue");
	}

//sql Query
	$sql = "SELECT * FROM `tblads` WHERE `Category`='Van' AND `publish`=1;";

//Execute the query against the database
	$result = mysqli_query($con,$sql);

	if(mysqli_num_rows($result)>0){
		while($row = mysqli_fetch_assoc($result))
		{
			
	?>
			<div class="box">
				<img src="<?php echo $row["imagepath"];  ?>" alt="">
				<h3>Brand : <?php echo $row["Brand"];  ?></h3>
				<h3>Model : <?php echo $row["Model"];  ?></h3>
				<h3>Price : <?php echo $row["price"];  ?></h3>
				<a href="#" class="btn">Read More</a>
			</div>
		
	<?php
		}
	}
	mysqli_close($con);//close the connection
	?>
		</div>
	</div>
	<section>
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
						<span class="fas fa-phone-alt"></span>
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