<!DOCTYPE html>			
<html>
<head>
	<title>Gym Website</title>
	<meta http-equiv="Content-Type" name="viewport" content="text/html; charset=utf-8"/>
	<link href="forgot.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Play">
	<style>
		<?php include 'forgot.css';
		$con=new mysqli('localhost','root','','cart_system');

 if (isset($_POST['forgot'])) {
 	$Email=$_POST['Email'];
   $stmt_p=$con->prepare("SELECT * FROM users WHERE Email = ? ");
   $stmt_p->bind_param("s",$Email);
   $stmt_p->execute();
   $res=$stmt_p->get_result();

   if ($res->num_rows>0) {
   	   	if (mail($Email, 'reset Password', "Click the link below to reset password. href='http://localhost/project/repass.php? ",'From:fclub3413@gmail.com')) {
   		# code...
   		echo "success";
   	}
   	else{$message = "wrong answer";
echo "<script type='text/javascript'>alert('$message');</script>";

   	}
   }
  	# code...
  }
?>

		#snackbar{
			visibility: hidden;
			min-width: 250px;
			background-color: #fff;
			color: #000;
			text-align: center;
			border-radius: 2px;
			position: fixed;
			z-index: 1;
			top: 30px;
			font-size: 17px;
			margin-right: 50px;
		}

		#snackbar.show{
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
		}
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
	<div class="forgot">
		<form action="#" method="post">
		<h2 align="center" style="color: #fff;">Reset Password</h2>

		<!-- <input type="text" name="Name" placeholder="Name" required><br><br> -->
			<!-- <input type="text" name="user" placeholder="Username" required><br><br> -->
			<h5 style="font-size: 14px;color: skyblue">enter the registered Email. We send the link on your Email to change the password </h5>
			<input type="Email" name="Email" placeholder="Email-ID" required><br><br>
			<input type="submit" name="forgot" value="submit"><br><br>

			<a href="login.php" style="text-decoration: none;">Go Back</a>
		 <!-- <div id="snackbar">Link send on your Email successfully!!</div> --> 
		<!-- <input type="button" value="Send" onclick="myFunction()"/><br /><br />
		 -->

		<script>
		// function myFunction(){
		// 			var x = document.getElementById("snackbar");
		// 			x.className="show";
		// 			setTimeout(function(){ x.className=x.className.replace("show","");},3000)
		// 		}
	</script>
			 <!-- <input type="tel" name="phone" placeholder="contact no." pattern="[0-9]{10}" required><br><br>
			<input type="password" name="pass" id="myInput" placeholder="password" required>
<input type="checkbox" onclick="myFunction()" align="center"><br><br>

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
		<!-- <h5 style="font-size: 14px;color: skyblue">enter the registered Email. We send the link on your Email to change the password </h5> -->
		<!-- <input type="text" name="username" placeholder="Email"><br /><br />
		 -->
	</form>
	</div>
<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
</body>
</html>