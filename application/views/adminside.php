
    <!-- Header -->
    <header class="masthead bg-primary text-white text-center">
      <div class="container">
        <img class="img-fluid mb-5 d-block mx-auto" src="bootstrap/img/profile.png" alt="">
        <h1 class="text-uppercase mb-0 " style="color: #36454f;">AEGen</h1>
        <hr class="star-light">
        <h2 class="font-weight-light mb-0" style="font-family: Montserrat; color: #36454f;">AUTOMATED EXAM GENERATOR</h2>
      </div>
	  
    </header>

    <!-- Portfolio Grid Section -->
  <section class="portfolio" id="muser">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Manage Users</h2>
      </div>
    </section>
		
	<!-- This is where you add users -->

      <div class="portfolio-modal-dialog bg-white">
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
<br>
<br>
<br>

    <!-- This is where you display the list of users -->
	

      <div class="portfolio-modal-dialog bg-white">
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
								
								if($userdata->num_rows() > 0)
								{
									foreach($userdata->result() as $row)
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


	 <section class="portfolio" id="csyllabus">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Manage Course Syllabus</h2>
      </div>
    </section>


	<!-- This is where you add course syllabus -->
	


      <div class="portfolio-modal-dialog bg-white">
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-10 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Add Course Syllabus</h2>
			  <hr class="star-dark mb-5">
            </div>

	<div class="container">
<h3 class="card-title" id="repeat-form">Add Chapter/s</h3>
  <div class="card">
  <div class="card-header">
                    
                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
							
							<form method="POST" action="" class="form row col-md-12">
										
										<div class="form-group mb-1 col-md-3" >
                                            <label for="CSID">CSID</label>
                                            <br>
                                            <input type="text" class="form-control" name="CSID" placeholder="Enter CSID">
                                        </div>
										<div class="form-group mb-1 col-md-9">
                                            <label for="CSName">Course Syllabus Name</label>
                                            <br>
                                            <input type="text" class="form-control" name="CSName" placeholder="Enter Course Syllabus Name">
                                        </div>
                            
                </div>
<br>
<br>

<div class="portlet-body form">
                                <div class="form-body">
                                    <div class="form-group">
									
                                        <!-- <form method="POST" action="" class="mt-repeater form-horizontal"> -->

                                            <div data-repeater-list="group-a">
                                                
                                            <div data-repeater-item="" class="mt-repeater-item col-md-12" style="">
                                                    <!-- jQuery Repeater Container -->
													
													<div id="ChapterForm" class="row">
													<div class="mt-repeater-inpu col-md-1">
													 <label class="control-label" for="ChapNum">Number</label>
													 <br>
													<input readOnly type="number"  class="form-control"  name="ChapNum[]" placeholder="1">
                                                    </div>
                                                    <div class="mt-repeater-inpu col-md-9">
                                                        <label class="control-label" for="ChapName">Name</label>
                                                        <br>
                                                        <input type="text" name="group-a[0][text-input]" class="form-control" name="ChapName[]" placeholder="Input Chapter Name"> 
														</div>
                                                    <div class="mt-repeater-input " style="position:absolute; right:100px;top:30px">
                                                        <a href="javascript:;" data-repeater-delete="" class="btn btn-danger mt-repeater-delete ">
                                                            <i class="fa fa-close"></i> Delete</a>
                                                    </div>
                                                </div>
												</div>
												</div><br>
												
                                            <a href="javascript:; " data-repeater-create="" id="addChapName" class="btn btn-success mt-repeater-add">
                                                <i class="fa fa-plus"></i> Add</a>
												
												<script> 
													$("#addChapName").unbind("click").click(function(e){
													e.preventDefault():
													$("#ChapterForm").append('<div class="mt-repeater-inpu col-md-1"><label class="control-label" for="ChapNum">Number</label><br><input readOnly type="number"  class="form-control"  name="ChapNum[]" placeholder="1"></div><div class="mt-repeater-inpu col-md-9"><label class="control-label" for="ChapName">Name</label><br><input type="text" name="group-a[0][text-input]" class="form-control" name="ChapName[]" placeholder="Input Chapter Name"></div><div class="mt-repeater-input " style="position:absolute; right:100px;top:30px"><a href="javascript:;" data-repeater-delete="" class="btn btn-danger mt-repeater-delete "><i class="fa fa-close"></i> Delete</a></div>');
													});
												</script>
                                      

										<div class="form-group col-sm-12 col-md-12 text-center mt-10" >
										<br>
                                            <button type="submit" class="btn btn-default col-md-3"  name="addChapter"> <i class="ft-x"></i> Submit </button>
                                        </div>
										
										
									   </form>
									   
						
                                    </div>
                                </div>
                            </div>

										 
</div>
</div>




</div><div>	
<br>
<br>
<br>
<br>
</div>	
	<div class="container">
                    <h3 class="card-title" id="repeat-form">Add Topic/s</h3>
  <div class="card">
  <div class="card-header">

                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
					       <form class="form row col-md-12">
								<div class="form-group mb-1 col-sm-12 col-md-3">
                                            <label for="csid">CSID</label>
                                            <br>
                                            <select class="form-control" id="csid">
                                              <option>Select CSID</option>
                                              <option>Option 1</option>
                                              <option>Option 2</option>
                                              <option>Option 3</option>
                                              <option>Option 4</option>
                                              <option>Option 5</option>
                                            </select>
                                        </div>									        
										<div class="form-group mb-1 col-sm-12 col-md-7">
                                            <label for="csname">Chapter Name</label>
                                            <br>
                                            <select class="form-control" id="csname">
                                              <option>Select Chapter</option>
                                              <option>Option 1</option>
                                              <option>Option 2</option>
                                              <option>Option 3</option>
                                              <option>Option 4</option>
                                              <option>Option 5</option>
                                            </select>
                                        </div>
										 <div class="form-group col-sm-12 col-md-2 text-center mt-2">
										<br>
                                            <button type="button" class="btn btn-default" > <i class="ft-x"></i> Generate</button>
                                        </div>
                                    </form>
                </div>
<br>
<br>

<div class="portlet-body form">
                                <div class="form-body">
                                    <div class="form-group">
                                        <form action="#" class="mt-repeater form-horizontal">
                                            <div data-repeater-list="group-a">
                                                
                                            <div data-repeater-item="" class="mt-repeater-item col-md-12" style="">
                                                    <!-- jQuery Repeater Container -->
													<div class="row">
													<div class="mt-repeater-inpu col-md-1">
													 <label class="control-label">No.</label>
													 <br>
													<input type="number"  class="form-control"  id="myNumber" placeholder="1">
                                                    </div>													
													<div class="mt-repeater-inpu col-md-7">
                                                        <label class="control-label">Topic Name</label>
                                                        <br>
                                                        <input type="text" name="group-a[0][text-input]" class="form-control" placeholder="Input Topic Name"> 
													</div>
													
                                                    <div class="mt-repeater-inpu col-md-2">
                                                        <label class="control-label">No. of Hours</label>
                                                        <br>
                                                        <input type="text" name="group-a[0][text-input]" class="form-control" placeholder="Input No. of Hours"> 
													</div>
													</div>
                                                    <div class="mt-repeater-input " style="position:absolute; right:100px;top:30px">
                                                        <a href="javascript:;" data-repeater-delete="" class="btn btn-danger mt-repeater-delete ">
                                                            <i class="fa fa-close"></i> Delete</a>
                                                    </div>
                                                </div></div><br>
                                            <a href="javascript:;" data-repeater-create="" class="btn btn-success mt-repeater-add" >
                                                <i class="fa fa-plus"></i> Add</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
										 <div class="form-group col-sm-12 col-md-12 text-center mt-10" >
										<br>
                                            <button type="button" class="btn btn-default col-md-3"  > <i class="ft-x"></i> Submit</button>
                                        </div>
</div></div>
				</div>
			</div>
		</div>
	</div>
</div>
<div>	
<br>
<br>
<br>
<br>
</div>


  <!-- This is where you display course syllabus -->
  


      <div class="portfolio-modal-dialog bg-white">
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
									<th>Action</th>
								</tr>
							</thead>
							
							
							
							<?php
								
								if($csdata->num_rows() > 0)
								{
									foreach($csdata->result() as $row)
									{
								?>
								
							<tbody>
								<tr class='clickable-row' >
									<td><?php echo $row->CSID; ?></td>
									<td><?php echo $row->CSID; ?></td>
									<td><a href="#">Edit</a> | <a href="#">Delete</a></td>
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
    <script src="<?php echo base_url('bootstrap/vendor/bootstrap/js/bootstrap-repeater.min.js'); ?>"></script>
    <script src="<?php echo base_url('bootstrap/vendor/bootstrap/js/form-repeater.js'); ?>"></script>
    <script src="<?php echo base_url('bootstrap/vendor/bootstrap/js/jquery-repeater.js'); ?>"></script>
    <script src="<?php echo base_url('bootstrap/vendor/bootstrap/js/jqueryform-repeater.js'); ?>"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url('bootstrap/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>
    <script src="<?php echo base_url('bootstrap/vendor/magnific-popup/jquery.magnific-popup.min.js'); ?>"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?php echo base_url('bootstrap/js/jqBootstrapValidation'); ?>"></script>
    <script src="<?php echo base_url('bootstrap/js/contact_me'); ?>"></script>
	
    <script src="<?php echo base_url('bootstrap/js/bootstrap.min.js'); ?>"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url('bootstrap/js/freelancer.min.js'); ?>"></script>



</body>

</html>
