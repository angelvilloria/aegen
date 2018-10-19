
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

              <img class="img-fluid" src="<?php echo base_url('bootstrap/img/portfolio/cabin.png') ?>" alt="">
              
            </a>
          </div>
          <div class="col-md-6 col-lg-6">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-2">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <h2>Display Users</h2>
                </div>
              </div>

              <img class="img-fluid" src="<?php echo base_url('bootstrap/img/portfolio/cake.png') ?>" alt="">

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

              <img class="img-fluid" src="<?php echo base_url('bootstrap/img/portfolio/cabin.png') ?>" alt="">

            </a>
          </div>
          <div class="col-md-6 col-lg-6">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-4">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <h2>Edit/Display Course Syllabus</h2>
                </div>
              </div>

              <img class="img-fluid" src="<?php echo base_url('bootstrap/img/portfolio/cake.png') ?>" alt="">

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
			
			<form method="POST" action="" class="container" style="font-family: Montserrat;">
			<div class="row">
						<div class="col-md-2">
							<label for="FacultyID"><b>Faculty ID: </b></label>
						</div>
						<div class="col-md-4">
							
							<input type="text" placeholder="Enter Faculty ID" name="FacultyID" id="FacultyID" value="<?php echo set_value('FacultyID'); ?>">
							<div style="color:red;"><?php echo form_error('FacultyID'); ?></div>
							
						</div>
						<div class="col-md-8"></div>
						<div class="col-md-12"> <br /></div>
						<div class="col-md-2">
							<label for="LName"><b>Last Name</b></label>
						</div>

						<div class="col-md-4">
							
							<input type="text" placeholder="Enter Last Name" name="LName" value="<?php echo set_value('LName'); ?>">
							<div style="color:red;"><?php echo form_error('LName'); ?></div>
							

						</div>
						<div class="col-md-2">
							<label for="FName"><b>First Name</b></label>
						</div>

						<div class="col-md-4">
						
							<input type="text" placeholder="Enter First Name" name="FName" value="<?php echo set_value('FName'); ?>">
							<div style="color:red;"><?php echo form_error('FName'); ?></div>
							

						</div>
						<div class="col-md-12"> <br /></div>
						<div class="col-md-2">
							<label for="password"><b>Password</b></label>
						</div>

						<div class="col-md-4">
						
							<input type="password" placeholder="Enter Password" name="password" value="<?php echo set_value('password'); ?>">
							<div style="color:red;"><?php echo form_error('password'); ?></div>
						

						</div>
						<div class="col-md-2">
							<label for="password2"><b>Confirm Password</b></label>
						</div>

						<div class="col-md-4">
						
							<input type="password" placeholder="Confirm Password" name="password2" value="<?php echo set_value('password2'); ?>">
							<div style="color:red;"><?php echo form_error('password2'); ?></div>
						

						</div>
						<div class="col-md-12"> <br /></div>
						<div class="col-md-2">
							<label for="college"><b>College</b></label>
						</div>

						<div class="col-md-4">
						
							<input type="text" placeholder="Enter College" name="college" value="<?php echo set_value('college'); ?>">
							<div style="color:red;"><?php echo form_error('college'); ?></div>
							

						</div>
						<div class="col-md-2">
							<label for="Department"><b>Department</b></label>
						</div>

						<div class="col-md-4">

						
							<input type="text" placeholder="Enter Department" name="department" value="<?php echo set_value('department'); ?>">
							<div style="color:red;"><?php echo form_error('department'); ?></div>
							
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
									<th>Action</th>
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
										<td><a href="">Delete</a></td>
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


	<!-- This is where you add course syllabus -->
	

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
			
						<?php if (isset($_SESSION['success'])) { ?>
						<div class="alert alert-success"> <?php echo $_SESSION['success']; ?></div>
						<?php
						} ?>
						
						<form method="POST" action="" class="container" style="font-family: Montserrat;">

						
						<div class="col-md-2">
							<label for="LName"><b>CSID</b></label>
						</div>
						<div class="col-md-5">
							<input type="text" placeholder="Enter CSID" name="CSID" required>
						</div>
						<div class="col-md-12"><br /></div>
