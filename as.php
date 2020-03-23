<?php 
$con=new mysqli('localhost','root','','gym fitness');
		if (isset($_GET['Save'])) {
	
	$Email=$_POST['Email'];
	$newpass=$_POST['newpass'];
	$cnewpass=$_POST['cnewpass'];

	$Email=mysqli_real_escape_string($con,$Email);
	$s = " SELECT * FROM users WHERE Email='{$Email}";
$user_query=mysqli_query($con,$s);

$fetch_query=mysqli_fetch_array($user_query);

if ($fetch_query!=null) {
	$db_Email=$fetch_query['Email'];
	# code...
			if ($newpass==$cnewpass) {
				$stmt="UPDATE users SET password =('{$password}') WHERE Email = ('{$Email}')";
				$create_user_query=mysqli_query($con,$stmt);
				echo "correct";
				# code...
			}
			else
			{
				echo "password didnot match";
			}
		# code...
	}
}
?>	