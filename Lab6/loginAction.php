<?php
header("Access-Control-Allow-Origin: *");
require 'lib.php';
// echo(var_dump($_POST)); // var_dump special developer function to see the internals of anything in PHP
//loginUser($_POST);
echo json_encode($_POST);