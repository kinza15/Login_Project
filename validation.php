<?php
	
	session_start();
	
	$con = mysqli_connect('localhost','root','','user_registration');

	$name = mysqli_real_escape_string($con,$_POST['user']);
	$pass = mysqli_real_escape_string($con,$_POST['password']);


	$query = "select * from usertable where name = '$name' && pass = '$pass'";
	$result = mysqli_query($con, $query);

	$num = mysqli_num_rows($result);

	if($num == 1){
		$_SESSION['username'] = $name;
		header('location: welcome.php');
	}else{
		header('location: login.php');
	}


?>