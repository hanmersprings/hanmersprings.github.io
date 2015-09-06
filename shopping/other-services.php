<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Services Hanmer Springs, New Zealand">
    <title>Services in Hanmer Springs</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!-- Default Main Theme -->
    <link rel="stylesheet" href="../theme/default/main.min.css">
    <link rel="stylesheet" href="../theme/default/datatables.bootstrap.min.css">
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
<body>

<?php include('../snippets/navigation.html') ?>

<div class="container">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li><a href="/shopping.php">Shopping</a></li>
            <li class="active">Other Services</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h1>Services in Hanmer Springs</h1>
            <p class="lead"></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <h4>Other Shops:</h4>
            <ul id="sidebar-list" class="list-unstyled">
                <li><a href="/shopping/art-galleries.php">Art Galleries</a></li>
                <li><a href="/shopping/books-gifts-souvenirs-crafts.php">Books, Gifts, Souvenirs &amp; Crafts</a></li>
                <li><a href="/shopping/clothing.php">Clothing</a></li>
                <li><a href="/shopping/food-liquor.php">Food &amp; Liquor</a></li>
                <li><a href="/shopping/health-beauty.php">Health &amp; Beauty</a></li>
                <li><a href="/shopping/sports-outdoors.php">Sports &amp; Outdoors</a></li>
                <li><a href="/shopping/other-services.php">Other Services</a></li>
            </ul>
        </div>
        <div class="col-md-9">

            <div class="row">
                <div class="col-md-12">
                    <p class="lead">From property managers to caterers, lawyers to cleaners. Whatever service you require you will
                    find it here in Hanmer Springs. Use our search feature to quickly find what you are looking for.</p>
                </div>
            </div>

            <?php
                require_once '../meekrodb.2.3.class.php';
                DB::$user = 'hanmersprings';
                DB::$password = 'l^b2C28c';
                DB::$dbName = 'hanmersprings';
                DB::$port = '3306';
                DB::$host = '127.0.0.1';

                $listings = DB::query("SELECT * FROM listings WHERE listing_directory = 1 ORDER BY listing_name");

            ?>

            <table class="table table-condensed" id="services-list">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Service</th>
                        <th>Address</th>
                        <th>Phone</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($listings as $listing) {
                            echo "<tr><td>".$listing['listing_name']."</td><td>".$listing['listing_type']."</td><td>".$listing['listing_address']."</td><td>".$listing['listing_phone']."</td></tr>";
                        }
                    ?>
                </tbody>

            </table>

        </div>
    </div>

    <?php include('../snippets/footer.php') ?>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script type="text/javascript" charset="utf8" src="../libs/DataTables-1.10.7/media/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready( function () {
        $('#services-list').DataTable({
            "paging":   false,
            "ordering": false,
            "info":     false
        });
    });
</script>

</body>
</html>