<div class="row">
<div class="col-lg-8"></div>
<div class="col-lg-4">
<button type="button" class="add_field_button btn">Add Chapter</button> &nbsp &nbsp  &nbsp <button type="button" class="remove_field_button btn">Remove Chapter</button>
</div>
</div>
<div class="input_fields_wrap">
	<div class="row">
						<div class="col-md-12"><br /></div>
						<div class="col-md-2">
							<label for="LName"><b>Chapter No.</b></label>
						</div>
						<div class="col-md-1">
							<input type="text" placeholder="Enter Chapter Number" name="CNum" required>
						</div>
						
						<div class="col-md-2">
							<label for="LName"><b>Chapter Name</b></label>
						</div>
						<div class="col-md-7">

							<input type="text" placeholder="Enter Chapter Name" name="CName" required>
						</div>
						<div class="col-md-12"><br /></div>
						
						<div class="col-lg-8"></div>
						<div class="col-lg-4">
						<button type="button" class="add_topicfield_button btn">&nbsp Add Topic</button>  &nbsp &nbsp  &nbsp <button type="button" class="remove_topicfield_button btn">&nbsp  Remove Topic &nbsp  &nbsp</button>
						</div>

						<div class="col-md-12"><br /></div>
						<div class="col-md-1"></div>
						<div class="col-md-1">
							<label for="LName"><b>Topic No.</b></label>
						</div>
						<div class="col-md-1">
							<input type="text" placeholder="Enter Topic No." name="TName" required>
						</div>
						<div class="col-md-2">

							<label for="TName"><b>Topic Name</b></label>
						</div>

						<div class="col-md-4">

							<input type="text" placeholder="Enter Topic Name" name="TName" required>
						</div>
						<div class="col-md-2">

							<label for="Hours"><b>Topic Hours</b></label>
						</div>
						
						<div class="col-md-1">
							<input type="text" placeholder="Enter Hours" name="Hours" required>
						</div>
</div>
</div>
</div>
<br />
<button type="submit" class="btn">Add Course Syllabus</button></form>
</div>

		</div>
	</div>
</div>



  <!-- This is where you display course syllabus -->
  

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
			
			<!-- List of Course Syllabus -->

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



  
    
    <!-- Import repeater js  -->


    <script src="<?php echo base_url('bootstrap/vendor/bootstrap/js/jquery.czMore-1.5.3.2'); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('bootstrap/vendor/bootstrap/js/jquery.czMore-latest'); ?>" type="text/javascript"></script>

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

	
<script>
var max_fields      = 100;
var wrapper         = $(".input_fields_wrap"); 
var add_button      = $(".add_field_button");
var remove_button   = $(".remove_field_button");
var add_button_topic      = $(".add_topicfield_button");
var remove_button_topic   = $(".remove_topicfield_button");

$(add_button).click(function(e){
    e.preventDefault();
    var total_fields = wrapper[0].childNodes.length;
    if(total_fields < max_fields){
        $(wrapper).append(' 	<div class="row"><div class="col-md-12"><br /></div><div class="col-md-2"><label for="LName"><b>Chapter No.</b></label></div><div class="col-md-1"><input type="text" placeholder="Enter Chapter Number" name="CNum" required></div><div class="col-md-2"><label for="LName"><b>Chapter Name</b></label></div><div class="col-md-7"><input type="text" placeholder="Enter Chapter Name" name="CName" required></div><div class="col-md-12"><br /></div><div class="col-lg-8"></div><div class="col-lg-4"><button type="button" class="add_topicfield_button btn">&nbsp Add Topic</button>  &nbsp &nbsp  &nbsp <button type="button" class="remove_topicfield_button btn">&nbsp  Remove Topic &nbsp  &nbsp</button></div><div class="col-md-12"><br /></div><div class="col-md-2"></div><div class="col-md-2"><label for="LName"><b>Topic Name</b></label></div><div class="col-md-5"><input type="text" placeholder="Enter Topic Name" name="TName" required></div><div class="col-md-2"><label for="LName"><b>Topic Hours</b></label></div><div class="col-md-1"><input type="text" placeholder="Enter Hours" name="THour" required></div></div> ');
    }
});

$(remove_button).click(function(e){
    e.preventDefault();
    var total_fields = wrapper[0].childNodes.length;
    if(total_fields>1){
        wrapper[0].childNodes[total_fields-1].remove();
    }
});

$(add_button_topic).click(function(e){
    e.preventDefault();
    var total_fields = wrapper[0].childNodes.length;
    if(total_fields < max_fields){
        $(wrapper).append(' <div class="row"><div class="col-md-12"><br /></div><div class="col-md-2"></div><div class="col-md-2"><label for="LName"><b>Topic Name</b></label></div><div class="col-md-5"><input type="text" placeholder="Enter Topic Name" name="TName" required></div><div class="col-md-2"><label for="LName"><b>Topic Hours</b></label></div><div class="col-md-1"><input type="text" placeholder="Enter Hours" name="THour" required></div> </div> ');
    }
});

$(remove_button_topic).click(function(e){
    e.preventDefault();
    var total_fields = wrapper[0].childNodes.length;
    if(total_fields>1){
        wrapper[0].childNodes[total_fields-1].remove();
    }

});

</script>
</body>

</html>
