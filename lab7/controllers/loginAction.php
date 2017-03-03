<?php
    header("Access-Control-Allow-Origin: *");
    require '../lib.php';

    //all this script does is take data from the post request and calls the loginUser function with it
    echo loginUser($_POST['username'], $_POST['password']);
