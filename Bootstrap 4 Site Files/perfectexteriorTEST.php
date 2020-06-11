<?php  
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Complete Bootstrap 4 Website Layout</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="style.css" rel="stylesheet">
	<script src="main.js"></script>
	<?php include('index.php') ?>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>

</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
  </div>
</nav>

<!--- Image Slider -->

<!--- Jumbotron -->


<!--- Welcome Section -->
<div class="container-fluid padding">
	<div class="row welcome text-center">
		<div class="col-12">
			<h1 class="display-4">Perfect Exterior</h1>

		</div>
		<hr>
		<div class="col-12">
			<p></p>
		</div>
	</div>
</div>


<!--- Three Column Section -->


<!--- Two Column Section -->
<div class="container-fluid padding">
	<div class=" row padding">
		<div class="col-md-12 col-lg-6">
			<h2>Clean every little detail of the exterior!
</h2>
			<p class="row col-lg-6">
3 hrs
Prices vary
<p class="row col-lg-6">Exterior: Wash, Clay, & Seal
Wheels: Degrease, wash, decontaminate, protection dressing
Windows: Clean, dress
Door/Trunk/Hood jams
</p>
Exterior: Wash, Clay, & Seal
Wheels: Degrease, wash, decontaminate, protection dressing
Windows: Clean, dress
Door/Trunk/Hood jams


<p class="row col-lg-6">Price Chart
Vehicle Size Price
XS 10,000円
S 13,000円
M 16,000円
L 19,000円
XL 22,000円</p>
		</div>
		<div class="col-lg-6">
			<img src="img/exterior.jpg" class="img-fluid">
		</div>
		
	</div>
</div>

<!--- Fixed background -->
<div class="row">
<table class="table table-striped table-hover" id="data" class="display">
        <thead>
            <tr>
                <th>Car Make</th>
                <th>Car Size</th>
                
            </tr>
        </thead>
    </table> 
    <tbody>
    	<?php
    	include("index.php");
    	if(isset($POST['submit'])){
    	$name = $_POST['name'];
    	$name = $_POST['name'];
    	$name = $_POST['name'];
    }
    	?>
    </tbody>
</div>

<!--- Emoji Section -->

  
<!--- Meet the team -->



<!--- Cards -->


<!--- Two Column Section -->


<!--- Connect -->
<div class="container-fluid padding">
	<div class="row text-center padding">
		<div class="col-12">
			<h2>Connect</h2>
		</div>
		<div class="col-12 social padding">
			<a href="#"><i class="fab fa-facebook"></i></a>
			<a href="#"><i class="fab fa-twitter"></i></a>
			<a href="#"><i class="fab fa-instagram"></i></a>
			<a href="#"><i class="fab fa-youtube"></i></a>
		</div>
	</div>
</div>

<!--- Footer -->
<footer>
	<div class="container-fluid padding">
		<div class="row text-center">
			<div class="col-md-4">
				<hr class="light">
				<p>58100000000</p>
				<p>email@email</p>
				<p>100street name</p>
				<p>post code</p>
			</div>
			<div class="col-md-4">
				<hr class="light">
				<h5>Our Hours</h5>
				<hr class="light">
				<p>Monday - Friday 6:00am - 6:00pm </p>
				<p>Saturday - Sunday 7:00am - 6:00pm </p>
				
			</div>
			<div class="col-md-4">
				<hr class="light">
				<h5>Service Areas</h5>
				<hr class="light">
				<p>Chiba</p>
				<p>Tokyo</p>
				<p>Saitama</p>
				<p>Ibaraki</p>
				
			</div>
		</div>
	</div>
</footer>




</body>
</html>




?>