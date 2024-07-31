<?php session_start();
if(!isset($_SESSION["userName"])){
	header('location:login.php');
}
?>
<!doctype html>
<html>
<head>
<link rel="icon" href="ec-low-resolution-logo-white-on-transparent-background.png" type="icon/x-icon">
<link rel="stylesheet" href="Navbar and Footer afterLogin.css" type="text/css">
<title>Elegant Cars</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">

<script type="text/javascript">
	var count =1;
	setInterval(function(){
		document.getElementById('radio' + count).checked = true;
		count++;
		if(count>6){
			count=1;
		}
	},2500);
</script>
<style>
*{
	padding: 0;
	margin: 0;
	text-decoration: none;
	list-style: none;
	box-sizing: border-box;
}

.body{
	margin: 0;
	padding: 0;
	height: 0;
	display: flex;
	justify-content: center;
	align-content: center;
	background: repeating-radial-gradient(90deg, #f8f8ff, #fefefa);
	z-index: 100;
}

.slider{
	width: 1100px;
	height: 800px;
	border-radius: 10px;
	overflow: hidden;
}

.slides{
	width: 500%;
	height: 800px;
	display: flex;
}

.slides input{
	display: none;
}

.slides{
	width: 20%;
	transition: 2s ease;
}

.slides img{
	width: 1100px;
	height: 800px;
}

/* css for manuel slider*/
.navigation-manual{
	position: absolute;
	display: flex;
	width: 1100px;
	margin-top: -40px;
	justify-content: center;
}

.manuel-btn{
	border: 2px solid #0082e6;
	padding: 5px;
	border-radius: 10px;
	cursor: pointer;
	transition: 2s ease;
}

.manuel-btn:not(:last-child){
	margin-right: 40px;
}

.manuel-btn:hover{
	background: #0082e6;
}

#radio1:checked~ .first{
	margin-left: 0;
}
#radio2:checked~ .first{
	margin-left: -500%;

}
#radio3:checked~ .first{
	margin-left: -1000%;
}
#radio4:checked~ .first{
	margin-left: -1500%;
}
#radio5:checked~ .first{
	margin-left: -2000%;
}
#radio6:checked~ .first{
	margin-left: -2500%;
}

/*css for autmation*/

.navigation-auto{
	position: absolute;
	display: flex;
	width: 1100px;
	justify-content: center;
	margin-top: 760px;
}

.navigation-auto div{
	border: 2px solid #0082e6;
	padding: 5px;
	border-radius: 10px;
	transition: 2s ease;
}

.navigation-auto div:not(:last-child){
	margin-right: 40px;
}

#radio1:checked~ .navigation-auto .auto-btn1{
	background: #0082e6;
}
#radio2:checked~ .navigation-auto .auto-btn2{
	background: #0082e6;
}
#radio3:checked~ .navigation-auto .auto-btn3{
	background: #0082e6;
}
#radio4:checked~ .navigation-auto .auto-btn4{
	background: #0082e6;
}
#radio5:checked~ .navigation-auto .auto-btn5{
	background: #0082e6;
}
#radio6:checked~ .navigation-auto .auto-btn6{
	background: #0082e6;
}

/*background for page*/
section{
	background: url("pexels-scott-webb-2117938.jpg") no-repeat;
	background-size: cover;
	align-items: center;
	z-index: 1;
	height: calc(100vh - 80px);
}


body .paragraph{
	margin: 30px 30px;
	color: ghostwhite;
	font-weight: 100;
	font-size: 18px;
}

