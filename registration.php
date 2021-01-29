<?php
	
	session_start();
	//header('location: login.php');
	$con = mysqli_connect('localhost','root','','user_registration');

	$name = $_POST['user'];
	$pass = $_POST['password'];

	$query = "select * from usertable where name = '$name'";
	$result = mysqli_query($con, $query);

	$num = mysqli_num_rows($result);

	if($num == 1){
		echo "Username is already taken";
	}else{
		$reg = "insert into usertable(name, pass) values ('$name','$pass')";
		$result = mysqli_query($con, $reg);
		if($result){
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Registered')
    window.location.href='login.php';
    </SCRIPT>");
}
		//echo "Registration successful";
	}


?>