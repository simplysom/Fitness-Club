<html>
<head>
	<title>Gym Website</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   <link rel="stylesheet" type="text/css" href="style.css">
<style>
<!-- /*  <?php include 'style.css';

$con=new mysqli('localhost','root','','cart_system');

if (isset($_POST['login'])) {
  # code...

$Username=$_POST['user'];
$password=$_POST['pass'];

$Username=mysqli_real_escape_string($con,$Username);
$password=mysqli_real_escape_string($con,$password);

$s = " SELECT * FROM users WHERE Username='{$Username}' password ='{$password}'";
$user_query=mysqli_query($con,$s);

$fetch_query=mysqli_fetch_array($user_query);

if ($fetch_query!=null) {
    # code...
  $db_Username=$fetch_query['Username'];
  $db_password=$fetch_query['password'];

  if ($db_Username==$Username && $db_password==$password) {
    echo "Logged In";
    # code...
  }
  else{
    echo "Incorrect";
  }
  }
 
else{
  echo "check the credentials";
}
}
?>*/ --> 
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
		<div class="signin">
			<form action="#" method="post">
				<h2>Login</h2><br>
				<input type="text" name="user" placeholder="Username"  required><br><br>
				<input type="password" name="pass" id="myInput" minlength="8" placeholder="Password" required>
<input type="checkbox" onclick="myFunction()"><br><br>

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
				 <div id="gymfit">
          <a href="forgot.php" style="font-family: 'Play',sans-serif">&nbsp;forgot Password
        </a>
        <!-- 	<a href="re.html" style=" margin-right: 0px; font-size: 13px; font-family: Tahoma,Geneva,sans-serif;">Reset Password?   
					</a> -->
					
				</div><br><br>
        <button name="login" value="submit"><a href="landingpage.php">Submit</a></button><!-- input type="submit" name="login" value="submit"> --></a><br><br>
				New User?<a href="signup.php" style="font-family: 'Play',sans-serif">&nbsp;Register Here
				</a>				
			</form>
		</div>
	</header> 
    <?php

$con=new mysqli('localhost','root','','cart_system');

if (isset($_POST['login'])) {
  # code...

$Username=$_POST['user'];
$password=$_POST['pass'];

$Username=mysqli_real_escape_string($con,$Username);
$password=mysqli_real_escape_string($con,$password);

$s = " SELECT * FROM users WHERE Username='{$Username}' password ='{$password}'";
$user_query=mysqli_query($con,$s);

$fetch_query=mysqli_fetch_array($user_query);
$count = mysqli_num_rows($user_query);
if ($count==1) {
    # code...
  $db_Username=$fetch_query['Username'];
  $db_password=$fetch_query['password'];

  if ($db_Username==$Username && $db_password==$password) {
    echo "Logged In";
    # code...
  }
  else{
    echo "Incorrect";
  }
  }
 
else{
  echo "check the credentials";
}
}
?>
</body>
</html>