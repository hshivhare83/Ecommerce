<?php
session_start();
 ?>

<!DOCTYPE html>
<html>
<head><title>E-Store | Electronic Goods Dealers</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<style type="text/css">
	

</style>
</head>
<body style="font-family: Montserrat">
<?php
if(!isset($_SESSION['id'])){ 
	require 'header_logged_out.php';
	?>




<div class="container" style="margin-top: 80px; margin-bottom: 100px">
	<div class="row row-style-login-page-pannel">
		<div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading">Mobile 1</div>
				<div class="panel-body">
					
					<img  class="img-responsive"  src="images\a1.jpg">
					<b> Apple Iphone X 64Gb (Certified Refurbished)  <br></b>Price:77,999/-
					<button class="btn btn-primary form-control" type="button" value="Submit" data-toggle="modal" data-target="#pz" name="btn">Order Now!</button>


				</div>
			</div>
		</div>	

		<div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading">Mobile 2</div>
				<div class="panel-body">
					<!--put mobile phone pics and its specifications in this box in all pannels. -->
					<img  class="img-responsive" src="images\m2.jpg">
					<b>Nokia Numeric keypad,2MP Camera  <br></b>Price:8,459/-
					<button class="btn btn-primary form-control" type="button" value="Submit"  name="btn" data-toggle="modal" data-target="#pz">Order Now!</button>


				</div>
			</div>
		</div>

		<div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading">Mobile 3</div>
				<div class="panel-body" >
					<!--put mobile phone pics and its specifications in this box in all pannels. -->
				<img  class="img-responsive" src="images\m5.jpg">
					<b> BlackBerry OS 7.1, 806 MHz Tavor MG1<br></b>Price:4,500/-
					<button class="btn btn-primary form-control" type="button" value="Submit"  name="btn" data-toggle="modal" data-target="#pz">Order Now!</button>


				</div>
			</div>
		</div>	

		<div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading">Mobile 4</div>
				<div class="panel-body" >
					<!--put mobile phone pics and its specifications in this box in all pannels. -->
					<img  class="img-responsive" src="images\a2.jpg">
					<b>  vivo Z5, 64GB/4G<br></b>Price:16,000/-
					<button class="btn btn-primary form-control" type="button" value="Submit"  name="btn" data-toggle="modal" data-target="#pz">Order Now!</button>


				</div>
			</div>
		</div>	

		<div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading">Mobile 5</div>
				<div class="panel-body" >
					<!--put mobile phone pics and its specifications in this box in all pannels. -->
					<img  class="img-responsive" src="images\m4.jpg">
					<b>  Vivo V9+ (Pearl Black, 64 GB)  (4 GB RAM) <br></b>Price:22,999/-
					<button class="btn btn-primary form-control" type="button" value="Submit"  name="btn" data-toggle="modal" data-target="#pz">Order Now!</button>


				</div>
			</div>
		</div>	

		<div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading">Mobile 6</div>
				<div class="panel-body">
					<!--put mobile phone pics and its specifications in this box in all pannels. -->
					<img  class="img-responsive" src="images\m6.jpg">
					<b>  Tecno spark 15 Pro (Opal White,32 GB) <br></b>Price:12,500/-

					<button class="btn btn-primary form-control" type="button" value="Submit"  name="btn" data-toggle="modal" data-target="#pz">Order Now!</button>


				</div>
			</div>
		</div>	
	</div>
</div>
<!-- 1 PANNEL ENDS-->

<div style="background-color: #333; color:white ;">
<?php require 'foot.php' ?>
</div>



<?php } else { 
	require 'header_logged_in.php'; 
?>

<div  class="container" style="margin-top: 60px;">
<b>

</b>
</div>

<!-- 2 PANNEL begins-->
<div class="container" style="margin-top: 50px; margin-bottom: 100px">
	<div class="row row-style-login-page-pannel">
		<div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading"># 1</div>
				<div class="panel-body">
					<!--put mobile phone pics and its specifications in this box in all pannels. -->
				<img  class="img-responsive"  src="images\a1.jpg">
					<b> Apple Iphone X 64Gb (Certified Refurbished)  <br></b>Price:77,999/-
					<button class="btn btn-primary form-control" type="button" value="Submit"  name="btn" data-toggle="modal" data-target="#all">Add to Cart</button>


				</div>
			</div>
		</div>	

		<div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading"># 2</div>
				<div class="panel-body">
					<!--put mobile phone pics and its specifications in this box in all pannels. -->
				<img  class="img-responsive" src="images\m2.jpg">
					<b>Nokia Numeric keypad,2MP Camera  <br></b>Price:8,459/-
					<button class="btn btn-primary form-control" type="button" value="Submit"  name="btn" data-toggle="modal" data-target="#all">Add to Cart</button>


				</div>
			</div>
		</div>

		<div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading"># 3</div>
				<div class="panel-body" >
					<!--put mobile phone pics and its specifications in this box in all pannels. -->
					<img  class="img-responsive" src="images\m5.jpg">
					<b> BlackBerry OS 7.1, 806 MHz Tavor MG1<br></b>Price:4,500/-
					<button class="btn btn-primary form-control" type="button" value="Submit"  name="btn" data-toggle="modal" data-target="#all">Add to Cart</button>


				</div>
			</div>
		</div>	

		<div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading"># 4</div>
				<div class="panel-body" >
					<!--put mobile phone pics and its specifications in this box in all pannels. -->
			<img  class="img-responsive" src="images\a2.jpg">
					<b>  vivo Z5, 64GB/4G<br></b>Price:16,000/-
					<button class="btn btn-primary form-control" type="button" value="Submit"  name="btn" data-toggle="modal" data-target="#all">Add to Cart</button>


				</div>
			</div>
		</div>	

		<div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading"># 5</div>
				<div class="panel-body" >
					<!--put mobile phone pics and its specifications in this box in all pannels. -->
			<img  class="img-responsive" src="images\m4.jpg">
					<b>  Vivo V9+ (Pearl Black, 64 GB)  (4 GB RAM) <br></b>Price:22,999/-
					<button class="btn btn-primary form-control" type="button" value="Submit"  name="btn" data-toggle="modal" data-target="#all">Add to Cart</button>


				</div>
			</div>
		</div>	

		<div class=" col-md-4 col-sm-6 col-xs-12">
			<div class="panel panel-default">
				<div class="panel-heading"># 6</div>
				<div class="panel-body">
					<!--put mobile phone pics and its specifications in this box in all pannels. -->
					<img  class="img-responsive" src="images\m6.jpg">
					<b>  Tecno spark 15 Pro (Opal White,32 GB) <br></b>Price:12,500/-
					<button class="btn btn-primary form-control" type="button" value="Submit"  name="btn" data-toggle="modal" data-target="#all">Add to Cart</button>


				</div>
			</div>
		</div>	
	</div>
</div>
<!--2 PANNEL ENDS-->

<?php } ?>

<?php require 'login_modal.php'; ?>
<?php require 'add_to_cart.php'; ?>


</body>
</html>