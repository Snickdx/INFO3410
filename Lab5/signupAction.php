<?php
	echo(var_dump($_POST)); // var_dump special developer function to see the internals of anything in PHP

$res = createUser(
				$_POST['username'],
				$_POST['email'],
				$_POST['password']
);

if ($res > 0){
	$msg = array("status"=>"success", 'message'=>'user was created with id ' . $res);
	echo json_encode($msg);
}else{
	$arr = array("status"=>"error", "message"=>"Unable to create a new user");
	echo json_encode($arr);	
}

function createUser($username, $email, $password){
	$conn = new mysqli("localhost", "admin2", "adminpass", "mydb");
	$password = sha1($password);
	$insql = "INSERT INTO user(`username`, `email`, `password`) 
			  values ('$username', '$email', '$password')";
	// echo $insql; // so print SQL generated to determine if it works using phpmyadmin
	$conn->query($insql);
	$val = $conn->insert_id;
	$conn->close();
	return $val;
}