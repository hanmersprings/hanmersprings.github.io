<!DOCTYPE html>
<html>
<head lang="en">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="The only website you need to visit for Hanmer Springs, New Zealand">

    <meta property="og:type" content="website" >
    <meta property="og:title" content="Hanmer Springs, New Zealand" >
    <meta property="og:url" content="http://www.hanmersprings.org.nz" >
    <meta property="og:description" content="Hanmer Springs Information and Booking Website" >
    <meta property="og:image" content="http://www.hanmersprings.org.nz/media/images/banners/heritage-hanmer-springs.jpg" >

    <title>Hanmer Springs, New Zealand</title>
    <script src="js/loadCSS.js"></script>
    <script>
        loadCSS('theme/default/bootstrap.min.css');
        loadCSS('theme/default/bootstrap-theme.min.css');
        loadCSS('theme/font-awesome-4.3.0/css/font-awesome.min.css');
        loadCSS('theme/default/main.min.css');
    </script>

    <script>document.cookie = 'resolution=' + Math.max(screen.width, screen.height) + ("devicePixelRatio" in window ? "," + devicePixelRatio : ",1") + '; path=/';</script>
    <script src="js/gleam.js" async="async"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>(function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o), m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.hanmersprings.org.nz/js/ga.js', 'ga');
        ga('create', 'UA-64036231-1', 'auto');
        ga('send', 'pageview'); </script>

    <?php
        function sanitize_output($buffer) {
            $search = array(
                '/\>[^\S ]+/s',  // strip whitespaces after tags, except space
                '/[^\S ]+\</s',  // strip whitespaces before tags, except space
                '/(\s)+/s'       // shorten multiple whitespace sequences
            );
            $replace = array(
                '>',
                '<',
                '\\1'
            );
            $buffer = preg_replace($search, $replace, $buffer);
            return $buffer;
        }
        ob_start("sanitize_output");
    ?>



</head>
<body>

<?php include('snippets/navigation.html') ?>

