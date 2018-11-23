<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <!-- Profile Section -->
    <header class="masthead bg-primary text-white text-center">
      <div class="container">
        <img class="img-fluid mb-5 d-block mx-auto" src="bootstrap/img/profile.png" alt="">
		
        <h1 class="text-uppercase mb-0">Hello, <?php echo $_SESSION['FacultyID']; ?>! Welcome to AEGEN!</h1>
        <h3 class="text-uppercase mb-0">Automated Exam Generator System</h3>
        <hr class="star-light">
		
		<!-- This is where you display the user's details -->
		<?php
			foreach($user as $user)
			{ ?>
			
			<div class="row">		
				<div class="form-group col-lg-4">
					<h5>Faculty ID: </h5>	
					<input type="text" class="form-control form-control-sm" id="FacultyID" style="text-align: center;" value="<?php echo $user['FacultyID']; ?>">
				</div>
				<div class="form-group col-lg-8">
						<h5>Name: </h5>
						<input type="text" class="form-control form-control-sm" id="name" style="text-align: center;" value="<?php echo $user['FName']; ?> <?php echo $user['LName']; ?>">
				</div>	
			</div>
			
			<div class="row">				
				<div class="form-group col-lg-4">
						<h5>Password: </h5>	
						<input type="password" class="form-control form-control-sm" id="password" style="text-align: center;" value="<?php echo $user['Password']; ?>">
						<a href="#changepass" style="color: white;"> Change Password</a>			
				</div>
				<div class="form-group col-lg-4">
						<h5>College: </h5>
						<input type="text" class="form-control form-control-sm" id="college" style="text-align: center;" value="<?php echo $user['College']; ?>">
				</div>
				<div class="form-group col-lg-4">
						<h5>Department: </h5>
						<input type="text" class="form-control form-control-sm" id="department" style="text-align: center;" value="<?php echo $user['Department']; ?>">
				</div>				
			</div>
			<?php } ?>
			
		<div class="row">
			<h5>Course Syllabus</h5>
				<table class="table table-dark table-hover">
				<thead class="thead-dark">
					<tr>
						<th>CSID</th>
						<th>Course Syllabus Title</th>
					</tr>
				</thead>
				<tbody>
				<?php
							foreach($cs as $cs)
								echo "<tr>
									<td>".$cs['CSID']."</td>
									<td>".$cs['CSName']."</td>
									</tr>";
				?>
				</tbody>
			</table>
		</div>
      </div>
    </header>

	
    <!-- Portfolio Grid Section -->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Item Analysis</h2>
        <hr class="star-dark mb-5">
        <div class="row">
			<h5>Fill out the information below:</h5>
		</div>
		<br />
		<form>
		<div class="row">
			<div class="form-group col-lg-2">
			  <label for="csid">CSID:</label>
			  <input type="text" class="form-control" id="csid">
			</div>			
			<div class="form-group col-lg-2">
			  <label for="chapnum">Chapter Number:</label>
			  <input type="text" class="form-control" id="chapnum">
			</div>			 
			<div class="form-group col-lg-8">
			  <label for="chapname">Chapter Name:</label>
			  <input type="text" class="form-control" id="chapname">
			</div>					
		</div>
		<div class="row">		
			<div class="form-group col-lg-8">
			  <label for="topic">Topic:</label>
			  <input type="text" class="form-control" id="topic">
			</div>	
			<div class="form-group col-lg-4">
			  <label for="questiontype">Question Type:</label>
			  <select class="form-control" id="questiontype">
				<option>Multiple Choice</option>
				<option>Identification</option>
				<option>Enumeration</option>
				<option>True or False</option>
				<option>Essay</option>
			  </select>
			</div>
		</div>
		<div class="row">				
			<div class="form-group col-lg-8">
			  <label for="question">Question:</label>
			  <textarea class="form-control" rows="4" id="question"></textarea>
			</div>
			<div class="form-group col-lg-4">
			  <label for="answer">Answer:</label>
			  <input type="text" class="form-control" id="answer">
			</div>
		</div>
		<div class="row">	
				<div class="input_fields_wrap col-lg-6">
					<button class="add_field_button">Add Choices</button>
					<div><input type="text" name="mytext[]"></div>
					<br />
				</div>		
				<div class="form-group col-lg-3">
				  <label for="takers">Number of Takers:</label>
				  <input type="text" class="form-control" id="takers">
				</div>			
				<div class="form-group col-lg-3">
				  <label for="errors">Number of Errors:</label>
				  <input type="text" class="form-control" id="errors">
				</div>
		</div>
		<br />
		<a href="#submit"><button type="submit" class="btn btn-outline-secondary">Submit</button></a>
	  </form>	
      </div>
    </section>

    <!-- About Section -->
    <section class="bg-primary text-white mb-0" id="about">
      <div class="container">
        <h2 class="text-center text-uppercase text-white">Create Questionnaire</h2>
        <hr class="star-light mb-5">
			<form>
			<div class="row">
				<div class="form-group col-lg-6">
				  <label for="csid">CSID:</label>
					<select class="form-control" id="csid">
						<option>IT 101</option>						
						<option>IT 111</option>
						<option>IT 111L</option>						
						<option>IT 121</option>
						<option>IT 121L</option>
					</select>
				</div>
				<div class="form-group col-lg-6"></div>		
			</div>
			<div class="row">
				<div class="col-lg-12">
				<label for="chap">Chapter:</label>
				<ul style="list-style: none;">
					<li>
					  <input type="checkbox" id="option"><label for="option"> Chapter 1: Name of Chapter 1</label>
					  <ul style="list-style: none;">
						<li><label><input type="checkbox" class="subOption"> Topic 1 with A Super Very Long Title</label></li>
						<div class="form-group col-lg-4">
						  <label for="questiontype">Question Type:</label>
						  <select class="form-control" id="questiontype">
							<option>Multiple Choice</option>
							<option>Identification</option>
							<option>Enumeration</option>
							<option>True or False</option>
							<option>Essay</option>
						  </select>
						</div>
						<div class="form-group col-lg-8"></div>	
						<li><label><input type="checkbox" class="subOption"> Topic 2 with A Super Very Long Title</label></li>
						<div class="form-group col-lg-4">
						  <label for="questiontype">Question Type:</label>
						  <select class="form-control" id="questiontype">
							<option>Multiple Choice</option>
							<option>Identification</option>
							<option>Enumeration</option>
							<option>True or False</option>
							<option>Essay</option>
						  </select>
						</div>
						<div class="form-group col-lg-8"></div>	
						<li><label><input type="checkbox" class="subOption"> Topic 3 with A Super Very Long Title</label></li>
							<div class="form-group col-lg-4">
						  <label for="questiontype">Question Type:</label>
						  <select class="form-control" id="questiontype">
							<option>Multiple Choice</option>
							<option>Identification</option>
							<option>Enumeration</option>
							<option>True or False</option>
							<option>Essay</option>
						  </select>
						</div>
						<div class="form-group col-lg-8"></div>	
						<li><label><input type="checkbox" class="subOption"> Topic 4 with A Super Very Long Title</label></li>
						<div class="form-group col-lg-4">
						  <label for="questiontype">Question Type:</label>
						  <select class="form-control" id="questiontype">
							<option>Multiple Choice</option>
							<option>Identification</option>
							<option>Enumeration</option>
							<option>True or False</option>
							<option>Essay</option>
						  </select>
						</div>
						<div class="form-group col-lg-8"></div>	
						<li><label><input type="checkbox" class="subOption"> Topic 5 with A Super Very Long Title</label></li>
						<div class="form-group col-lg-4">
						  <label for="questiontype">Question Type:</label>
						  <select class="form-control" id="questiontype">
							<option>Multiple Choice</option>
							<option>Identification</option>
							<option>Enumeration</option>
							<option>True or False</option>
							<option>Essay</option>
						  </select>
						</div>
						<div class="form-group col-lg-8"></div>	
					  </ul>
					</li>
				 </ul>
				</div>
		</div>
			<br />
		<div class="row">				
				<div class="col-lg-4">
					<a href="#generate"><button type="submit" class="btn btn-secondary btn-block">Generate</button></a>			
				</div>
				<div class="col-lg-4">
					<a href="#save"><button type="submit" class="btn btn-light btn-block">Save</button></a>
				</div>
				<div class="col-lg-4">
					<a href="#cancel"><button type="submit" class="btn btn-dark btn-block">Cancel</button></a>
				</div>
		</div>
		</form>
    </section>

    <!-- Contact Section -->
    <section id="contact">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Archive</h2>
        <hr class="star-dark mb-5">
        <div class="row text-center">
			<h5>Archived Questionnaire:</h5>
				<table class="table table-hover">
				<thead>
					<tr>
						<th>CSID</th>
						<th>File Name</th>
						<th>Date Created</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>IT 101</td>
						<td>IT Fundamentals</td>
						<td>October 9, 2018</td>
						<td><a href="#">View</a> | <a href="#">Print</a> | <a href="#">Delete</a></td>
					</tr>					
					<tr>
						<td>IT 111</td>
						<td>Computer Programming 1, Lec</td>
						<td>October 10, 2018</td>
						<td><a href="#">View</a> | <a href="#">Print</a> | <a href="#">Delete</a></td>
					</tr>					
					<tr>
						<td>IT 111L</td>
						<td>Computer Programming 1, Lab</td>
						<td>October 11, 2018</td>
						<td><a href="#">View</a> | <a href="#">Print</a> | <a href="#">Delete</a></td>
					</tr>					
					<tr>
						<td>IT 121</td>
						<td>Computer Programming 2, Lec</td>
						<td>October 12, 2018</td>
						<td><a href="#">View</a> | <a href="#">Print</a> | <a href="#">Delete</a></td>
					</tr>					
					<tr>
						<td>IT 121L</td>
						<td>Computer Programming 2, Lab</td>
						<td>October 13, 2018</td>
						<td><a href="#">View</a> | <a href="#">Print</a> | <a href="#">Delete</a></td>
					</tr>
				</table>
        </div>
      </div>
    </section>


    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url('bootstrap/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('bootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url('bootstrap/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>
    <script src="<?php echo base_url('bootstrap/endor/magnific-popup/jquery.magnific-popup.min.js') ?>"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?php echo base_url('bootstrap/js/jqBootstrapValidation.js') ?>"></script>
    <script src="<?php echo base_url('bootstrap/js/contact_me.js') ?>"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url('bootstrap/js/freelancer.min.js') ?>"></script>
	<script src="<?php echo base_url('bootstrap/js/checkbox.js') ?>"></script>
	<script src="<?php echo base_url('bootstrap/js/addinput.js') ?>"></script>

  </body>

</html>
