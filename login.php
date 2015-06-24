<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width; initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/register.css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:700,300" rel="stylesheet" type="text/css" >
    <script src="js/jquery.js"></script> <!-- or use local jquery -->
    <script src="js/jquery.validate.js" ></script>
    <title>Login</title>
</head>

<!-- NAVBAR
================================================== -->

<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="index.html" class="navbar-brand"><strong>RoboFeed</strong></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">

                <li><a href="#">Donde Comprar</a></li>
                <li><a href="#">Support</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a class="active" href="register.php">Register</a></li>
            </ul>
        </div>
    </div>
</nav>

<header>
<div class="container">
    <div class="row" style="margin-top:20px">
        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
            <form name="form_login" method="post" action="log.php" role="form">
                <fieldset>
                    <h2>Please Sign In</h2>
                    <hr>
                    <div class="form-group">
                        <input name="email" type="text" id="email" class="form-control input-lg" placeholder="Email Address" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" required>
                    </div>
          <span class="button-checkbox">
          <button type="button" class="btn" data-color="info">Remember Me</button><!-- Additional Option -->
          <input type="checkbox" name="remember_me" id="remember_me" checked="checked" class="hidden">
            <hr>
          <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6">
                  <input type="submit" name="Submit" value="Login" class="btn btn-lg btn-success btn-block">
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6"> <a href="register.php" target="_blank" class="btn btn-lg btn-primary btn-block">Register</a> </div>
          </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
</header>
</body>

</html>