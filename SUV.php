<!doctype html>
<html>
<head>
<link rel="icon" href="ec-low-resolution-logo-white-on-transparent-background.png" type="icon/x-icon">
<title>Elegant Cars</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');

*{
	padding: 0;
	margin: 0;
	text-decoration: none;
	list-style: none;
	box-sizing: border-box;
}

body{
	padding: 0;
	margin: 0;
	font-family: 'Poppins', sans-serif;
	background: repeating-radial-gradient(90deg, #f8f8ff, #fefefa);
}

.Logo{
	line-height: 80px;
	padding: 0 50px;
}

.logo{
	width: 220px;
}
/*Header postion don't change*/
header{
	width: 100%;
	border-bottom: 1px solid rgba(255,255,255,1.0);
}

.nav{
	background: repeating-linear-gradient(360deg, #0082e6, #2c3e50);
	height: 80px;
	width: 100%;
}

.nav ul{
	list-style: none;
	float: right;
	margin-right: 20px;
}

.nav ul li{
	display: inline-block;
	line-height: 80px;
	margin: 0 5px;
	position: relative;
}

.nav ul li a{
	display: block;
	color: white;
	padding: 0 14px;
	border-radius: 10px;
	text-decoration: none;
	text-transform: uppercase;
	font-size: 17px;
}

.point{
	width: 10px;
}

a.active,a:hover{
	background: #1b9bff;
	transition: 0.25s;
}

.checkbtn{
	font-size: 30px;
	color: white;
	float: right;
	line-height: 80px;
	margin-right: 40px;
	cursor: pointer;
	display: none;
}
#check{
	display: none;
}
/*Responsive for Header*/
@media(max-width: 952px){
	header ul li a{
		font-size: 16px;
	}
	label.logo{
		font-size: 30px;
		padding-left: 50px;
	}
}
/*Reponsive webpage tags*/
@media(max-width: 1010px){
	.checkbtn{
		display: block;
	}
	
	body{
		overflow-x: hidden;
	}
	
	.nav ul{
		position: fixed;
		width: 100%;
		height: 100vh;
		max-width: 350px;
		background: #2c3e50;
		display: block;
		top: 80px;
		left: -100%;
		transition: all 0.25s ease;
		text-align: center;
		padding: 50px 10px;
		overflow-y: scroll;
		z-index: 999;
	}
	
	.nav ul li{
		display: block;
		margin: 50px 0;
		line-height: 30px;
	}
	
	.nav ul li a{
		display: block;
		font-size: 20px;
	}
	
	.nav a:hover,a.active{
		background: none;
		color: #0082e6;
		box-shadow: 0 0 0 2px #34495F;
	}
	
	#check:checked ~ ul{
		left: 0;
	}
	.body{
		height: auto;
		width: auto;
	}
}

@media(max-width: 420px){
	.logo{
		width: 100px;
	}
}

.Login a{
	font-size: 17px;
	padding: 0 auto;
}



.container{
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
	font-size: 22px;
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
	background: url("pexels-adrien-olichon-2931251.jpg") no-repeat;
	background-size: cover;
	align-items: center;
	z-index: 1;
	height: calc(125vh - 80px);
}


@media(max-width:1700px){
	.container{
		height: 0;
	}
	section{
		height: calc(180vh - 80px);
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
		height: calc(220vh - 80px);
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
		height: calc(330vh - 80px);
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
		height: calc(600vh - 80px);
	}
}

.box img{
	width: 300px;
}




































/*footer position don't change*/
footer{
	position: relative;
	width: 100%;
	background: #005BA0;
	bottom: 0px;
	z-index: 1;
}
.main-content{
	display: flex;
}

.main-content .box{
	flex-basis: 50%;
	padding: 10px 20px;
}

.box h2{
	font-size: 12px;
	font-weight: 600;
	text-transform: uppercase;
	color: #FFFFFF;
}

.box .content{
	margin: 20px 0 0 0;
	position: relative;
}

