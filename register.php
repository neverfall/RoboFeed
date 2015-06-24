<!DOCTYPE html>
<html lang="en">
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width; initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/register.css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:700,300" rel="stylesheet" type="text/css" >
    <script src="js/jquery.js"></script> <!-- or use local jquery -->
    <script src="js/jquery.validate.js" ></script>

    <title>Registro</title>
</head>
<body>

<!-- HEADER!!!!!!!  -->
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
<!-- HEADER!!!!!!!  -->
<header class="bajo">




    <div class="container">
        <form class="form-horizontal" id="form_members" role="form" action="registration.php" method="POST">

        <legend>Person</legend>
            <div class="form-group">
                <label for="firstname" class="col-sm-2">First Name</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="firstname" id="firstname" placeholder="First Name" required>
                </div>
                <label for="lastname" class="col-sm-2">Last Name</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last Name" required>
                </div>
            </div>
            <div class="form-group">
                <label for="gender" class="col-sm-2">Gender</label>
                <div class="col-sm-4">
                    <label class="radio-inline">
                        <input type="radio" name="gender" id="male" value="male"> Male
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="gender" id="female" value="female"> Female
                    </label>
                </div>
                <label for="dob" class="col-sm-2">Date of Birth</label>
                <div class="col-sm-4">
                    <input type="date" class="form-control" name="dob" id="dob" placeholder="mm/dd/yyyy">
                </div>
            </div>
            <legend>RoboFeed ID</legend>
            <div class="form-group">
                <label for="robofeedid" class="col-sm-2">RoboFeed Id</label>
                <div class="col-sm-4">
                        <input type="text" class="form-control" name="robofeedid" id="robofeedid" placeholder="RoboFeed ID" required>
                </div>
                <label for="Name" class="col-sm-2">RoboFeed Name</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="robofeedname" id="robofeedname" placeholder="Chosse a name" required>
                </div>
            </div>
            <legend>Account</legend>
            <div class="form-group">
                <label for="email" class="col-sm-2">Email</label>
                <div class="col-sm-4">
                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>
                <label for="password" class="col-sm-2">Password</label>
                <div class="col-sm-4">
                <input type="password" class="form-control" name="password" placeholder="Password" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-warning" name="submit" id="submit">Submit</button>
                </div>
            </div>

    </div>












</header>
<footer>

    <div class="container">
        <div class="row final">
            <div class="col-xs-12 col-sm-5 col-sm-offset-1">
                <h1>Quieres saber mas?</h1>

                <form action="" class="form-inline">
                    <div class="form-group">
                        <input type="text" class="form-control" id="subscribir"
                               placeholder="Introduzca su Email ">
                        <button type="submit" class="btn btn-danger btn-lg">Suscribirme</button>
                    </div>
                </form>
            </div>
            <div class="col-sm-4 col-sm-offset-2">
                <img class="img-responsive center-block" src="img/logomd.png" alt="logo">
            </div>

        </div>
    </div>
</footer>
</body>


<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/control.js"></script>
</html>
