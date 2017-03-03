
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Narrow Jumbotron Template for Bootstrap</title>

     <!-- Material Design fonts -->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">



  </head>

  <body>

    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills float-right">
            <li class="nav-item">
              <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </nav>
        <h3 class="text-muted">Project name</h3>
      </div>

      <div class="row">
     <!-- html form element performs post request to signUp.php with the data of any elements with a name attribute  -->
       <form class="form-horizontal" method="POST" action="signUp.php">
            <fieldset>

            <!-- Form Name -->
            <legend>Sign In</legend>

            <!-- Text input-->
            <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Username</label>  
            <div class="col-md-4">
            <input id="username" name="username" type="text" placeholder="placeholder" class="form-control input-md">
            <span class="help-block">help</span>  
            </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Email</label>  
            <div class="col-md-4">
            <input id="email" name="email" type="email" placeholder="placeholder" class="form-control input-md">
            <span class="help-block">help</span>  
            </div>
            </div>

            <!-- Password input-->
            <div class="form-group">
            <label class="col-md-4 control-label" for="passwordinput">Password</label>
            <div class="col-md-4">
                <input id="password" name="password" type="password" placeholder="placeholder" class="form-control input-md">
                <span class="help-block">help</span>
            </div>
            </div>

           <!-- Button -->
          <div class="form-group">
            <label class="col-md-4 control-label" for="singlebutton">Submit</label>
            <div class="col-md-4">
                <button type="submit" class="btn btn-primary">submit</button>/
            </div>
          </div>

            </fieldset>
        </form>

      </div>

      <footer class="footer">
        <p>&copy; Company 2017</p>
      </footer>

    </div> <!-- /container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>
    <script src="../bower_components/bootstrap/dist/js/bootstrap.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
