<!DOCTYPE html>
<html lang="en">
<head>
  <title>HNGi7 Task 2</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

	<?php
	require 'db.php'
	?>

	<div class="container-sm p-2"> 
		<div class="row">
			<div class="w-50 p-3 shadow h-100">
				<form action="" method="post">
					<label for="demo">Enter email:</label> 
					<div class="input-group mb-3"> 
						<input type="text" class="form-control" placeholder="Email" id="demo" name="email">
						<div class="input-group-append"> 
							<span class="input-group-text">@example.com</span> 
						</div> 
					</div>
					<div class="form-group"> 
						<label for="pwd">Password:</label> 
						<input type="password" class="form-control" placeholder="Enter password" id="pwd" name="password"> 
					</div>
					<button type="submit" class="btn btn-warning">LOGIN</button>
				</form>
				<div class="alert alert-success mt-3"> 
					<strong>Login Successful!</strong>
				</div>
			</div>
			<div class="w-25 mx-auto p-3 shadow h-100 float-sm-right">
			 	<form action="" method="post">
				<button type="submit" class="btn btn-primary">GOOGLE</button>
				</form>
			</div>
		</div>
	</div>

	<div class="container-sm p-1">
		<div class="row">
			<div class="w-50 p-2 h-100 shadow">
				<form action="" method="post">
					<label for="demo1">Enter your email:</label> 
					<div class="input-group mb-3"> 
						<input type="text" class="form-control" placeholder="Email" id="demo1" name="email"> 
						<div class="input-group-append"> 
							<span class="input-group-text">@example.com</span> 
						</div> 
					</div>
					<div class="form-group"> 
						<label for="pwd">Enter new password:</label> 
						<input type="password" class="form-control" placeholder="Enter password" id="pwd" name="password"> 
					</div>
					<button type="submit" class="btn btn-primary">RESET</button>
				</form>
				<div class="alert alert-success mt-3"> 
				<strong>Password reset successful! </strong> <a href="#demo" class="alert-link">login</a>.
				</div>
			</div>
			<div class="w-25 h-100 mx-auto p-2 shadow float-sm-right">
				<form action="" method="post">
				<button type="submit" class="btn btn-danger">LOGOUT</button>
				</form>
				
			</div>
		</div>
	</div>

</body>
</html>
