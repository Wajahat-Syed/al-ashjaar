<?php include 'header.php'; ?>

<section class="jobs-table">
	<div class="container">
		<div class="row">
			<div class="col">
				<h1>Current Openings</h1>
				<table class="table mt-4">
				  <thead class="thead-dark">
				    <tr>
				      <th scope="col">Job Title</th>
				      <th scope="col">Qty</th>
				      <th scope="col">Country</th>
				      <th scope="col">Salary</th>
				      <th></th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <th scope="row">Driver</td>
				      <td>20</td>
				      <td>Saudi</td>
				      <td>1800 SR</td>
				      <td><button class="btn btn-sm btn-success" data-toggle="modal" data-target="#exampleModalCenter">Interested</button></td>
						
				    </tr>
				     <tr>
				      <th scope="row">Helper</td>
				      <td>5</td>
				      <td>Dubai</td>
				      <td>1750 R</td>
				      <td><button class="btn btn-sm btn-success" data-toggle="modal" data-target="#exampleModalCenter">Interested</button></td>
				    </tr>
				     <tr>
				      <th scope="row">Chef</td>
				      <td>3</td>
				      <td>Riyadh, Saudi</td>
				      <td>1900 R</td>
				      <td><button class="btn btn-sm btn-success" data-toggle="modal" data-target="#exampleModalCenter">Interested</button></td>
				    </tr>
				     <tr>
				      <th scope="row">Welder</td>
				      <td>17</td>
				      <td>USA</td>
				      <td>$ 3000</td>
				      <td><button class="btn btn-sm btn-success" data-toggle="modal" data-target="#exampleModalCenter">Interested</button></td>
				    </tr>
				    <tr>
				      <th scope="row">Painter</td>
				      <td>12</td>
				      <td>Jordan</td>
				      <td>4500</td>
				      <td><button class="btn btn-sm btn-success" data-toggle="modal" data-target="#exampleModalCenter">Interested</button></td>
				    </tr>
				    <tr>
				      <th scope="row">Sweeper</td>
				      <td>6</td>
				      <td>Madina, Saudi</td>
				      <td>2200 SR</td>
				      <td><button class="btn btn-sm btn-success" data-toggle="modal" data-target="#exampleModalCenter">Interested</button></td>
				    </tr>
				  </tbody>
				</table>
				<!-- Modal -->
						<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
						  <div class="modal-dialog modal-dialog-centered" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="exampleModalLongTitle">Send us your resume</h5>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body">
						        <form>
								  <div class="form-group">
								    <label>Name</label>
								    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
								  </div>
								  <div class="form-group">
								    <label >Phone</label>
								    <input type="phone" class="form-control" id="exampleInputPassword1" placeholder="Enter phone number">

								    <input type="file" class="form-control-file mt-4">
								  </div>
								  <button type="submit" class="btn btn-primary d-block mx-auto">Send</button>
								</form>
						      </div>
						    </div>
						  </div>
						</div>
				<!-- modal end  -->
			</div>
		</div>
	</div>
</section>

<?php include 'footer.php'; ?>