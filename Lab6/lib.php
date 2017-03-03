<?php

session_start();

$conn = new mysqli("localhost", "admin2", "adminpass", "mydb");

function createUser($username, $email, $password){
    global $conn;
    $password = sha1($password);
    $insql = "INSERT INTO user(`username`, `email`, `password`) 
			  values ('$username', '$email', '$password')";
    // echo $insql; // so print SQL generated to determine if it works using phpmyadmin
    $conn->query($insql);
    $val = $conn->insert_id;
    //creating assoc arrays
    $_SESSION["userData"] = array(
        "userid"=>$val,
        "username"=>$username
    );
    $conn->close();
    return $val;
}

function loginUser($userData){
    global $conn;//reference global variable
    $sql = "SELECT * FROM `user` WHERE `username` = ".$userData["username"]." AND `password`= ".$sha1(userData["password"]);
    $res = $conn->query($sql);
    return $res;
}

function signUpUser($userData){
    $res = createUser(
        $userData['username'],
        $userData['email'],
        $userData['password']
    );

    if ($res > 0){
        $msg = array("status"=>"success", 'message'=>'user was created with id ' . $res);
        echo json_encode($msg);
    }else{
        $arr = array("status"=>"error", "message"=>"Unable to create a new user");
        echo json_encode($arr);
    }
}