body{
	background: repeating-linear-gradient(220deg, #0082e6, #34495F);
}

@media screen and (max-width: 1700px){
	.body{
		margin: 0;
		padding: 0;
		height: 0;
		display: flex;
		justify-content: center;
		align-content: center;
		background: repeating-radial-gradient(90deg, #f8f8ff, #fefefa);
	}
	section{
		height: calc(110vh - 80px);
	}

	.slider{
		width: 1100px;
		height: 800px;
		border-radius: 10px;
		overflow: hidden;
	}

	.slides{
		width: 500%;
		height: 800px;
		display: flex;
	}

	.slides input{
		display: none;
	}

	.slides{
		width: 20%;
		transition: 2s ease;
	}

	.slides img{
		width: 1100px;
		height: 800px;
	}

/* css for manuel slider*/
	.navigation-manual{
		position: absolute;
		display: flex;
		width: 1100px;
		margin-top: -40px;
		justify-content: center;
	}

	.manuel-btn{
		border: 2px solid #0082e6;
		padding: 5px;
		border-radius: 10px;
		cursor: pointer;
		transition: 2s ease;
	}

	.manuel-btn:not(:last-child){
		margin-right: 40px;
	}

	.manuel-btn:hover{
		background: #0082e6;
	}

	#radio1:checked~ .first{
		margin-left: 0;
	}
	#radio2:checked~ .first{
		margin-left: -500%;
	}
	#radio3:checked~ .first{
		margin-left: -1000%;
	}
	#radio4:checked~ .first{
		margin-left: -1500%;
	}
	#radio5:checked~ .first{
		margin-left: -2000%;
	}
	#radio6:checked~ .first{
		margin-left: -2500%;
	}

/*css for autmation*/

	.navigation-auto{
		position: absolute;
		display: flex;
		width: 1100px;
		justify-content: center;
		margin-top: 760px;
	}
}

@media screen and (max-width: 1100px){
	.body{
		margin: 0;
		padding: 0;
		height: 0;
		display: flex;
		justify-content: center;
		align-content: center;
		background: repeating-radial-gradient(90deg, #f8f8ff, #fefefa);
	}
	section{
		height: calc(70vh - 80px);
	}

	.slider{
		width: 800px;
		height: 500px;
		border-radius: 10px;
		overflow: hidden;
	}

	.slides{
		width: 500%;
		height: 500px;
		display: flex;
	}

	.slides input{
		display: none;
	}

	.slides{
		width: 20%;
		transition: 2s ease;
	}

	.slides img{
		width: 800px;
		height: 500px;
	}

/* css for manuel slider*/
	.navigation-manual{
		position: absolute;
		display: flex;
		width: 800px;
		margin-top: -40px;
		justify-content: center;
	}

	.manuel-btn{
		border: 2px solid #0082e6;
		padding: 5px;
		border-radius: 10px;
		cursor: pointer;
		transition: 2s ease;
	}

	.manuel-btn:not(:last-child){
		margin-right: 40px;
	}

	.manuel-btn:hover{
		background: #0082e6;
	}

	#radio1:checked~ .first{
		margin-left: 0;
	}
	#radio2:checked~ .first{
		margin-left: -500%;
	}
	#radio3:checked~ .first{
		margin-left: -1000%;
	}
	#radio4:checked~ .first{
		margin-left: -1500%;
	}
	#radio5:checked~ .first{
		margin-left: -2000%;
	}
	#radio6:checked~ .first{
		margin-left: -2500%;
	}

/*css for autmation*/

	.navigation-auto{
		position: absolute;
		display: flex;
		width: 800px;
		justify-content: center;
		margin-top: 460px;
	}
}

@media screen and (max-width: 820px){
	.body{
		margin: 0;
		padding: 0;
		height: 0;
		display: flex;
		justify-content: center;
		align-content: center;
		background: repeating-radial-gradient(90deg, #f8f8ff, #fefefa);
	}
	
	section{
		height: calc(45vh - 80px);
	}

	.slider{
		width: 500px;
		height: 300px;
		border-radius: 10px;
		overflow: hidden;
	}

	.slides{
		width: 500%;
		height: 300px;
		display: flex;
	}

	.slides input{
		display: none;
	}

	.slides{
		width: 20%;
		transition: 2s ease;
	}

	.slides img{
		width: 500px;
		height: 300px;
	}

/* css for manuel slider*/
	.navigation-manual{
		position: absolute;
		display: flex;
		width: 500px;
		margin-top: -40px;
		justify-content: center;
	}

	.manuel-btn{
		border: 2px solid #0082e6;
		padding: 5px;
		border-radius: 10px;
		cursor: pointer;
		transition: 2s ease;
	}

	.manuel-btn:not(:last-child){
		margin-right: 40px;
	}

	.manuel-btn:hover{
		background: #0082e6;
	}

	#radio1:checked~ .first{
		margin-left: 0;
	}
	#radio2:checked~ .first{
		margin-left: -500%;
	}
	#radio3:checked~ .first{
		margin-left: -1000%;
	}
	#radio4:checked~ .first{
		margin-left: -1500%;
	}
	#radio5:checked~ .first{
		margin-left: -2000%;
	}
	#radio6:checked~ .first{
		margin-left: -2500%;
	}

