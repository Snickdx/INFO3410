<?php session_start(); echo(var_dump($_SESSION["userData"]["username"]));?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Sticky Footer Navbar Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="bower_components/bootstrap-material-design/dist/bootstrap-material-design.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/sticky-footer-navbar.css" rel="stylesheet">
</head>

<body>

<!-- Fixed navbar -->
<nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Fixed navbar</a>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="todo.php">To Do's</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="profile.php">Profile<span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </div>
</nav>

<!-- Begin page content -->
<div class="container">
    <?php if(isset($SESSION['userData'])){?>
        <?php echo("<h1>Hi ". $_SESSION["userData"]["username"] ."</h1>") ?>
        <form class="form-signin col col-sm-8 offset-sm-4">
            <h2 class="form-signin-heading">Change Password</h2>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
            <?php echo('<input id="userid" type="hidden" value='.$SESSION['userid'].'>'); ?>
            <button class="btn btn-lg btn-primary btn-block" id="changeBtn" type="submit">Change</button>
        </form>
    <?php }else { ?>
        <h1>Hi Stranger</h1>
    <?php } ?>
</div>

<footer class="footer">
    <div class="container">
        <span class="text-muted">Place sticky footer content here.</span>
    </div>
</footer>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
