<!DOCTYPE html>
<?php require_once "phpFunction/config.php"; ?>

<html lang="zh-hant">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="iotforSG90">
    <meta name="author" content="hywen">

    <title>IotARM</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/jumbotron.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            margin: 0;
            font-family: Microsoft JhengHei, "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 14px;
            line-height: 20px;
            color: #333333;
            background-color: #ffffff;
        }
    </style>
</head>

<body>
<nav class="navbar navbar-static-top navbar-dark bg-inverse">
    <a class="navbar-brand" href="#">雙軸馬達控制專案</a>
    <ul class="nav navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="#">專案說明 <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">關於我們</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">更多消息</a>
        </li>
    </ul>
</nav>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="display-4">玩手臂 Play the arm!</h1>
                <p>這是一個控制機器手臂的專案，您可以各種您喜歡的方式來控制機器手臂，<br>App、Terminal、Web、Bluetooth and so on...
                </p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">一起Play &raquo;</a></p>
            </div>
            <div class="col-md-6">
                <p>看看您的監控設備吧:</p>
                <img src="<?= $streamer; ?>" class="img-thumbnail">
            </div>
        </div>
    </div>
</div>

<div class="container"   style="height:550px;background: url('asset/image/color.jpg')">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-4">
            <h2>Android Controller<br>躺著玩</h2>
			<a href="asset\download\pietty0400b14.exe" download>
				<img src="asset/image/android.png" width="250">
			</a>
            <p>手機APP就可以及時智能監控</p>
            <!--<p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>-->
        </div>
        <div class="col-md-4">
            <h2>WEB Controller<br>馬上玩</h2>
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <a class="btn btn-primary trace" href="javascript:void()" aria-label="trace">
                            <i class=" fa fa-power-off" aria-hidden="true"></i>
                        </a>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="offset-md-2 col-md-10 offset-xs-2 col-xs-10" style="padding-left: 3px;">
                    <p>
                        <a class="btn btn-danger arrow" arrow="up" href="javascript:void()" aria-label="up">
                            <i class=" fa fa-arrow-circle-up" aria-hidden="true"></i>
                        </a>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <a class="btn btn-danger arrow" arrow="left" href="javascript:void()" aria-label="left">
                            <i class=" fa fa-arrow-circle-left" aria-hidden="true"></i>
                        </a>
                        <a class="btn btn-danger arrow" arrow="down" href="javascript:void()" aria-label="down">
                            <i class=" fa fa-arrow-circle-down" aria-hidden="true"></i>
                        </a>
                        <a class="btn btn-danger arrow" arrow="right" href="javascript:void()" aria-label="right">
                            <i class=" fa fa-arrow-circle-right" aria-hidden="true"></i>
                        </a>
                    <p id="show-data"></p>
                    <p>只要您有網路即可以瀏覽器控制</p>
                    <!--<p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>-->
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <h2>Windows Controller<br>隨時玩</h2>
			<img src="asset/image/win10.png" width="250">
            <!--<img src="asset/image/windows.jpg" width="250" class="img-thumbnail">-->
            <p>在家中以視窗軟體控制</p>
            <!--<p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>-->
        </div>
    </div>

    <hr>

    <footer>
        <p>&copy; MakerIOT 2016</p>
    </footer>
</div> <!-- /container -->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"
        integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY"
        crossorigin="anonymous"></script>

<script src="jsFunction/oneClick.js"></script>
<script src="jsFunction/trace.js"></script>

<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js"
        integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB"
        crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>