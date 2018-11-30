<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <!-- Profile Section -->
    <header class="masthead bg-primary text-white text-center"">
      <div class="container">
        <img class="img-fluid mb-5 d-block mx-auto" src="bootstrap/img/profile.png" alt="">
		
        <h1 class="text-uppercase mb-0" style="color: #66050f;">Hello, <?php echo $_SESSION['FacultyID']; ?>! Welcome to AEGEN!</h1>
        <h3 class="text-uppercase mb-0" style="color: #66050f;">Automated Exam Generator System</h3>
        <hr class="star-light">
		
		<!-- This is where you display the user's details -->
		<?php
			foreach($user as $user)
			{ ?>
			
			<div class="row"  style="color: black;">		
				<div class="form-group col-lg-4">
					<h5>Faculty ID: </h5>	
					<input type="text" class="form-control form-control-sm" id="FacultyID" style="text-align: center;" value="<?php echo $user['FacultyID']; ?>" disabled>
				</div>
				<div class="form-group col-lg-8">
						<h5>Name: </h5>
						<input type="text" class="form-control form-control-sm" id="name" style="text-align: center;" value="<?php echo $user['FName']; ?> <?php echo $user['LName']; ?>" disabled>
				</div>	
			</div>
			
			<div class="row" style="color: black;">				
				<div class="form-group col-lg-4">
						<h5>Password: </h5>	
						<input type="password" class="form-control form-control-sm" id="password" style="text-align: center;" value="<?php echo $_SESSION['password']; ?>" disabled>
						<a href="#changepass" style="color: white;"> Change Password</a>			
				</div>
				<div class="form-group col-lg-4">
						<h5>College: </h5>
						<input type="text" class="form-control form-control-sm" id="college" style="text-align: center;" value="<?php echo $user['College']; ?>" disabled>
				</div>
				<div class="form-group col-lg-4">
						<h5>Department: </h5>
						<input type="text" class="form-control form-control-sm" id="department" style="text-align: center;" value="<?php echo $user['Department']; ?>" disabled>
				</div>				
			</div>
			<?php } ?>
			
		<div class="row" style="color: black;">
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
							foreach($cs as $ccss){
								echo "<tr>
									<td>".$ccss['CSID']."</td>
									<td>".$ccss['CSName']."</td>
									</tr>";
							}
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
		<form action="UserController/save_question" method="get">
		<div class="row">
			<div class="form-group col-lg-2">
			  <label for="csid">CSID:</label>
			  <select class="form-control" id="csid" onchange="get_chapter()" name="CSID">
			  <option></option>
			  <?php
					foreach($cs as $ccss)
						echo "<option value=".$ccss['CSID'].">".$ccss['CSID']."</option>";
			  ?>
				
			  </select>
			</div>			
			<div class="form-group col-lg-2">
			  <label for="chapnum">Chapter Number:</label>
			  <select class="form-control" id="chapnum" name="ChapNum">
			  </select>
			</div>			 
			<div class="form-group col-lg-8">
			  <label for="chapname">Chapter Name:</label>
			  <input type="text" class="form-control" id="chapname" name="ChapName">
			</div>					
		</div>
		<div class="row">		
			<div class="form-group col-lg-8">
			  <label for="topic">Topic:</label>
			  <select class="form-control" id="topic" name="TopicNum">
			  </select>
			</div>	
			<div class="form-group col-lg-4">
			  <label for="questiontype">Question Type:</label>
			  <select class="form-control" id="questiontype" name="QuestionType">
				<option value="Multiple Choice">Multiple Choice</option>
				<option value="Identification">Identification</option>
				<option value="Enumeration">Enumeration</option>
				<option value="True or False">True or False</option>
				<option value="Essay">Essay</option>
			  </select>
			</div>
		</div>
		<div class="row">				
			<div class="form-group col-lg-8">
			  <label for="question">Question:</label>
			  <textarea class="form-control" rows="4" id="question" name="Question"></textarea>
			</div>
			<div class="form-group col-lg-4">
			  <label for="answer">Answer:</label>
			  <input type="text" class="form-control" id="answer" name="Answer">
			</div>
		</div>
		<div class="row">
				<div class="input_fields_wrap col-lg-12" id="choice">
					<button class="add_field_button">Add Choices</button>
					<div><input type="text" name="choice-1"></div>
					<br />
				</div>				
		</div>
			<br />
		<div class="row">
				<h4>Difficulty Index</h4>
		</div>
		<div class="row">
				<div class="form-group col-lg-4">
				  <label for="students">Number of Students:</label>
				  <input type="text" class="form-control" id="students" name="students">
				</div>
				<div class="form-group col-lg-4">
				  <label for="errors">Number of Students with Correct Answers:</label>
				  <input type="text" class="form-control" id="correctstudents" name="CorrectNum">
				</div>
				<div class="col-lg-4">
				  <label for="remarks">Remarks:</label>
				  <input type="text" class="form-control" id="remarks-difficulty" name="remarks">
				</div>
		</div>
			<br />
		<div class="row">
				<h4>Discrimination Index</h4>
		</div>
		<div class="row">		
				<div class="form-group col-lg-2">
				  <label for="highgroup">High Group:</label>
				  <input type="text" class="form-control" id="highgroup" name="highgroup" readonly>
				</div>
				<div class="form-group col-lg-4">
				  <label for="correctstudents">Number of Students with Correct Answer:</label>
				  <input type="text" class="form-control" id="correctstudents-high" name="correctstudents">
				</div>
				<div class="form-group col-lg-2">
				  <label for="lowgroup">Low Group:</label>
				  <input type="text" class="form-control" id="lowgroup" name="lowgroup" readonly>
				</div>
				<div class="form-group col-lg-4">
				  <label for="correctstudents">Number of Students with Correct Answer:</label>
				  <input type="text" class="form-control" id="correctstudents-low" name="correctstudents">
				</div>
		</div>
		<div class="row">
				<div class="col-lg-4">
				  <label for="remarks">Remarks:</label>
				  <input type="text" class="form-control" id="remarks-discrimination" name="remarks">
				</div>		
				<div class="col-lg-4">
					<label></label>
					<a href="#submit"><button type="submit" class="btn btn-secondary btn-block">Save</button></a>			
				</div>				
				<div class="col-lg-4">
					<label></label>
					<a href="#discard"><button type="submit" class="btn btn-dark btn-block">Discard</button></a>			
				</div>
		</div>
	  </form>	
      </div>
    </section>

    <!-- About Section -->
    <section class="bg-primary text-white mb-0" id="about">
      <div class="container">
        <h2 class="text-center text-uppercase" style="color: #66050f;">Create Questionnaire</h2>
        <hr class="star-light mb-5">
			<form style="color: black;">
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
	<script src="<?php echo base_url('bootstrap/js/get_chapter.js') ?>"></script>
	<script src="<?php echo base_url('bootstrap/js/get_chapter_details.js') ?>"></script>
	<script src="<?php echo base_url('bootstrap/js/document_ready.js') ?>"></script>

  </body>

</html>
