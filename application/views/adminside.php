
    <!-- Header -->
    <header class="masthead bg-primary text-white text-center">
      <div class="container">
        <img class="img-fluid mb-5 d-block mx-auto" src="bootstrap/img/profile.png" alt="">
        <h1 class="text-uppercase mb-0">AEGen</h1>
        <hr class="star-light">
        <h2 class="font-weight-light mb-0" style="font-family: Montserrat;">AUTOMATED EXAM GENERATOR</h2>
      </div>
    </header>

    <!-- Portfolio Grid Section -->
  <section class="portfolio" id="muser">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Manage Users</h2>
        <hr class="star-dark mb-5">
        <div class="row">
          <div class="col-md-6 col-lg-6">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-1">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <h2>Add Users</h2>
                </div>
              </div>
              <img class="img-fluid" src=<?php echo base_url('bootstrap/img/portfolio/cabin.png'); ?> alt="">
            </a>
          </div>
          <div class="col-md-6 col-lg-6">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-2">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <h2>Display Users</h2>
                </div>
              </div>
              <img class="img-fluid" src=<?php echo base_url('bootstrap/img/portfolio/cake.png'); ?> alt="">
            </a>
          </div>
        </div>
      </div>
    </section>
	
	 <section class="portfolio" id="csyllabus">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Manage Course Syllabus</h2>
        <hr class="star-dark mb-5">
        <div class="row">
          <div class="col-md-6 col-lg-6">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-3">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <h2>Add Course Syllabus</h2>
                </div>
              </div>
              <img class="img-fluid" src=<?php echo base_url('bootstrap/img/portfolio/cabin.png'); ?> alt="">
            </a>
          </div>
          <div class="col-md-6 col-lg-6">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-4">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <h2>Edit/Display Course Syllabus</h2>
                </div>
              </div>
              <img class="img-fluid" src=<?php echo base_url('bootstrap/img/portfolio/cake.png'); ?> alt="">
            </a>
          </div>
        </div>
      </div>
    </section>
	
	

    <!-- Footer -->
    <footer class="footer text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Location</h4>
            <p class="lead mb-0">Ayala Blvd. cor. San Marcelino St.
              <br>Ermita, Manila</p>
          </div>
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Around the Web</h4>
            <ul class="list-inline mb-0">
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-google-plus-g"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-twitter"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <h4 class="text-uppercase mb-4">About AEGen</h4>
            <p class="lead mb-0">AEGen (Automated Exam Generator) aims to help professors to create quality exams easily.
             
          </div>
        </div>
      </div>
    </footer>

   

    <!-- This is where you add users -->

    <div class="portfolio-modal mfp-hide" id="portfolio-modal-1">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-10 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Add Users</h2>
			  <hr class="star-dark mb-5">
            </div>
		

			<?php if (isset($_SESSION['success'])) { ?>
				<div class="alert alert-success"> <?php echo $_SESSION['success']; ?></div>
			<?php
			} ?>
			
			<?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
			<form method="POST" action="" class="container" style="font-family: Montserrat;">
			<div class="row">
						<div class="col-md-2">
							<label for="FacultyID"><b>Faculty ID: </b></label>
						</div>
						<div class="col-md-2">
							<input type="text" placeholder="Enter Faculty ID" name="FacultyID" id="FacultyID">
						</div>
						<div class="col-md-8"></div>
						<div class="col-md-12"> <br /></div>
						<div class="col-md-2">
							<label for="LName"><b>Last Name</b></label>
						</div>
						<div class="col-md-2">
							<input type="text" placeholder="Enter Last Name" name="LName">
						</div>
						<div class="col-md-2">
							<label for="FName"><b>First Name</b></label>
						</div>
						<div class="col-md-2">
							<input type="text" placeholder="Enter First Name" name="FName">
						</div>
						<div class="col-md-12"> <br /></div>
						<div class="col-md-2">
							<label for="password"><b>Password</b></label>
						</div>
						<div class="col-md-2">
						<input type="password" placeholder="Enter Password" name="password">
						</div>
						<div class="col-md-2">
							<label for="password"><b>Confirm Password</b></label>
						</div>
						<div class="col-md-2">
						<input type="password" placeholder="Confirm Password" name="password2">
						</div>
						<div class="col-md-12"> <br /></div>
						<div class="col-md-2">
							<label for="College"><b>College</b></label>
						</div>
						<div class="col-md-2">
							<input type="text" placeholder="Enter College" name="college">
						</div>
						<div class="col-md-2">
							<label for="Department"><b>Department</b></label>
						</div>
						<div class="col-md-2">
							<input type="text" placeholder="Enter Department" name="department">
						</div>
					</div>
					 <br /> <br />
				<button type="submit" class="btn" name="addUser">Add User</button>
			</form>
        </div>
      </div>
    </div>
	 </div>

    <!-- This is where you display the list of users -->
	
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-2">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-10 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Display Users</h2>
			  <hr class="star-dark mb-5">
            </div>
			<div class="col-lg-12" style="font-family: Montserrat;">
			
			<!-- List of Professors Section -->
			<section id="portfolio">
				<div class="container">
					<div class="row">
						<table class="table">
							<thead>
								<tr>
									<th>Faculty Id</th>
									<th>Name</th>
									<th>Password</th>
									<th>College</th>
									<th>Department</th>
								</tr>
								
								<?php
								
								if($displaydata->num_rows() > 0)
								{
									foreach($displaydata->result() as $row)
									{
								?>
									<tbody>
									<tr class='clickable-row'>
										<td><?php echo $row->FacultyID; ?></td>
										<td><?php echo $row->FName; ?></td>
										<td><?php echo $row->Password; ?></td>
										<td><?php echo $row->College; ?></td>
										<td><?php echo $row->Department; ?></td>
									</tr>
									</tbody>
								<?php	
									}
								}
								else
								{
								?>
									<tr>
										<td colspan="3"> No Data Found </td>
									</tr>
								<?php
								}
								?>
								
							</thead>
							
							
							</table>
      
    
					</div>
				</div>
			</div>
			</div>
		</section>


   
            </div>
          </div>
        </div>

		    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-3">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-10 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Add Course Syllabus</h2>
			  <hr class="star-dark mb-5">
            </div>
			
			<form action="/action_page.php" class="container" style="font-family: Montserrat;">
			<div class="row">
						<div class="col-md-2">
							<label for="email"><b>CSID: </b></label>
						</div>
						<div class="col-md-2">
							<input type="text" placeholder="Enter Course Syllabus ID" name="email" required>
						</div>
						<div class="col-md-2">
							<label for="email"><b>CS Title: </b></label>
						</div>
						<div class="col-md-4">
							<input type="text" placeholder="Enter Course Syllabus Title" name="email" required>
						</div>
						<div class="col-md-2"></div>
						<div class="col-md-12"> <br /></div>
						<div class="col-md-2">
							<label for="email"><b>No. of Chapter/s</b></label>
						</div>
						<div class="col-md-2">
							<input type="text" placeholder="Enter Number of Chapter/s" name="email" required>
						</div><div class="col-md-8"></div>
						<div class="col-md-12"> <br /></div>
						
						<div class="col-md-2">
							<label for="email"><b>Chapter No.</b></label>
						</div>
						<div class="col-md-2">
							<input type="text" placeholder="Enter Chapter Number" name="email" required>
						</div>
						<div class="col-md-2">
							<label for="email"><b>Chapter Name:</b></label>
						</div>
						<div class="col-md-4">
							<input type="text" placeholder="Enter Chapter Name" name="email" required>
						</div><div class="col-md-2"></div>
						
						<div class="col-md-12"> <br /></div>

						<div class="col-md-2">
							<label for="email"><b>No. of Topic/s</b></label>
						</div>
						<div class="col-md-2">
							<input type="text" placeholder="Enter Number of Topic/s" name="email" required>
						</div><div class="col-md-8"></div>
						<div class="col-md-12"> <br /></div>
						
						<div class="col-md-2">
							<label for="email"><b>Topic No.</b></label>
						</div>
						<div class="col-md-2">
							<input type="text" placeholder="Enter Topic Number" name="email" required>
						</div>
												<div class="col-md-2">
							<label for="email"><b>Topic Name.</b></label>
						</div>
						<div class="col-md-4">
							<input type="text" placeholder="Enter Topic Name" name="email" required>
						</div>
												<div class="col-md-1">
							<label for="email"><b>Hours</b></label>
						</div>
						<div class="col-md-1">
							<input type="text" placeholder="Enter No. of Hours" name="email" required>
						</div>
					</div>
					 <br /> <br />
				<button type="submit" class="btn">Add User</button>
			</form>
        </div>
      </div>
    </div>
	 </div>

  <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-4">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-10 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Display Course Syllabus</h2>
			  <hr class="star-dark mb-5">
            </div>
			<div class="col-lg-12" style="font-family: Montserrat;">
			   <!-- List of Professors Section -->
			<section id="portfolio">
				<div class="container">
					<div class="row">
						<table class="table">
		
							<thead>
								<tr>
									<th>CSID</th>
									<th>CS Title</th>
									<th>Date Created</th>
									<th>Action</th>
								</tr>
							</thead>
							
							<tbody>
								<tr class='clickable-row' >
									<td>CS101</td>
									<td>IT Fundamental</td>
									<td>10/15/2018</td>
									<td><a href="#">Edit</a> | <a href="#">Delete</a></td>
								</tr>
								<tr class='clickable-row' >
									<td>CS101</td>
									<td>IT Fundamental</td>
									<td>10/15/2018</td>
									<td><a href="#">Edit</a> | <a href="#">Delete</a></td>
								</tr>
								<tr class='clickable-row' >
									<td>CS101</td>
									<td>IT Fundamental</td>
									<td>10/15/2018</td>
									<td><a href="#">Edit</a> | <a href="#">Delete</a></td>
								</tr>
								<tr class='clickable-row' >
									<td>CS101</td>
									<td>IT Fundamental</td>
									<td>10/15/2018</td>
									<td><a href="#">Edit</a> | <a href="#">Delete</a></td>
								</tr>
								<tr class='clickable-row' >
									<td>CS101</td>
									<td>IT Fundamental</td>
									<td>10/15/2018</td>
									<td><a href="#">Edit</a> | <a href="#">Delete</a></td>
								</tr>
							</tbody>
							</table>
      
    
					</div>
				</div>
			</div>
			</div>
		</section>


   
            </div>
          </div>
        </div>



  
    

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url('bootstrap/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('bootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url('bootstrap/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>
    <script src="<?php echo base_url('bootstrap/vendor/magnific-popup/jquery.magnific-popup.min.js'); ?>"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?php echo base_url('bootstrap/js/jqBootstrapValidation'); ?>"></script>
    <script src="<?php echo base_url('bootstrap/js/contact_me'); ?>"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url('bootstrap/js/freelancer.min.js'); ?>"></script>

  </body>

  


 
  
</html>
