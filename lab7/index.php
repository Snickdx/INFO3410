<?php
//Makes the $_SESSION global variable available
session_start();

//This allows requests to be made to across that do not share the same location
header("Access-Control-Allow-Origin: *");

/**
 * Lab 7 03/03/2017
 *
 * 1. Simple Login
 * 2. Displaying Data From The Database
 * 3. Inserting Data Into The Database
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Log In</title>

    <!-- Bootstrap core CSS -->
    <!-- Bootstrap core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="../bower_components/bootstrap-material-design/dist/bootstrap-material-design.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
</head>

<body>

<div class="container">
    <form class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Username</label>
        <input type="text" id="username" class="form-control" placeholder="username" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="password" class="form-control" placeholder="Password" required>
        <input class="btn btn-lg btn-primary btn-block" type="button" id="loginBtn" value="submit">
        <a class="btn btn-lg btn-primary btn-block" href="signup.php">Sign Up</a>
    </form>
</div> <!-- /container -->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../bower_components/tether/dist/js/tether.min.js"></script>
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<script src="../bower_components/bootstrap/dist/js/bootstrap.js"></script>
<script src="js/app.js"></script>
</body>
</html>
