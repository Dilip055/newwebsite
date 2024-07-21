<?php
	$con = mysqli_connect('localhost','root','', 'youtubeuserdata');

	if(!$con){
		die("Connection Failed: ".mysqli_connect_error());
	}else{
		echo "Connection Successful";
	}

	$user = $_POST['user'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$comments = $_POST['comment'];

	$query = "INSERT INTO userinfodata (user, email, mobile, comments) VALUES ('$user','$email','$mobile','$comments')";
	mysqli_query($con, $query);

	header('location:index.php');
?>