<div class="container">
    <div class="row">
        <div class="col-md-12 hidden-xs hidden-sm"><img src="media/images/banners/heritage-hanmer-springs.jpg"
                                                        alt="Heritage Hotel - Hanmer Springs, New Zealand"
                                                        class="img-responsive"></div>
    </div>
    <div class="row">
        <div class="col-md-7"><h4>Something for Everyone at Hanmer Springs:</h4>

            <div class="row" id="categories">
                <div class="col-md-3">
                    <h5>Action</h5>
                    <a href="activities/action.php"><img src="media/images/thumbnails/200x120/jetboat.jpg"
                                                          alt="Group of people enjoying a thrilling jetboat ride"
                                                          class="img-responsive"></a>
                </div>
                <div class="col-md-3">
                    <h5>Arts</h5>
                    <a href="activities/art-culture-heritage.php"><img src="media/images/thumbnails/200x120/arts.jpg"
                                                                        alt="Painting of main road with conical hill in background"
                                                                        class="img-responsive"></a></div>
                <div class="col-md-3">
                    <h5>Biking</h5>
                    <a href="activities/biking-hiking-walking.php"><img
                            src="media/images/thumbnails/200x120/biking.jpg"
                            alt="Photo of man on mountainbike going downhill"
                            class="img-responsive"></a></div>
                <div class="col-md-3">
                    <h5>Fishing & Hunting</h5>
                    <a href="activities/sports.php"><img src="media/images/thumbnails/200x120/fish.jpg"
                                                          alt="Photo of a man flyfishing on a lake with mountainsin the distance"
                                                          class="img-responsive"></a></div>
                <div class="col-md-3">
                    <h5>Relaxing</h5>
                    <a href="activities/spa-wellness.php"><img src="media/images/thumbnails/200x120/relax.jpg"
                                                                alt="Photo of a woman getting a relaxing massage"
                                                                class="img-responsive"></a></div>
                <div class="col-md-3">
                    <h5>Shopping</h5>
                    <a href="shopping.php"><img src="media/images/thumbnails/200x120/shop.jpg"
                                                 alt="Photo of some shops of Hanmer Springs"
                                                 class="img-responsive"></a></div>
                <div class="col-md-3"><h5>Winter Sports</h5><img src="media/images/thumbnails/200x120/ski.jpg"
                                                                 alt="Photo of a snowboarder in the air"
                                                                 class="img-responsive"></div>
                <div class="col-md-3">
                    <h5>Wine &amp; Food</h5>
                    <a href="dining.php"><img src="media/images/thumbnails/200x120/dining.jpg"
                                               alt="Red wine and cheese board"
                                               class="img-responsive"></a></div>
                <div class="col-md-3">
                    <h5>Walking &amp; Hiking</h5>
                    <a href="activities/biking-hiking-walking.php"><img
                            src="media/images/thumbnails/200x120/hiking.jpg"
                            alt="A couple hiking in the mountains"
                            class="img-responsive"></a></div>
                <div class="col-md-3">
                    <h5>Family Fun</h5>
                    <a href="activities/family-fun-entertainment.php"><img
                            src="media/images/thumbnails/200x120/family.jpg"
                            alt="Family of four (Mum, Dad and 2 children) enjoying the pools"
                            class="img-responsive"></a></div>
                <div class="col-md-3"><h5>For The Lads</h5><img src="media/images/thumbnails/200x120/claybird.jpg"
                                                                alt="Photo of man with a gun shooting claybirds"
                                                                class="img-responsive"></div>
                <div class="col-md-3"><h5>Girls Weekend</h5><img src="media/images/thumbnails/200x120/hensparty.jpg"
                                                                 alt="Four women celebrating with wine"
                                                                 class="img-responsive"></div>
            </div>
            <h4 class="clear">Featured Listings:</h4>

            <div class="row featuredlistings">
                <div class="col-md-6"><h5>Scarborough Lodge</h5> <a href="accommodation/scarborough-lodge.php#acc1">
                        <img src="media/images/thumbnails/350x150/scarboroughlodge.jpg"
                             alt="Scarborough Lodge, Hanmer Springs" class="img-responsive"> </a>

                    <p>Couples only retreat located only 3mins walk from the Thermal Pools.</p></div>
                <div class="col-md-6"><h5>Hanmer Tours &amp; Shuttle</h5> <a
                        href="transport/hanmer-tours-shuttle.php#acc1"> <img
                            src="media/images/thumbnails/350x150/ShuttleBus.jpg" alt="Shuttle Bus"
                            class="img-responsive">
                    </a>

                    <p>Daily transport between Hanmer Springs and Christchurch.</p></div>
            </div>
            <div class="row clear featuredlistings">
                <div class="col-md-6"><h5>Thrillseekers</h5> <img src="media/images/thumbnails/350x150/rafting.jpg"
                                                                  alt="Rafting" class="img-responsive">

                    <p>Rafting, Jetboating, Bungy, Quad Bikes, Canoe Safari, Paintball and more&hellip;</p></div>
                <div class="col-md-6"><h5>Llama Trekking</h5> <img src="media/images/thumbnails/350x150/llamas.jpg"
                                                                   alt="Llama Trekking" class="img-responsive">

                    <p>Fun llama experiences with the family. </p></div>
            </div>
            <!--<h4>Exclusive Package Deals: <a href="#">view all</a></h4> <div class="row"> <div class="col-md-4"> <img src="http://placehold.it/400x400?text=Stay and Play" alt="..." class="img-responsive"> </div><div class="col-md-4"> <img src="http://placehold.it/400x400?text=Stay and Dine" alt="..." class="img-responsive"> </div><div class="col-md-4"> <img src="http://placehold.it/400x400?text=Spa Getaway" alt="..." class="img-responsive"> </div></div>-->
        </div>
        <div class="col-md-5">
            <?php include('snippets/currentweather.php') ?>
            <?php include('snippets/events.php') ?>
            <?php //include('snippets/maps-guides.php') ?>
            <?php //include('snippets/reviews.php') ?>

        </div>
    </div>
    <?php include('snippets/footer.php') ?>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script type="application/ld+json">
    {"@context" : "http://schema.org", "@type" : "Organization", "name" : "Hanmer Springs", "url" : "http://www.hanmersprings.org.nz", "sameAs" : [ "https://www.facebook.com/HanmerSpringsVillage", "http://www.twitter.com/hanmerspringsnz", "https://plus.google.com/110290489158528182050"]}

</script>


</body>
</html>