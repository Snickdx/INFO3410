<?php
    require '../lib.php';
	// echo(var_dump($_POST)); // var_dump special developer function to see the internals of anything in PHP
    echo signUpUser($_POST['username'], $_POST['email'], $_POST['password']);

