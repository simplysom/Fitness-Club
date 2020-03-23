
<?php  
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cart</title>
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
    background-color: black !important;
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
}
@media (min-width: 30px) {
  .navbar-nav > li > a {
    /* (80px - line-height of 27px) / 2 = 26.5px */
    padding-top: 26.5px;
    padding-bottom: 26.5px;
    line-height: 27px;
    background-color: black !important;
  }
/*#nav{
	background-color: black !important;
}
*/


   </style>
</head>
<body>
	
</head>
<body>
	 <nav class="navbar navbar-expand-md bg-dark navbar-dark " id="nav">
  <!-- Brand -->
  <a class="navbar-brand" href="landingpage.php" style="color:white;font-size: 30px; font-weight: 700;font-family: 'Oswald', sans-serif;">Fitness<span style="color:red">Club</span></a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Products</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="#">Categories</a>
      </li> -->
      <!-- <li class="nav-item">
        <a class="nav-link" href="checkout.php">Checkout</a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link active" href="cart.php"><i class="fa fa-shopping-cart"></i> <span id="cart-item" class="badge badge-danger"></span></a>
      </li>
    </ul>
  </div>
</nav>
<div class="container">
	<div class="row justify-content-center">
		<div class="col-lg-10">
			<div style="display:<?php if(isset($_SESSION['showAlert'])){echo $_SESSION['showAlert'];
			}else {echo 'none';} unset($_SESSION['showAlert']); ?>"class="alert alert-success alert-dismissible mt-3">
				  <button type="button" class="close" data-dismiss="alert">&times;</button>
				  <strong><?php if(isset($_SESSION['message'])){echo $_SESSION['message'];
			} unset($_SESSION['showAlert']); ?></strong>
				</div>

			<div class="table-responsive mt-2">
				<thead>
					<table class="table table-bordered table-striped text-center">
					<tr>
						<td colspan="7">
							<h4 class="text-center text-info m-0">
								Products in your cart
							</h4>
						</td>
					</tr>
					<tr>
						<th>ID</th>
						<th>Image</th>
						<th>Name</th>
						<th>Price</th>
						<th>Quantity</th>
						<th>Total Price</th>
						<th><a href="action.php?clear=all" class="badge-danger badge p-1" onclick="return confirm('Are you sure you want to clear your cart?');"><i class="fa fa-trash"></i>&nbsp;&nbsp;Clear cart</a></th>
					</tr>
				</thead>
				<tbody>
					<?php 
					require 'config.php';
					$stmt=$conn->prepare("SELECT * FROM cart");
					$stmt->execute();
					$result= $stmt->get_result();
					$grand_total=0;
					while ($row = $result->fetch_assoc()):
					?>
					<tr>
						<td><?= $row['id'] ?></td>
						<input type="hidden" class="pid" value="<?= $row['id'] ?>">
						<td><img src="<?= $row['product_image'] ?>" width="50"></td>
						<td><?= $row['product_name'] ?></td>
						<td>Rs&nbsp;&nbsp;<?= number_format($row['product_price'],2); ?></td>
						<input type="hidden" class="pprice" value="<?= $row['product_price'] ?>" >
						<td><input type="number" class="form-control itemQty" value="<?= $row['qty'] ?>" style="width: 75px;"></td>
						<td>Rs&nbsp;&nbsp;<?= number_format($row['total_price'],2); ?></td>
						<td><a href="action.php?remove=<?= $row['id'] ?>" class="text-danger lead" onclick="return confirm('Are you sure you want to remove this item?');"><i class="fa fa-trash"></i></a></td>

					</tr>
					<?php $grand_total +=$row['total_price']; ?>
				<?php endwhile; ?>
				<tr>
					<td colspan="3">
						<a href="index.php" class="btn btn-success"><i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;Continue Shopping</a>
					</td>
					<td colspan="2"><strong>Grand Total</strong></td>
					<td><b>Rs&nbsp;&nbsp;<?= number_format($grand_total,2); ?></b></td>
					<td>
						<a href="checkout.php" class="btn btn-info <?= ($grand_total>1)?"":"disabled"; ?>"><i class="fa fa-credit-card"></i>&nbsp;&nbsp;Checkout</a>
					</td>
				</tr>
				</tbody>
				</table>
			</div>
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
		
		$(".itemQty").on('change',function(){
			var $el= $(this).closest('tr');

			var pid=$el.find(".pid").val();
			var pprice=$el.find(".pprice").val();
			var qty=$el.find(".itemQty").val();
			location.reload(true);
			console.log(qty);
			$.ajax({
				url:'action.php',
				method:'post',
				cache: false,
				data : {qty:qty,pid:pid,pprice:pprice},
				success:function(response){

					console.log(response);
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