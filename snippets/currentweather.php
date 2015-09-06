<?php
    $json_string = 'https://api.forecast.io/forecast/20fa4e2eb84c29954fba8445e101e2da/-42.524138,172.832877?units=ca';
    $jsondata = file_get_contents($json_string);
    $weather = json_decode($jsondata, true);
?>
<script src="../js/skycons.js"></script>
<script>
    $( document ).ready(function() {
        var skycons = new Skycons({"color": "#999999"});
        skycons.add("icon_current", '<?php echo $weather['currently']['icon']; ?>');
        skycons.play();
    });

    function degToCompass(num) {
        var val = Math.floor((num / 22.5) + 0.5);
        var arr = ["N", "NNE", "NE", "ENE", "E", "ESE", "SE", "SSE", "S", "SSW", "SW", "WSW", "W", "WNW", "NW", "NNW"];
        return arr[(val % 16)];
    }

</script>
<h4>Current Weather Conditions: <a href="information/weather.php">Full Forecast</a></h4>
<div class="row">
<div class="col-md-12">
    <canvas id="icon_current" style="width:82px; height: 82px" height="82" width="82"></canvas>
    <span id="temp" style="display:inline-block; font-size: 50px; margin-top: 10px; position:absolute; color: #999;"><?php echo $weather['currently']['temperature']; ?>&#8451;</span>
</div>
</div>
<div class="row">
<div class="col-md-12">
    <p><?php echo $weather['currently']['summary']; ?> &middot; Feels like <?php echo $weather['currently']['apparentTemperature']; ?>&#8451;<br>
        Wind: <?php echo $weather['currently']['windSpeed']; ?> km/h (<script>document.write(degToCompass(<?php echo $weather['currently']['windBearing'];?>))</script>)<br>
        <br><strong>Today</strong><br>
        Low: <?php echo $weather['daily']['data'][0]['temperatureMin']?>&deg;C <br>High: <?php echo $weather['daily']['data'][0]['temperatureMax']?>&deg;C<br>
        <br><strong>Next 24 Hours:</strong><br>

        <?php echo $weather['hourly']['summary']; ?>
        <br><br><strong>Next 7 Days:</strong><br>
        <?php echo $weather['daily']['summary']; ?>

    </p>
</div>
</div>