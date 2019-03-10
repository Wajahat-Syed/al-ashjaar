

<?php  include 'includes/dbcon.php';  // error_reporting(0);?>
<!DOCTYPE html>
<html>
<head>
	<title>alAshjaar pvt ltd</title>
	<!-- bootstrap css -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!-- style.css -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- google fonts -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
</head>
<body>
	<!-- header -->
<section class="header">
	<div class="container">
		<div class="row">
			<div class="col">
				<nav class="navbar navbar-expand-lg navbar-dark">
				  <a class="navbar-brand" href="#"> <img src="images/sufiana-white.png" alt=""></a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>

				  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				    <ul class="navbar-nav mr-auto">
				      <li class="nav-item active">
				        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="#">About Us</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="#">Our Clients</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="current-opening.php">Current openings</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="Walkin.php">Walk-in Interview</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="FAQ.php">FAQs</a>
				      </li>
				    </ul>
				      <form class="form-inline my-2 my-lg-0">
					      <button class="btn btn-outline-primary bg-primary mr-2 my-2 my-sm-0" type="button"><a class="btn text-white" href="admin.php">Signup</a></button>
					      <button class="btn btn-outline-success bg-success my-2 mr-2 my-sm-0" type="button"><a class="btn text-white" href="login.php"> Login</a></button>
					      <button class="btn btn-outline-success bg-success my-2 my-sm-0" type="button"><a class="btn text-white" href="login.php"> Logout</a></button>
					  </form>
				  </div>
				</nav>
			</div>
		</div>
	</div>
</section>
<!-- header end -->
 


<?php 
	session_start();
		include 'modules_table.php';
	// if ($_SESSION['isLogin'] && $_SESSION['isLogin'] != '') {
	// }
?>

<?php include 'footer.php' ?>

 <script type="text/javascript">
 	if ( window.history.replaceState ) { 
		window.history.replaceState( null, null, window.location.href ); 
	}
 </script>