<?php 
	require 'config.php';

	$grand_total=0;
	$allItems = '';
	$items = array();

	$sql="SELECT CONCAT(product_name, '(',qty,')') AS ItemQty, total_price FROM cart";
	$stmt= $conn->prepare($sql);
	$stmt->execute();
	$result= $stmt->get_result();
	while($row = $result->fetch_assoc()){
		$grand_total +=$row['total_price'];
		$items[] = $row['ItemQty'];

	}
	$allItems= implode(",", $items);
	

 ?>
 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Checkout</title>
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
        <a class="nav-link active" href="index.php">Products</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="#">Categories</a>
      </li> -->
    <!--   <li class="nav-item">
        <a class="nav-link" href="checkout.php">Checkout</a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="cart.php"><i class="fa fa-shopping-cart"></i> <span id="cart-item" class="badge badge-danger"></span></a>
      </li>
    </ul>
  </div>
</nav>
<div class="container">
	<div class="row justify-content-center">
		<div class="col-lg-6 px-4 pb-4" id="order">
			<h4 class="text-center text-info p-2">Complete your order!!</h4>
			<div class="jumbotron p-3 mb-2 text-center">
				<h6 class="lead"><strong>Products(s) : </strong><?= $allItems; ?></h6>
				<h6 class="lead"><strong>Delivery Charge : </strong>Free</h6>
				<h5><b>Total Amount Payable : </b><?= number_format($grand_total,2) ?>/-</h5>
			</div>
			<form action="" method="post" id="placeOrder">
				<input type="hidden" name="products" value="<?= $allItems; ?>">
				<input type="hidden" name="grand_total" value="<?= $grand_total; ?>">
				<div class="form-group">
					<input type="text" name="name" class="form-control" placeholder="Enter Name" required>	
				</div>
				<div class="form-group">
					<input type="email" name="email" class="form-control" placeholder="Enter E-mail" required>	
				</div>
				<div class="form-group">
					<input type="tel" name="phone" class="form-control" placeholder="Enter Phone" required>	
				</div>
				<div class="form-group">
					<textarea name="address" class="form-control" rows="3" cols="10" placeholder="Enter Delivery Address Here ..."></textarea>
				</div>
				<h6 class="text-center lead">Select Payment Mode</h6>
				<div class="form-group">
					<select name="pmode" class="form-control" required>
						<option value="" selected disabled>-Select Payment Mode-</option>
						<option value="cod">Cash on delivery</option>
						<option value="netbanking">Net Banking</option>
						<option value="cards">Debit/Credit Card</option>
					</select>
				</div>
				<div class="form-group">
					<input type="submit" name="submit" value="Place Order" class="btn btn-danger btn-block">
					<!-- <a href="action.php?clr=all" class="btn btn-danger btn-block" >&nbsp;&nbsp;Clear cart</a> -->
				</div>
				
			</form>
		</div>
	</div>
	
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){

		$("#placeOrder").submit(function(e){
			e.preventDefault();
			$.ajax({
				url: 'action.php',
				method:'post',
				data: $('form').serialize()+"&action=order",
				success: function(response){
					$("#order").html(response);
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