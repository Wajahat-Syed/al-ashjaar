

<?php include 'header.php';
	  include 'includes/dbcon.php';
	  // error_reporting(0);
 ?>
 
<section class="admin-view">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
				  <li class="nav-item">
				    <a class="nav-link active bg-info text-white mr-2" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">openings</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link bg-dark text-white mr-2" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">walkin</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link bg-success text-white" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">who applied</a>
				  </li>
				</ul>
				<div class="tab-content" id="myTabContent">
				  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
				  	<!-- Button trigger modal -->
				  	<button class="btn btn-primary mt-4" data-toggle="modal" data-target="#exampleModalCenter">Add openings</button>

					<!-- Modal -->
					<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					  <div class="modal-dialog modal-dialog-centered" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLongTitle">Add openings</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					        <!-- form for adding current openings -->
					        <form method="POST" action="modules.php?nonsense=1">
							  <div class="form-group">
							    <label >Job title</label>
							    <input type="text" name="jobtitle" class="form-control" id="" aria-describedby="emailHelp" placeholder="title">
							  </div>
							  <div class="form-group">
							    <label >No. of jobs</label>
							    <input type="number" name="qty" class="form-control" id="" placeholder="qty">
							  </div>
							  <div class="form-group">
							    <label >Country</label>
							    <input type="text" name="country" class="form-control" id="" placeholder="country">
							  </div>
							  <div class="form-group">
							    <label >Salary</label>
							    <input type="text" name="salary" class="form-control" id="" placeholder="salary">
							  </div>
							  
							  <button type="submit" name="addjob-btn" class="btn btn-primary mx-auto d-block ">Submit</button>
							</form>
					        <!-- form end -->
					      </div>
					      
					    </div>
					  </div>
					</div>
					<!-- modal end -->
					<!-- openings table -->
					<table class="table mt-4">
					  <thead class="thead-dark">
					    <tr>
					      <th scope="col">job title</th>
					      <th scope="col">vacancy</th>
					      <th scope="col">country</th>
					      <th scope="col">salary</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <th scope="row">Painter</th>
					      <td>2</td>
					      <td>usa</td>
					      <td>18000</td>
					    </tr>
					    <tr>
					      <th scope="row">Doctor</th>
					      <td>2</td>
					      <td>usa</td>
					      <td>18000</td>
					    </tr>
					    <tr>
					      <th scope="row">Helper</th>
					      <td>2</td>
					      <td>usa</td>
					      <td>18000</td>
					    </tr>
					    <tr>
					      <th scope="row">Welder</th>
					      <td>2</td>
					      <td>usa</td>
					      <td>18000</td>
					    </tr>
					  </tbody>
					</table>

					<!-- openings table end -->
				  </div>
				  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
				  	<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
				  	<!-- Button trigger modal -->
				  	<button class="btn btn-primary mt-4" data-toggle="modal" data-target="#Schedule">Schedule Walkin</button>

					<!-- Modal -->
					<div class="modal fade" id="Schedule" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					  <div class="modal-dialog modal-dialog-centered" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLongTitle">Schedule interview</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
					        <!-- form for adding current openings -->
					        <form method="POST" action="modules.php?nonsense=1">
							  <div class="form-group">
							    <label >Job title</label>
							    <input type="text" name="jobtitle" class="form-control" id="" aria-describedby="emailHelp" placeholder="title">
							  </div>
							  <div class="form-group">
							    <label >Time</label>
							    <input type="text" name="qty" class="form-control" id="" placeholder="Enter time">
							  </div>
							  <div class="form-group">
							    <label >Venue</label>
							    <input type="text" name="country" class="form-control" id="" placeholder="Enter Venue">
							  </div>
							  
							  <button type="submit" name="addjob-btn" class="btn btn-primary mx-auto d-block ">Submit</button>
							</form>
					        <!-- form end -->
					      </div>
					      
					    </div>
					  </div>
					</div>
					<!-- modal end -->
					<!-- interview table -->
					<table class="table mt-4">
					  <thead class="thead-dark">
					    <tr>
					      <th scope="col">job title</th>
					      <th scope="col">Time</th>
					      <th scope="col">Venue</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <th scope="row">Painter</th>
					      <td>2:30 pm</td>
					      <td>zakir nagar gali no.7</td>
					    </tr>
					    <tr>
					      <th scope="row">Doctor</th>
					      <td>2:00 pm</td>
					      <td>zakir nagar gali no.7</td>
					    </tr>
					    <tr>
					      <th scope="row">Helper</th>
					      <td>2</td>
					      <td>zakir nagar gali no.7</td>
					    </tr>
					    <tr>
					      <th scope="row">Welder</th>
					      <td>2</td>
					      <td>zakir nagar gali no.7</td>
					    </tr>
					  </tbody>
					</table>

					<!-- interview table end -->
				  </div>
				</div>
				  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
				  	<!-- who applied table -->
					<table class="table mt-4">
					  <thead class="thead-dark">
					    <tr>
					      <th scope="col">Name</th>
					      <th scope="col">Phone</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <th scope="row">Adil Saifi</th>
					      <td>988557621</td>
					    </tr>
					    <tr>
					      <th scope="row">Rauf</th>
					      <td>4585756421</td>
					    </tr>
					    <tr>
					      <th scope="row">Sameer khan</th>
					      <td>9668572152</td>
					    </tr>
					    <tr>
					      <th scope="row">Kaleemullah Khan</th>
					      <td>7586895412</td>
					    </tr>
					  </tbody>
					</table>

					<!-- who applied table end -->
				  </div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include 'footer.php' ?>
<?php
	$jobtitle = $_POST['jobtitle'];
	$qty = $_POST['qty'];
	$country = $_POST['country'];
	$salary = $_POST['salary'];

	if(isset($_POST['addjob-btn'])){

		$query = "INSERT INTO openings( jobTitle, numberOfJobs, country, salary) VALUES ('$jobtitle', '$qty', '$country', '$salary')";
		mysqli_query($conn, $query);

	}


 ?>