<?php
	
	session_start();
	if(!isset($_SESSION['username'])){
		header('location: login.php');
	}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Home Page</title>
 	<link rel="stylesheet" type="text/css" href="styling.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
 </head>
 <body>

 	<div class="container">

 		<a class="float-right" href="logout.php">LOGOUT</a>
 		<h1>Welcome <?php echo $_SESSION['username']; ?> </h1>

	</div>
 </body>
 </html>
