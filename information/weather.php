<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Up to date weather info for Hanmer Springs, New Zealand">
    <title>Hanmer Springs, New Zealand Weather</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!-- Default Main Theme -->
    <link rel="stylesheet" href="../theme/default/main.css">
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-64036231-1', 'auto');
        ga('send', 'pageview');

    </script>

    <!-- Gleam.io Capture Tracking -->
    <script src="https://js.gleam.io/oi-Sj6j1eqk.js" async="async"></script>

</head>

<body id="content-page">

<?php include('../snippets/navigation.html') ?>

<div class="container">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li><a href="/information.php">Visitor Information</a></li>
            <li class="active">Seasons &amp; Climate</li>
        </ol>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h1>Hanmer Springs Weather Forecast</h1>

            <iframe id="forecast_embed" type="text/html" frameborder="0" height="245" width="100%" src="http://forecast.io/embed/#lat=-42.524138&lon=172.832877&name=Hanmer Springs&units=ca"> </iframe>

        </div>
    </div>

    <div class="row footer hidden-xs hidden-sm">
        <ul class="list-inline col-md-12">
            <li class="divider-vertical"><a href="/">Home</a></li>
            <li class="divider-vertical"><a href="/information.php">Information</a></li>
            <li class="divider-vertical"><a href="/activities.php">Activities</a></li>
            <li class="divider-vertical"><a href="/accommodation.php">Accommodation</a></li>
            <li class="divider-vertical"><a href="/dining.php">Eat &amp; Drink</a></li>
            <li><a href="/contact.php">Contact</a></li>
        </ul>
        <p>Copyright &copy; 2015 Hanmer Springs. All rights reserved.</p>
    </div>

</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

</body>
</html>