/*css for autmation*/

	.navigation-auto{
		position: absolute;
		display: flex;
		width: 500px;
		justify-content: center;
		margin-top: 260px;
	}
}

@media screen and (max-width: 520px){
	.body{
		margin: 0;
		padding: 0;
		height: 0;
		display: flex;
		justify-content: center;
		align-content: center;
		background: repeating-radial-gradient(90deg, #f8f8ff, #fefefa);
	}
	
	section{
		height: calc(35vh - 80px);
	}

	.slider{
		width: 300px;
		height: 200px;
		border-radius: 10px;
		overflow: hidden;
	}

	.slides{
		width: 500%;
		height: 200px;
		display: flex;
	}

	.slides input{
		display: none;
	}

	.slides{
		width: 20%;
		transition: 2s ease;
	}

	.slides img{
		width: 300px;
		height: 200px;
	}

/* css for manuel slider*/
	.navigation-manual{
		position: absolute;
		display: flex;
		width: 300px;
		margin-top: -40px;
		justify-content: center;
	}

	.manuel-btn{
		border: 2px solid #0082e6;
		padding: 5px;
		border-radius: 10px;
		cursor: pointer;
		transition: 2s ease;
	}

	.manuel-btn:not(:last-child){
		margin-right: 40px;
	}

	.manuel-btn:hover{
		background: #0082e6;
	}

	#radio1:checked~ .first{
		margin-left: 0;
	}
	#radio2:checked~ .first{
		margin-left: -500%;
	}
	#radio3:checked~ .first{
		margin-left: -1000%;
	}
	#radio4:checked~ .first{
		margin-left: -1500%;
	}
	#radio5:checked~ .first{
		margin-left: -2000%;
	}
	#radio6:checked~ .first{
		margin-left: -2500%;
	}

