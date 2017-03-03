<?php

require 'models/Todo.php';
session_start();

$conn = new mysqli("localhost", "admin2", "adminpass", "mydb");

function createUser($username, $email, $password){
    global $conn;
    $password = sha1($password);
    $insql = "INSERT INTO user(`username`, `email`, `password`) values ('$username', '$email', '$password')";

    $conn->query($insql);
    $val = $conn->insert_id;

    $_SESSION["userData"] = array(
        "userid"=>$val,
        "username"=>$username
    );
    $conn->close();
    return $val;
}

function loginUser($username, $password){
    global $conn;
    $password = sha1($password);
    $sql = "SELECT `uid`, `username` FROM `user` WHERE `username` = \"{$username}\" AND `password` = \"{$password}\"";
    $res = $conn->query($sql);
    if($res->num_rows == 0){
        return json_encode(array("status"=>"failure"));
    }else{
        $user = $res->fetch_assoc();
        $_SESSION["userData"] = array(
            "userid"=> $user['uid'],
            "username"=> $user['username']
        );
        return json_encode(array("status"=>"success", "userid"=> $user['uid']));
    }

}

function signUpUser($username, $email, $password){
    $res = createUser($username, $email, $password);

    if ($res > 0){
        $msg = array("status"=>"success", 'userid'=>$res);
        return json_encode($msg);
    }else{
        $arr = array("status"=>"error", "message"=>"Unable to create a new user");
        return  json_encode($arr);
    }
}

function insertTodo($text, $userId){
    $todo = new Todo($text, $userId);
    $todo->insert();
}

//gets the data for todo
function getUserTodos($userId){
    global $conn;
    $res = $conn->query("SELECT * FROM `todo` WHERE `todo`.`userid` = {$userId}");
    $data = array();
    while($row = $res->fetch_assoc()){
        array_push($data, $row);
    }
    return $data;
}

//presents the todo data in table
function prettyPrintTodos($todos){
    $html =
    "
    <table class='table'>
            <thead>
                <tr><th>Text</th><th>Created</th></tr>
            </thead>
            <tbody>
    ";
    foreach ($todos as $todo){
        $html .= "
                <tr>
                    <td>{$todo['text']}</td><td>{$todo['time']}</td>
                </tr>
                ";
    }
    $html .= "
        </tbody>
    </table>
    ";
    echo $html;
}