<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/vendor/bootstrap/css/bootstrap.min'); ?>" >

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
	font-family: Arial, Helvetica, sans-serif, Montserrat;
	    /* The image used */
    background-image: url(<?php echo base_url('bootstrap/img/bg.jpg') ?>);
    min-height: 380px;
    /* Center and scale the image nicely */
    background-repeat: no-repeat;
    background-size: cover;
	overflow: hidden;
	}
form {
	border: 3px solid #f1f1f1;
	background-color: white;
	}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

h2 {
	font-family: Montserrat;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
</head>
<body>

<br />
<br />
<br />
<div class="row">
<div class="col-lg-6"></div>
<div class="col-lg-5">

	<?php if (isset($_SESSION['success'])) { ?>
		<div class="alert alert-success"> <?php echo $_SESSION['success']; ?></div>
	<?php
	} ?>
	
	<?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
	
<form action="/action_page.php" method="POST" >

  <div class="container" style="background-color:#f1f1f1">
      <h2>Login Form</h2>
  </div>
  <div class="container">

    <label for="FacultyID"><b>Faculty ID</b></label>
    <input type="text" placeholder="Enter Faculty ID" name="FacultyID" id="FacultyID" >

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password"  id="password">

    <button type="submit" name="login">Login</button>
  <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

</form>
</div>

</body>
</html>
