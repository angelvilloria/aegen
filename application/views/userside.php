<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AEGEN: Exam Generator System</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="bootstrap/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="bootstrap/vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="bootstrap/css/freelancer.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">My Profile</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Item Analysis</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">Questionnaire</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Archive</a>            
			<li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo base_url(); ?>index.php/AdminController/logout">Log out</a>
			  
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Profile Section -->
    <header class="masthead bg-primary text-white text-center">
      <div class="container">
        <img class="img-fluid mb-5 d-block mx-auto" src="bootstrap/img/profile.png" alt="">
		
        <h1 class="text-uppercase mb-0">Hello, <?php echo $_SESSION['FacultyID']; ?>! Welcome to AEGEN!</h1>
        <h3 class="text-uppercase mb-0">Automated Exam Generator System</h3>
        <hr class="star-light">
		
		<!-- This is where you display the user's details -->
		<div class="row">		
				<div class="form-group col-lg-4">
					<h5>Faculty ID: </h5>	
					<input type="text" class="form-control form-control-sm" id="FacultyID">
				</div>
			<div class="form-group col-lg-8">
					<h5>Name: </h5>
					<input type="text" class="form-control form-control-sm" id="name">
			</div>	
		</div>
		<div class="row">				
			<div class="form-group col-lg-4">
					<h5>Password: </h5>	
					<input type="password" class="form-control form-control-sm" id="password">
					<a href="#changepass" style="color: white;"> Change Password</a>			
			</div>
			<div class="form-group col-lg-4">
					<h5>College: </h5>
					<input type="text" class="form-control form-control-sm" id="college">
			</div>
			<div class="form-group col-lg-4">
					<h5>Department: </h5>
					<input type="text" class="form-control form-control-sm" id="department">
			</div>				
		</div>
			
		<div class="row">
			<h5>Course Syllabus</h5>
				<table class="table table-hover table-dark">
				<thead>
					<tr>
						<th>CSID</th>
						<th>Course Syllabus Title</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>IT 101</td>
						<td>IT Fundamentals</td>
					</tr>					
					<tr>
						<td>IT 111</td>
						<td>Computer Programming 1, Lec</td>
					</tr>					
					<tr>
						<td>IT 111L</td>
						<td>Computer Programming 1, Lab</td>
					</tr>					
					<tr>
						<td>IT 121</td>
						<td>Computer Programming 2, Lec</td>
					</tr>					
					<tr>
						<td>IT 121L</td>
						<td>Computer Programming 2, Lab</td>
					</tr>
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
				<div class="form-group col-lg-4">
				  <label for="takers">Number of Takers:</label>
				  <input type="text" class="form-control" id="takers">
				</div>			
			<div class="form-group col-lg-4">
			  <label for="errors">Number of Errors:</label>
			  <input type="text" class="form-control" id="errors">
			</div>
		</div>
		<a href="#submit"><button type="submit" class="btn btn-outline-secondary">Submit</button></a>
      </div>
    </section>

    <!-- About Section -->
    <section class="bg-primary text-white mb-0" id="about">
      <div class="container">
        <h2 class="text-center text-uppercase text-white">Create Questionnaire</h2>
        <hr class="star-light mb-5">
			<div class="row">
				<div class="form-group col-lg-4">
				  <label for="csid">CSID:</label>
				  <select class="form-control" id="csid">
					<option>IT 101</option>
					<option>IT 111</option>
					<option>IT 111L</option>
					<option>IT 121</option>
					<option>IT 121L</option>
				  </select>
				</div>
				<div class="form-group col-lg-4">
				  <label for="chapnum">Chapter Number:</label>
				  <select class="form-control" id="chapnum">
					<option>Chapter 1</option>
					<option>Chapter 2</option>
					<option>Chapter 3</option>
					<option>Chapter 4</option>
					<option>Chapter 5</option>
				  </select>
				</div>
				<div class="form-group col-lg-4">
				  <label for="chapname">Chapter Name:</label>
				  <select class="form-control" id="chapname">
					<option>Chapter 1 Name</option>
					<option>Chapter 2 Name</option>
					<option>Chapter 3 Name</option>
					<option>Chapter 4 Name</option>
					<option>Chapter 5 Name</option>
				  </select>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-lg-8">
				  <label for="topic">Topic:</label>
				  <select class="form-control" id="topic">
					<option>Topic 1 with A Super Very Long Title</option>
					<option>Topic 2 with A Super Very Long Title</option>
					<option>Topic 3 with A Super Very Long Title</option>
					<option>Topic 4 with A Super Very Long Title</option>>
					<option>Topic 5 with A Super Very Long Title</option>
				  </select>
				</div>
				<div class="form-group col-lg-4">
				  <label for="hours">Number of Hours:</label>
				  <input type="text" class="form-control" id="hours">
				</div>			
			</div>
			<div class="row">
				<div class="form-group col-lg-6">
				  <label for="questiontype">Question Type:</label>
				  <select class="form-control" id="questiontype">
					<option>Matching Type</option>
					<option>Identification</option>
					<option>Enumeration</option>
					<option>True or False</option>
					<option>Essay</option>
				  </select>
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
      </div>
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
						<th>Status</th>
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

    <!-- Footer -->
    <footer class="footer text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Location</h4>
            <p class="lead mb-0">Manila, Philippines</p>
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
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-linkedin-in"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-tumblr"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <h4 class="text-uppercase mb-4">About AEGEN</h4>
            <p class="lead mb-0">AEGen is an automated exam generator system which you can item analyze your question and generate questions stored in a databank.</p>
          </div>
        </div>
      </div>
    </footer>

    <div class="copyright py-4 text-center text-white">
      <div class="container">
        <small>Copyright &copy; Cueto | Fernando | Villoria 2018</small>
      </div>
    </div>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>


    <!-- Bootstrap core JavaScript -->
    <script src="bootstrap/vendor/jquery/jquery.min.js"></script>
    <script src="bootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="bootstrap/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="bootstrap/endor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="bootstrap/js/jqBootstrapValidation.js"></script>
    <script src="bootstrap/js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="bootstrap/js/freelancer.min.js"></script>

  </body>

</html>
