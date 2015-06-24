<html>

<head>
    <meta charset="utf-8">
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
                <li class="disabled">
                    <a class="active">status of Robofeed</a>
                </li>
                <li>
                    <a class="active" href="register.php">OFF</a>
                </li>
                <li class="disabled">
                    <a class="active"><?php
                        session_start();
                        $user=$_SESSION["user"];
                        echo "<p>$user.</p>" ;
                        ?></a>
                </li>
                <li>
                    <a class="active" href="index.html">Log Out<?php
                        session_destroy();
                        ?></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<header>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <link rel="stylesheet" href="forms/formoid-biz-green.css" type="text/css">
                    <script type="text/javascript" src="forms/jquery.min.js"></script>
                    <form class="formoid-biz-green" style="background-color:#1A2223;font-size:14px;font-family:'Open Sans','Helvetica Neue', 'Helvetica', Arial, Verdana, sans-serif;color:#ECECEC;max-width:480px;min-width:150px"
                          method="post">
                        <div class="title">
                            <h2>Mode 1</h2>
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
                        <div class="element-number">
                            <label class="title"></label>
                            <input class="large" type="text" min="0" max="100" name="number1"
                                   placeholder="Horas de espera" value="">
                        </div>
                        <div class="submit">
                            <input type="submit" value="Save">
                        </div>
                    </form>
                    <p class="frmd">
                        <script type="text/javascript" src="forms/formoid-biz-green.js"></script>
                    </p>
                </div>
                <div class="col-md-4">
                    <link rel="stylesheet" href="forms/formoid-biz-green.css" type="text/css">
                    <script type="text/javascript" src="forms/jquery.min.js"></script>
                    <form class="formoid-biz-green" style="background-color:#1A2223;font-size:14px;font-family:'Open Sans','Helvetica Neue', 'Helvetica', Arial, Verdana, sans-serif;color:#ECECEC;max-width:480px;min-width:150px"
                          method="post">
                        <div class="title">
                            <h2>Mode 2</h2>
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
                        <div class="element-number">
                            <label class="title"></label>
                            <input class="large" type="text" min="0" max="100" name="number1"
                                   placeholder="Horas de espera" value="">
                        </div>
                        <div class="submit">
                            <input type="submit" value="Save">
                        </div>
                    </form>
                    <p class="frmd">
                        <script type="text/javascript" src="forms/formoid-biz-green.js"></script>
                    </p>
                </div>
                <div class="col-md-4">
                    <link rel="stylesheet" href="forms/formoid-biz-green.css" type="text/css">
                    <script type="text/javascript" src="forms/jquery.min.js"></script>
                    <form class="formoid-biz-green" style="background-color:#1A2223;font-size:14px;font-family:'Open Sans','Helvetica Neue', 'Helvetica', Arial, Verdana, sans-serif;color:#ECECEC;max-width:480px;min-width:150px"
                          method="post">
                        <div class="title">
                            <h2>Mode 3</h2>
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
                        <div>

                            <div class="row">
                                <div class="col-xs-6 col-sm-4"><form>
                                        Select a time:
                                        <input type="time" name="usr_time">
                                    </form>


                                </div>
                                <div class="col-xs-6 col-sm-4"><form>
                                        Select a time:
                                        <input type="time" name="usr_time">
                                    </form></div>
                                <!-- Optional: clear the XS cols if their content doesn't match in height -->
                                <div class="clearfix visible-xs-block"></div>
                                <div class="col-xs-6 col-sm-4"><form>
                                        Select a time:
                                        <input type="time" name="usr_time">
                                    </form></div>
                            </div>
                        <div class="submit">
                            <input type="submit" value="Save">
                        </div>
                        </div>
                    </form>
                    <p class="frmd">
                        <script type="text/javascript" src="forms/formoid-biz-green.js"></script>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="section">

                    </p> <div class="container">
                        <div class="row">
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
                                    <script type="text/javascript" src="forms/formoid-biz-green.js"></script>
                </div>
                <div class="col-md-4"></div>
                <!-- AQUI INFORMACION -->
                <div class="col-md-4">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="http://www.youtube.com" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
</body>

</html>
