<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
    height: 100%;
    font-family: Arial, Helvetica, sans-serif;
}

* {
    box-sizing: border-box;
}

.bg-img {
    /* The image used */
    background-image: url(bootstrap/img/bg.jpg);

    min-height: 380px;

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: fixed;
}

/* Add styles to the form container */
.container {
    position: fixed;
	top: 100px;
    right: 0;
    margin: 40px;
    max-width: 400px;
    padding: 40px;
    background-color: white;
	
}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Set a style for the submit button */
.btn {
    background-color: #4CAF50;
    color: white;
    padding: 16px 20px;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.8;
}

.btn:hover {
    opacity: 1;
}
</style>
</head>
<body class="bg-img">

<div>

	<?php if (isset($_SESSION['success'])) { ?>
		<div class="alert alert-success"> <?php echo $_SESSION['success']; ?></div>
	<?php
	} ?>
	
	<?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
	<form action="" method="POST" class="container">
    <h1>Login</h1>

    <label for="FacultyID"><b>Faculty ID</b></label>
    <input type="text" placeholder="Enter Faculty ID" name="FacultyID">

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password">

    <button type="submit" class="btn btn-primary" name="login">Login</button>
  </form>
</div>

</body>
</html>
