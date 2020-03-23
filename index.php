<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Shopping Cart</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
    @import url('https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap');
     .navbar {
  min-height: 80px;
}

.navbar-brand {
  padding: 0 15px;
  height: 80px;
  line-height: 80px;
}

.navbar-toggle {
  /* (80px - button height 34px) / 2 = 23px */
  margin-top: 23px;
  padding: 9px 10px !important;
}

@media (min-width: 768px) {
  .navbar-nav > li > a {
    /* (80px - line-height of 27px) / 2 = 26.5px */
    padding-top: 26.5px;
    padding-bottom: 26.5px;
    line-height: 27px;
  }
  .navbar-default {
  background-color:black;
  background-image: none;
  background-repeat: no-repeat;
 }
 .navbar-default .navbar-nav>li>a {
    color:white;
}
body {
    font-family: 'Oswald', sans-serif;
    font-size: 16px;
}
.bg-dark{
	color: black;
	background-color: black !important;
}


   </style>
</head>
<body>
	
</head>
<body>
	 <nav class="navbar navbar-expand-md bg-dark navbar-dark ">
  <!-- Brand -->
  <a class="navbar-brand" href="index.php" style="color:white;font-size: 30px; font-weight: 700;font-family: 'Oswald', sans-serif;">Fitness<span style="color:red">Club</span></a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
       <li class="nav-item">
        <a class="nav-link active" href="landingpage.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="equipment.php">Our Equipment</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="index.php">Products</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="#">Categories</a>
      </li> -->
      <!-- <li class="nav-item">
        <a class="nav-link" href="checkout.php">Checkout</a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="cart.php"><i class="fa fa-shopping-cart"></i> <span id="cart-item" class="badge badge-danger"></span></a>
      </li>
    </ul>
  </div>
</nav>
<div class="container">
	<div id="message"></div>
	<div class="row mt-3 pb-3">
		<?php 
			include 'config.php';
			$stmt= $conn->prepare("SELECT * FROM product");
			$stmt->execute();
			$result=$stmt->get_result();
			while ($row= $result->fetch_assoc()):
		 ?>
		 <div class="col-sm-6 col-md-4 col-lg-3 mb-2">
		 	<div class="card-deck">
		 		<div class="card p-2 border-secondary mb-2">
		 			<img src="<?= $row['product_image'] ?>" class="card-img-top" height="250">
		 			<div class="card-body p-1">
		 				<h4 class="card-title text-center text-info"><?= $row['product_name'] ?></h4>
		 				<h5 class="card-text text-center text-danger">Rs <?= number_format($row['product_price'],2) ?>/-</h5>
		 			</div>
		 			<div class="card-footer p-1">
		 				<form action="" class="form-submit">
		 					<input type="hidden" class="pid" value="<?= $row['id'] ?>">
		 					<input type="hidden" class="pname" value="<?= $row['product_name'] ?>">
		 					<input type="hidden" class="pprice" value="<?= $row['product_price'] ?>">
		 					<input type="hidden" class="pimage" value="<?= $row['product_image'] ?>">
		 					<input type="hidden" class="pcode" value="<?= $row['product_code'] ?>">
		 					<button class="btn btn-info btn-block addItemBtn"><i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;Add to cart</button>

		 				</form>
		 				
		 			</div>
		 		</div>
		 	</div>
		 </div>
		<?php endwhile; ?>
	</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$(".addItemBtn").click(function(e){
			e.preventDefault();
			var $form=$(this).closest(".form-submit");
			var pid =$form.find(".pid").val();
			var pname =$form.find(".pname").val();
			var pprice =$form.find(".pprice").val();
			var pimage =$form.find(".pimage").val();
			var pcode =$form.find(".pcode").val();

			$.ajax({
				url: 'action.php',
				method: 'post',
				data: {pid:pid,pname:pname,pprice:pprice,pimage:pimage,pcode:pcode},
				success:function(response){
					$("#message").html(response);
					window.scrollTo(0,0);
					load_cart_item_number();
				}
			})
		});
		load_cart_item_number();
		function load_cart_item_number(){
			$.ajax({
				url: 'action.php',
				method: 'get',
				data: {cartItem:"cart_item"},
				success:function(response){
					$("#cart-item").html(response);

				}
			})
		}
	});
</script>
</body>
</html>