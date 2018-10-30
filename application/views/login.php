<!DOCTYPE html>
<html>
	<head>
		<title>AEGEN: Exam Generator System</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
		<style>
			:root {
			  --input-padding-x: 1.5rem;
			  --input-padding-y: .25rem;
			}

			body {
			  background: #80d0c7;
			  /* fallback for old browsers */
			  background: -webkit-linear-gradient(to right, #13547a, #80d0c7);
			  /* Chrome 10-25, Safari 5.1-6 */
			  background: linear-gradient(to right, #13547a, #80d0c7);
			  /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
			}

			.card-signin {
			  border: 0;
			  border-radius: 1rem;
			  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
			}

			.card-signin .card-title {
			  margin-bottom: 2rem;
			  font-weight: 300;
			  font-size: 1.5rem;
			}

			.card-signin .card-body {
			  padding: 2rem;
			}

			.form-signin {
			  width: 100%;
			}

			.form-signin .btn {
			  font-size: 80%;
			  border-radius: 5rem;
			  letter-spacing: .1rem;
			  font-weight: bold;
			  padding: 1rem;
			  transition: all 0.2s;
			}

			.form-label-group {
			  position: relative;
			  margin-bottom: 1rem;
			}

			.form-label-group input {
			  border-radius: 2rem;
			}

			.form-label-group>input,
			.form-label-group>label {
			  padding: var(--input-padding-y) var(--input-padding-x);
			}

			.form-label-group>label {
			  position: absolute;
			  top: 0;
			  left: 0;
			  display: block;
			  width: 100%;
			  margin-bottom: 0;
			  /* Override default `<label>` margin */
			  line-height: 1.5;
			  color: #495057;
			  border: 1px solid transparent;
			  border-radius: .25rem;
			  transition: all .1s ease-in-out;
			}

			.form-label-group input::-webkit-input-placeholder {
			  color: transparent;
			}

			.form-label-group input:-ms-input-placeholder {
			  color: transparent;
			}

			.form-label-group input::-ms-input-placeholder {
			  color: transparent;
			}

			.form-label-group input::-moz-placeholder {
			  color: transparent;
			}

			.form-label-group input::placeholder {
			  color: transparent;
			}

			.form-label-group input:not(:placeholder-shown) {
			  padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
			  padding-bottom: calc(var(--input-padding-y) / 3);
			}

			.form-label-group input:not(:placeholder-shown)~label {
			  padding-top: calc(var(--input-padding-y) / 3);
			  padding-bottom: calc(var(--input-padding-y) / 3);
			  font-size: 12px;
			  color: #777;
			}
		</style>
	</head>
	<body>
	
	
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center"><b>Welcome to AEGEN</b></h5>
            <h5><small class="card-title text-center">Please log in your account.</small></h5>
			<hr class="my-4">
			
			
			<?php if (isset($_SESSION['success'])) { ?>
				<div class="alert alert-success"> <?php echo $_SESSION['success']; ?></div>
			<?php
			} ?>
			
			
            <form action="" method="POST" class="form-signin">
              
			  <div class="form-label-group">
                <input type="text" name="FacultyID" id="FacultyID" class="form-control" placeholder="Faculty ID" value="<?php echo set_value('FacultyID'); ?>">
                <label for="FacultyID">Faculty ID</label>
				<div style="color:red;"><?php echo form_error('FacultyID'); ?></div>
              </div>

              <div class="form-label-group">
                <input type="password" name="password" id="password" class="form-control" placeholder="Password" value="<?php echo set_value('password'); ?>">
                <label for="password">Password</label>
				<div style="color:red;"><?php echo form_error('password'); ?></div>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember password</label>
              </div>
			  <hr class="my-4">
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="login">Log in</button>
              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>