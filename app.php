<!DOCTYPE html>
<?php require_once "phpFunction/config.php"; ?>

<html lang="zh-hant">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
<div class="container" style="text-align:center">
    <div class="row">
        <div class="col-md-4">
            <p>看看您的監控設備吧:</p>
            <img src="<?=$streamer;?>" class="img-thumbnail">
        </div>
    </div>


    <div class="col-md-4">
        <h2>Android Controller<br>馬上玩</h2>
        <div class="row">
            <div class="col-md-12">
                <p>
                    <a class="btn btn-danger" href="path/to/settings" aria-label="Delete">
                        <i class=" fa fa-power-off" aria-hidden="true"></i>
                    </a>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="offset-md-2 col-md-10">
                <p>
                    <a class="btn btn-danger arrow" arrow="up" href="javascript:void()" aria-label="up"><i
                            class=" fa fa-arrow-circle-up" aria-hidden="true"></i></a>
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
                </p>
                <p id="show-data"></p>

            </div>
        </div>
    </div>
</div>
<!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"
        integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY"
        crossorigin="anonymous"></script>

<script src="jsFunction/oneClick.js"></script>

<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js"
        integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB"
        crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>