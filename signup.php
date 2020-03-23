<!DOCTYPE html>
<html>
<head>
	<title>Gym Website</title>
	<meta http-equiv="Content-Type" name="viewport" content="text/html; charset=utf-8"/>

	<!-- <link href="css/signup.css" rel="stylesheet" type="text/css"> -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Play">
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="signup.css">
	<style>
		
		/*body{
	font-family: Tahoma,Geneva,sans-serif;
	color: #fff;
	background-color: black;
	background-size: cover;
}

.signup{
	background: rgba(44,62,80,0.4);
	padding: 30px;
	width: 250px;
	margin: auto;
	margin-top: 70px;
	height: 350px;
	margin-left: 180x;
}

form{
	width: 240px;
	text-align: center;
}

input[type=text]{
	width: 240px;
	text-align: center;
	background: transparent;
	border: none;
	border-bottom: 1px solid #fff;
	font-family: 'Play',sans-serif;
	outline: none;
	color: #fff;
}

input[type=button]{
	border: none;
	width: 190px;
	background: grey;
	color: #000;
	font-size: 16px;
	line-height: 25px;
	padding: 10px 0;
	border-radius: 15px;
	cursor: pointer;
}

input[type=button]hover{
	color: #fff;
	background-color: black;
}

h2{
	color: white;
}

a{
	color: yellow;
	text-decoration: blink;
}

a:hover{
	color: skyblue;
}


::placeholder{
	color: aliceblue;
	opacity:0.8;
}



header{
	position: absolute;
	left: 0px;
	top: 0px;
	width: 100%;
	z-index: 10;
	padding: 20px 15px;  
}

header .container{
	display: flex;
	justify-content: space-between;
}

header .logo a{
	font-size: 30px;
	text-decoration: none;
	color: #ffffff;
	font-weight: 700;
}

header .logo a span{
	color: #c11325
}

.container{
	max-width: 1170px;
	margin: auto;
}

.home{
	height: 100vh;
	background-image: url('../image/gym.jpg');
	background-size: cover;
}
		#msg{
			visibility: hidden;
			min-width: 250px;
			background-color: grey;
			color: #000;
			text-align: center;
			border-radius: 2px;
			position: fixed;
			z-index: 1;
			top: 30px;
			font-size: 17px;
			margin-right: 50px;
		}

		#msg.show{
			visibility: visible;
			-webkit-animation:fadein0.5s, fadeout 0.5s 2.5s;
			animation:fadein0.5s, fadeout 0.5s 2.5s;
		}

		@-webkit-keyframes fadein{
			from{top: 0;opacity: 0;}
			to{top: 30px;opacity: 1;}
		}

		@keyframes fadein{
			from{top: 0;opacity: 0;}
			to{top: 30px;opacity: 1;}
		}

		@-webkit-keyframes fadeout{
			from{top: 30px;opacity: 1;}
			to{top: 0;opacity: 0;}
		}

		@keyframes fadeout{
			from{top: 30px;opacity: 1;}
			to{top: 0;opacity: 0;}
		}*/
	</style>
</head>
<body>
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button> -->
      <a class="navbar-brand" href="#" style="color:white;font-size: 30px; font-weight: 700;font-family: Tahoma,Geneva,sans-serif;
}">
        Fitness<span style="color:red"> Club</span>
        <!-- <div class="container">
            <div class="logo">
              <a href="">Fitness <span>Club</span></a>
            </div>
        <div> -->
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
<!--         <li><a href="C:/Users/soumyaprakash/Desktop/webproj/fittness-club.html">Home</a></li>
        <li><a href="C:/Users/soumyaprakash/Desktop/webproj/bmi.html">BMI Calculator</a></li>
        -->
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  </nav>	 

	<header>
		<!-- <div class="container">
			<div class="logo">
				<a href="">Fitness <span>Club</span></a>
			</div>
		</div> -->

	<div class="signup">
		<form action="#" method="post">
			<h2 style="color: white">Register</h2>
			<!-- <input type="text" name="user" placeholder="Username" required><br><br>
				<input type="password" name="pass" id="myInput" required>
<input type="checkbox" onclick="myFunction()"><br><br>
<input type="submit" name="submit" value="send">

<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script> -->
		<input type="text" name="Name" placeholder="Name" required><br><br>
			<input type="text" name="user" placeholder="Username" required><br><br>
			<input type="Email" name="Email" placeholder="Email-ID" required><br><br>
			 <input type="tel" name="phone" pattern="[0-9]{10}" placeholder="Contact no" required><br><br>
			<input type="password" name="pass" id="myInput" minlength="8" placeholder="Password" required>
<input type="checkbox" onclick="myFunction()" align="center"><br><br>
<input type="submit" name="register" value="submit"><br><br>
<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
// function transfer(){
// 	alert("Registered successfully");
// }
</script>
			<!-- <input type="text" name="username" placeholder="First name"><br><br>
			<input type="text" name="username" placeholder="Last name"><br><br>
			<input type="password" name="pass" placeholder="Password"><br><br>
			<input type="password" name="pass" placeholder="Confirm Password"><br><br>
			<input type="text" placeholder="Email address"><br><br>
			<input type="button" value="Sign Up" onclick="myFunction()"><br><br>
				<div id=msg>congratulations you sign up successfully</div>	
			<script>
				function myFunction(){
					var x = document.getElementById("msg");
					x.className="show";
					setTimeout(function(){ x.className=x.className.replace("show","");},3000)
				}
			</script> -->
			Already Registered?<a href="landingpage.php" style="text-decoration: none;font-family: 'Play',sans-serif; color: yellow">&nbsp;Check out our features</a>
		</form>
	</div>
	</header>
	<?php
		$con=new mysqli('localhost','root','','cart_system');
if (isset($_POST['register'])) {
	# code...

	$Name=$_POST['Name'];
$Username=$_POST['user'];
$email=$_POST['Email'];
$password=$_POST['pass'];                    
$phone=$_POST['phone'];
	# code...



 $sql = " SELECT * FROM users WHERE Username ='{$Username}'";
//  $sql->bind_param("s",$Name);
//  $sql->execute();
// $result=$sql->get_result();
// $row=$result->fetch_array(MYSQLI_ASSOC);
$check_query=mysqli_query($con,$sql);
$fetch_query=mysqli_fetch_array($check_query);
 if ($fetch_query!=null) {
    echo "<script type='text/javascript'>alert('existing user');</script>";
}
 else
 {
 	
$stmt="INSERT INTO users (Name, Username, Email, password, phone) VALUES ('{$Name}','{$Username}','{$email}','{$password}','{$phone}' )";
	$create_user_query=mysqli_query($con,$stmt);
	echo "<script type='text/javascript'>alert('Registerd successfully');</script>";
	
}
 } ?>
</body>
</html>
<!--  <?php 
//session_start();

//$con=mysqli_connect('localhost','root','');

//mysqli_select_db($con, 'gym fitness');

//$name=$_POST['user'];
//$pass=$_POST['pass'];

// $="select * from login where name='$name'";

// $result=mysqli_query($con,$s);

// $num=mysqli_num_rows($result);

// if ($num==) {
// 	echo"Username already exists...";
// }
// else
// {
	// $reg="insert into login(name,password) values ('$name','$pass')";
	// mysqli_query($con,$reg);
	// echo"registration successfull";

 ?> -->