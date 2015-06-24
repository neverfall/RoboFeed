<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width; initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:700,300" rel="stylesheet" type="text/css" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" href="css/bootstrap.min.css" />

    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/clockpicker.css">
    <script type="text/javascript" src="js/clockpicker.js"></script>
    <script type="text/javascript">
        $('.clockpicker').clockpicker();
    </script>


    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css"
          rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/css/user.css">
    <script src="js/jquery.js"></script> <!-- or use local jquery -->
    <title>config</title>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript">
        function mostrar(id) {
            if (id == "modo1") {
                $("#modo1").show();
                $("#modo2").hide();
                $("#modo3").hide();
                $("#modo4").hide();
            }

            if  (id == "modo2") {
                $("#modo1").hide();
                $("#modo2").show();
                $("#modo3").hide();
                $("#modo4").hide();
            }


            if (id == "modo3") {
                $("#modo1").hide();
                $("#modo2").hide();
                $("#modo3").hide();
                $("#modo4").show();
            }

            if (id == "modo4") {
                $("#modo1").hide();
                $("#modo2").hide();
                $("#modo3").hide();
                $("#modo4").show();
            }
        }
    </script>
</head>


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
                <li>
                    <a href="#">Donde Comprar</a>
                </li>
                <li>
                    <a href="#">Support</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
                <li>
                    <a href="login.php">Login</a>
                </li>
                <li>
                    <a class="active" href="register.php">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<header>

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <form action="config.php" method="post" class="centrado">
                        <h3>Configurame!</h3>
                        <select id="status" name="status" onChange="mostrar(this.value);">
                            <option value="modo1">Tu mascota esta muy bien entrenada y solo se alimenta cuando tiene hambre?</option>
                            <option value="Modo2">Tu mascota sigue un dieta o se aliementa cada ciertas horas?</option>
                            <option value="Modo3">Tu mascota come 3 veces al dia?</option>
                            <option value="modo4">Quieres alimentar a tu mascota remotamente sin ninguna configuracion adicional?</option>
                        </select>
                    </form>


                </div>
            </div>
        </div>
    </div>


    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div id="modo1" style="display: none;">
                        <h2>Seleccionaste el modo 1</h2>
                        <form action="index.php" method="post">
                            <p>Nombre:<br/>
                                <input type="text" name="nombre" /></p>
                            <p>Centro:<br/>
                                <input type="text" name="centro" /></p>
                            <input type="submit" name="send" value="Enviar" />
                        </form>
                    </div>


                    <div id="modo2" style="display: none;">
                        <h2>Seleccionaste el modo 2</h2>
                        <form action="config.php" method="post">
                            <p>Nombre:<br/>
                                <input type="text" name="nombre" /></p>
                            <p>Centro:<br/>
                                <input type="text" name="centro" /></p>
                            <input type="submit" name="send" value="Enviar" />
                        </form>
                    </div>
                    <div id="modo3" style="display: none;">
                        <h2>Seleccionaste el modo 3</h2>
                        <form action="index.php" method="post">
                            <p>Nombre:<br/>
                                <input type="text" name="nombre" /></p>
                            <p>Centro:<br/>
                                <input type="text" name="centro" /></p>
                            <input type="submit" name="send" value="Enviar" />
                        </form>
                    </div>
                    <div id="modo4" style="display: none;" class="centrado">
                        <div class="container">
                            <div class="row ">
                                <div class="col-md-4">
                                    <link rel="stylesheet" href="forms/formoid-biz-green.css" type="text/css">
                                    <script type="text/javascript" src="forms/jquery.min.js"></script>
                                    <form class="formoid-biz-green" style="background-color:#1A2223;font-size:14px;font-family:'Open Sans','Helvetica Neue', 'Helvetica', Arial, Verdana, sans-serif;color:#ECECEC;max-width:480px;min-width:150px"
                                          method="post">
                                        <div class="title">
                                            <h2>Mode 4</h2>
                                        </div>
                                        <div class="element-checkbox">
                                            <label class="title"></label>
                                            <div class="column column1">
                                                <label>
                                                    <input type="checkbox" name="checkbox[]" value="Select">
                                                    <span>Select</span>
                                                </label>
                                            </div>
                                            <span class="clearfix"></span>
                                        </div>
                                        <div class="element-number">
                                            <label class="title"></label>
                                            <input class="large" type="text" min="1" max="100" name="number"
                                                   placeholder="Numero de tazas" value="">
                                        </div>
                                        <div class="submit">
                                            <input type="submit" value="Feed">
                                        </div>
                                    </form>
                                    <p class="frmd">
                                        <script type="text/javascript" src="forms/formoid-biz-green.js"></script></p>
                                    </form>
                                </div>
                </div>
            </div>
        </div>
    </div>





</header>

</body>
</html>