<?php session_start();?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="icon" href="ec-low-resolution-logo-white-on-transparent-background.png" type="icon/x-icon">
<title>Elegant Cars - Login</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
<style>
body{
	margin: 0;
	padding: 0;
	font-family: 'Poppins', sans-serif;
	background: linear-gradient(0deg, #1b9bff, #005BA0);
	height: 98vh;
	overflow: hidden;
}

.logo{
	width: 400px;
}

.main{
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	width: 400px;
}

.center{
	background: white;
	border-radius: 10px;
}

.center h1{
	text-align: center;
	padding: 20px 0 20px 0;
	border-bottom: 1px solid silver;
}

.center form{
	padding: 0 40px;
	box-sizing: border-box;
}

form .txt_field{
	position: relative;
	border-bottom: 2px solid #adadad;
	margin: 30px 0;
}

.txt_field input{
	width: 100%;
	padding: 0 5px;
	height: 40px;
	font-size: 16px;
	border: none;
	background: none;
	outline: none;
}

.txt_field label{
	position: absolute;
	top: 50%;
	left: 5px;
	color: #adadad;
	transform: translateY(-50%);
	font-size: 16px;
	pointer-events: none;
	transition: .5s;
}

.txt_field span::before{
	content: '';
	position: absolute;
	top: 40px;
	left: 0;
	width: 0%;
	height: 2px;
	background: #0082e6;
	transition: .5s;
}

.txt_field input:focus ~ label,
.txt_field input:valid ~ label{
	top: -50%;
	color: #0082e6;
}

.txt_field input:focus ~ span::before,
.txt_field input:valid ~ span::before{
	width: 100%;
}

input[type="submit"]{
	width: 100%;
	height: 50px;
	border: 1px solid;
	background: #0082e6;
	border-radius: 25px;
	font-size: 18px;
	color: #e9f4fb;
	font-weight: 700;
	cursor: pointer;
	outline: none;
}

input[type="submit"]:hover{
	border-color: #2691d9;
	transition: .5s;
}

.login_link{
	margin: 30px 0;
	text-align: center;
	font-size: 16px;
	color: #666666;
}

.login_link a{
	color: #2691d9;
	text-decoration: none;
}

.login_link a:hover{
	text-decoration: underline;
}


footer{
	position: fixed;
	bottom: 0px;
	width: 100%;
	background: #005BA0;
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

@media screen and (max-height: 900px){
	body{
		margin: 0;
		padding: 0;
		font-family: 'Poppins', sans-serif;
		background: linear-gradient(0deg, #1b9bff, #005BA0);
		height: 120vh;
		overflow-y: scroll;
	}
	
	.logo{
		width: 400px;
	}

	.main{
		position: absolute;
		top: 60%;
		left: 50%;
		transform: translate(-50%, -50%);
		width: 400px;
	}
}

@media screen and (max-width: 415px){
	body{
		margin: 0;
		padding: 0;
		font-family: 'Poppins', sans-serif;
		background: linear-gradient(0deg, #1b9bff, #005BA0);
		height: 120vh;
		overflow-y: scroll;
	}

	.logo{
		width: 280px;
	}

	.main{
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		width: 280px;
	}
	
	.txt_field label, input[type="submit"]{
		font-size: 15px;
	}
	
	.login_link{
		font-size: 13px;
	}
}

@media screen and (max-width: 300px){
	body{
		margin: 0;
		padding: 0;
		font-family: 'Poppins', sans-serif;
		background: linear-gradient(0deg, #1b9bff, #005BA0);
		height: 120vh;
		overflow-y: scroll;
	}

	.logo{
		width: 280px;
	}

	.main{
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		width: 280px;
	}
	
	.txt_field label, input[type="submit"]{
		font-size: 15px;
	}
	
	.login_link{
		font-size: 13px;
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
<script>
	function validateemail(){
		let email=document.getElementById("txtemail").value;
		let at=email.indexOf("@");
		let dt=email.lastIndexOf(".");
		let len=email.length;
		
		if((at<2)||(dt-at<2)||(len<2)){
			alert("please Enter valid Email address !!!");
			return false;
		}
		return true;
	}
	function validatePassword(){
		let pass= document.getElementById("txtPassword").value;
		let cpass= document.getElementById("txtConfirmPassword").value;
		
		let lenpass= pass.length;
		if((lenpass<=5)||(pass!=cpass)){
			alert("Your password is Weak or Confirm password won't match with password !!!")
			return false;
		}
		return true;
		
	}
	
	function validateAll(){
		if(validateemail()&& validatePassword()){
		}else{
			event.preventDefault();
		}
	}

</script>
</head>

<body>
	<div class="scroll-bar">
		<div class="main">
			<div class="logo"><a href="Home.html"><img src="elegant-cars-low-resolution-logo-white-on-transparent-background.png" class="logo"/></a></div>
			<div class="center">
				<h1>Sign Up</h1>
				<form method="post" action="Signuphandler.php">
					<div class="txt_field">
						<input type="text" name="txtName" required>
						<span></span>
						<label>Name</label>
					</div>
					<div class="txt_field">
						<input type="email" id="txtemail" name="txtEmail" required>
						<span></span>
						<label>Email</label>
					</div>
					<div class="txt_field">
						<input type="text" id="txtnumber" name="txtContactNo" required>
						<span></span>
						<label>Contact Number</label>
					</div>
					<div class="txt_field">
						<input type="password" required id="txtPassword" name="txtPassword">
						<span></span>
						<label>Password</label>
					</div>
					<div class="txt_field">
						<input type="password" required id="txtConfirmPassword">
						<span></span>
						<label> Confirm Password</label>
					</div>
					<input type="submit" value="Sign Up" name="btnSubmit" onClick="validateAll()">
					<div class="login_link">
					You are a member? <a href="Login.php">Login</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<footer>
		<div class="bottom">
			<center>
				<span class="credits">Created By<a href="#"> Thanujan</a> | </span>
				<span class="far fa-copyright"></span><span>2023 All Rights Reserved.</span>
			</center>
		</div>
	</footer>
</body>
</html>
