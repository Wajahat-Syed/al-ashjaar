

<?php include 'header.php';
	  include 'includes/dbcon.php';
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
					        <form method="POST" action="modules.php">
							  <div class="form-group">
							    <label >Job title</label>
							    <input type="text" name="jobTitle" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter email">
							  </div>
							  <div class="form-group">
							    <label >No. of jobs</label>
							    <input type="number" name="qty" class="form-control" id="" placeholder="Password">
							  </div>
							  <div class="form-group">
							    <label >Country</label>
							    <input type="text" name="country" class="form-control" id="" placeholder="Password">
							  </div>
							  <div class="form-group">
							    <label >Salary</label>
							    <input type="text" name="salary" class="form-control" id="" placeholder="Password">
							  </div>
							  
							  <button type="submit" class="btn btn-primary mx-auto d-block ">Submit</button>
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
					  </tbody>
					</table>

					<!-- openings table end -->
				  </div>
				  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
				  	<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
				  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
				  	<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				  </div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include 'footer.php' ?>
<?php
	$
 ?>