/*css for autmation*/

	.navigation-auto{
		position: absolute;
		display: flex;
		width: 300px;
		justify-content: center;
		margin-top: 160px;
	}
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
	<!--image slider start-->
	<div class="body">
		<div class="slider">
			<div class="slides">
				<!--radio buttons start-->
				<input type="radio" name="radio-btn" id="radio1">
				<input type="radio" name="radio-btn" id="radio2">
				<input type="radio" name="radio-btn" id="radio3">
				<input type="radio" name="radio-btn" id="radio4">
				<input type="radio" name="radio-btn" id="radio5">
				<input type="radio" name="radio-btn" id="radio6">
				<!--radio buttons end-->
				<!--slide image start-->
				<div class="slide first">
					<img src="Home/1.jpg" alt="">
				</div>
				<div class="slide">
					<img src="Home/2.jpg" alt="">
				</div>
				<div class="slide">
					<img src="Home/3.jpg" alt="">
				</div>
				<div class="slide">
					<img src="Home/4.jpg" alt="">
				</div>
				<div class="slide">
					<img src="Home/5.jpg" alt="">
				</div>
				<div class="slide">
					<img src="Home/6.jpg" alt="">
				</div>
				<!--slide image end-->
				<!--automatic navigation start-->
				<div class="navigation-auto">
					<div class="auto-btn1"></div>
					<div class="auto-btn2"></div>
					<div class="auto-btn3"></div>
					<div class="auto-btn4"></div>
					<div class="auto-btn5"></div>
					<div class="auto-btn6"></div>
				</div>
				<!--automatic navigation end-->
			</div>
			<!--manual navigation start-->
			<div class="navigation-manual">
				<label for="radio1" class="manuel-btn"></label>
				<label for="radio2" class="manuel-btn"></label>
				<label for="radio3" class="manuel-btn"></label>
				<label for="radio4" class="manuel-btn"></label>
				<label for="radio5" class="manuel-btn"></label>
				<label for="radio6" class="manuel-btn"></label>
			</div>
			<!--manual navigation end-->
		</div>
		<!--image slider end-->
	</div>
	<!---->
	<section>
		
	</section>
	<div class="paragraph">
			<p>Elegant cars represent the pinnacle of automotive luxury, combining exquisite design, meticulous craftsmanship, and advanced technology to create a driving experience that is both indulgent and captivating. From the moment you lay eyes on an elegant car, you are drawn to its graceful lines, its sleek contours, and its commanding presence. Every curve and detail is carefully sculpted, reflecting the artistry and expertise of the designers and engineers who painstakingly craft these automotive masterpieces. The result is a vehicle that transcends mere transportation and becomes a work of art in motion.<br/><br/>

			Step inside an elegant car, and you are greeted by an interior that exudes opulence and refinement. Luxurious materials, such as supple leather, polished wood, and sleek metal accents, adorn every surface, creating an atmosphere of lavishness and sophistication. The craftsmanship is evident in the stitching, the precision of the controls, and the seamless integration of technology. From the ergonomic seats that embrace you in comfort to the ambient lighting that sets the mood, every element is designed to enhance your driving pleasure and create a sense of sanctuary on the road.<br/><br/>

			But an elegant car is not merely about aesthetics; it is also about performance. Under the hood lies a powerful engine, tuned to deliver a balance of exhilarating speed, refined handling, and effortless control. The symphony of power that emanates from the engine bay is a testament to engineering excellence, and the smoothness of the ride is a testament to the meticulous tuning of the suspension and drivetrain. Whether cruising along a coastal highway or maneuvering through winding mountain roads, an elegant car offers a driving experience that is both thrilling and composed.<br/><br/>

			Advanced technology further enhances the driving experience in an elegant car. From cutting-edge infotainment systems to driver-assistance features, these vehicles are equipped with the latest innovations to ensure convenience, safety, and connectivity. Touchscreen displays, voice commands, and intuitive interfaces make it effortless to control the various functions of the car, while features like adaptive cruise control, lane-keeping assist, and blind-spot monitoring provide an extra layer of safety and peace of mind. An elegant car seamlessly integrates technology into the driving experience, enhancing convenience and ensuring that you stay connected with the world around you.<br/><br/>

			Beyond their individual features, elegant cars embody a sense of prestige and status. They are a symbol of success and accomplishment, reflecting the discerning taste and refined sensibilities of their owners. Whether pulling up to a luxurious event or simply driving through city streets, an elegant car commands attention and demands respect. It is a statement of personal style and a testament to one's appreciation for the finer things in life. Owning an elegant car is not just about the vehicle itself; it is about the lifestyle and the values it represents.<br/><br/>

			Moreover, elegant cars have a rich history and heritage that further enhances their allure. Many iconic automotive brands have built a legacy of producing elegant cars that have become synonymous with luxury and class. From the iconic designs of the past to the innovative creations of the present, these brands have established themselves as pillars of automotive excellence. Each elegant car carries with it the legacy of its brand, embodying the traditions and values that have made it an emblem of luxury.<br/><br/>

			In conclusion, elegant cars are the epitome of automotive luxury. Their timeless design, meticulous craftsmanship, advanced technology, and rich heritage combine to create a driving 	experience that is nothing short of extraordinary. They represent a harmonious blend of art and engineering, offering a symphony of style, performance, and comfort. Driving an elegant car is an indulgence, a statement of refined taste and a celebration of the finer things in life. It is an experience that transcends the ordinary and allows you to revel in the beauty of automotive excellence. Whether cruising through city streets or embarking on a grand adventure, an elegant car is a companion that promises to make every journey a truly remarkable one.</p>
		</div>
	
	
	
	
	
	
	
	
	
	
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

