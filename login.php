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
					      <button class="btn btn-outline-success bg-success my-2 mr-2  my-sm-0" type="button"><a class="btn text-white" href="login.php"> Login</a></button>
					      <button class="btn btn-outline-success bg-success my-2  my-sm-0" type="button"><a class="btn text-white" href="login.php"> Logout</a></button>
					  </form>
				  </div>
				</nav>
			</div>
		</div>
	</div>
</section>
<!-- header end -->
<!-- admin login form -->

<section class="login">
	<div class="container">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<h1 class="display-5 text-center">Login</h1>
				<form method="post" action="modules.php">
				  <div class="form-group">
				    <label>User name</label>
				    <input type="text" class="form-control" name="uid" placeholder="Enter username">
				  </div>
				  <div class="form-group">
				    <label>Password</label>
				    <input type="password" class="form-control" name="pwd" placeholder="Password">
				  </div>
				  <div class="form-check">
				  </div>
				  <div class="text-center mt-4">
					  <button type="submit" name="login-submit" class="btn btn-primary ">Submit</button>
				  </div>
				</form>
			</div>
			<div class="col-md-3">
			</div>
		</div>
	</div>
</section>
<!-- admin login form  end -->

<?php include 'footer.php';?>