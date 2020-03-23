<html>
<head>
	<title>Gym Website</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Play">
   <link href="re.css" rel="stylesheet" type="text/css">
   
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
		<div class="reset">
			<form action="as.php" method="post">
				<h2>Reset Password</h2><br>
				<input type="Email" name="Email" placeholder="Email-ID" required><br><br>
				<input type="password" name="newpass" id="myInput" minlength="8" placeholder="New Password" required>
				<input type="checkbox" onclick="myFunction()"><br><br>
				<input type="password" name="cnewpass" id="myInput" minlength="8" placeholder="Confirm Password" required>
				<input type="checkbox" onclick="myFunction()"><br><br>
				<input type="submit" name="register" value="Save"><br><br><br>

<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
				 
        <a href="login.php" style="text-decoration: none;">Go Back</a>				
			</form>
		</div>
	</header> 
</body>
</html>