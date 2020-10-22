<?php
if(!isset($_SESSION['id'])){  ?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

  
</head>
<body>
<footer>
    <div class="container">
        <div class="row footer-text">
        <div class=" col-md-4 col-xs-12">
            <h3>Information</h3>
            <p><a href="about_us.php">About Us</a><br><a href="contact_us.php">Contact Us</a></p>
            </div>
            
            <div class=" col-md-4 col-xs-12">
            <h3>My Account</h3>
            <p><a data-toggle="modal" data-target="#pz">Login</a><br><a href="signup.php">Sign Up</a></p>
            </div>
            
            <div class=" col-md-4 col-xs-12">
            <h3>Contact Us</h3>
            <p>Contact +91-123-000000</p>
            </div>
        </div>
    </div>
</footer>


</body>
</html>

<?php require 'login_modal.php'; ?>

<?php } ?>