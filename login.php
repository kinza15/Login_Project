<!DOCTYPE html>
<html>
<head>
	<title>User Registration and Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="styling.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body>
<div class="container">
	<div class="login-box">
	<div class="row">
		<div class="col-md-6 login-left">
			<h2>Login Here</h2>
			<form action="validation.php" method="post">
				 <div class="form-group">
				 	<label>Username</label>
				 	<input type="text" name="user" class="form-control" required>
				 </div>
				 <div class="form-group">
				 	<label>Password</label>
				 	<input type="password" name="password" class="form-control" required>
				 </div>
				 <button type="submit" class="btn btn-primary">Login</button>
			</form>
		</div>

		<div class="col-md-6 login-right">
			<h2>Register Here</h2>
			<form action="registration.php" method="post">
				 <div class="form-group">
				 	<label>Username</label>
				 	<input type="text" name="user" class="form-control" required>
				 </div>
				 <div class="form-group">
				 	<label>Password</label>
				 	<input type="password" name="password" class="form-control" required>
				 </div>
				 <button type="submit" class="btn btn-primary">Register</button>
			</form>
		</div>
	</div>
</div>
</div>
</body>
</html>