.box .content:before{
	position: absolute;
	content: '';
	top: -10px;
	height: 2px;
	width: 100%;
	background: #1a1a1a;
}

.box .content:after{
	position: absolute;
	content: '';
	height: 2px;
	width: 15%;
	background: #0082e6;
	top: -10px;
}

.left .content p{
	text-align: justify;
	color: #FFFFFF;
}

.left .content .social{
	margin: 20px 0 0 0;
}

.left .content .social a{
	padding: 0 2px;
}

.left .content .social a span{
	height: 20px;
	width: 20px;
	background: #FFFFFF;
	line-height: 20px;
	text-align: center;
	font-size: 12px;
	border-radius: 5px;
	transition: 0.25s;
	cursor: pointer;
	color: #1A1A1A;
}

.left .content .social a span:hover{
	background: #0082e6;
}

.center .content .fas, .center .content .fa{
	font-size: 12px;
	background: #FFFFFF;
	height: 25px;
	width: 25px;
	line-height: 25px;
	text-align: center;
	border-radius: 50%;
	transition: 0.25s;
	color: #1a1a1a;
}
.center .content .fas:hover{
	background: #0082e6;
}

.center .content .text{
	font-size: 14px;
	font-weight: 500;
	padding-left: 0px;
	color: #FFFFFF;
	text-align: justify;
}
.center .content .phone{
	margin: 10px 0;
}
.right form .text{
	font-size: 12px;
	margin-bottom: 2px;
	color: #FFFFFF;
}
.right form .msg{
	margin-top: 10px;
}
.right form input, .right form textarea{
	width: 100%;
	font-size: 14px;
	background: #FFFFFF;
	border: 1px solid #222222;
}
.right form input, .right form textarea{
	width: 100%;
	font-size: 12px;
	background: #FFFFFF;
	padding-left: 10px;
	border: 1px solid #222222;
}

.right form input:focus, .right form textarea:focus{
	outline-color: #3498db;
}

.right form input{
	height: 35px;
}
.right form .btn{
	margin-top: 10px;
}
.right form .btn button{
	height:40px;
	width:100%;
	border: none;
	outline: none;
	background: #0082e6;
	font-size: 15px;
	font-weight: 500;
	cursor: pointer;
	transition: 0.25s;
}
.right form .btn button:hover{
	background: #00467C
}
.bottom center{
	padding: 5px;
	font-size: 10px;
	font-weight: 400;
	background: #00203A;
	color: #FFFFFF;
}
.bottom center span{
	color: #656565;
}
.bottom center a{
	color: #888888;
	text-decoration: none;
}
.bottom center a:hover{
	text-decoration: underline;
	background: #00467C;
}

/*Responsive for Footer*/
@media(max-width: 1010px){
	footer{
		position: relative;
		bottom: 0px;
		overflow-y: visible;
	}
	.main-content{
		flex-wrap: wrap;
		flex-direction: column;
	}
	.main-content .box{
		margin: 5px 0;
	}
}

/*--------Scrollbar-------*/
::-webkit-scrollbar{
	width: 15px;
}

::-webkit-scrollbar-track{
	background: #d1e5ff;
}

::-webkit-scrollbar-thumb{
	background: linear-gradient(#1b9bff, #34495F);
	border-radius: 10px;
}
</style>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
				<li class="li1"><a href="Home.html">Home</a></li>
				<li class="li2"><a href="Car.php">Car</a></li>
				<li class="li2"><a href="SUV.php">SUV</a></li>
				<li class="li2"><a href="VAN.php">Van</a></li>
				<li class="li2"><a href="Truck.php">Truck</a></li>
				<li class="li2"><a href="BUS.php">Bus</a></li>
				<li class="Login">
					<a href="Login.php">Login</a>
				</li>
			</ul>
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
	$sql = "SELECT * FROM `tblads` WHERE `Category`='SUV' AND `publish`=1;";

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
</body>
</html>