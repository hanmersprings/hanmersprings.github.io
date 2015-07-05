function geoFindMe(){



        weatherResult = 'http://api.openweathermap.org/data/2.5/weather?id=2190299&units=metric';
        console.log(weatherResult);
        $.ajax({
            url: weatherResult,
            dataType: 'jsonp',
            success: function(dataWeGotViaJsonp){
                var params = (dataWeGotViaJsonp.main);
                var lat = (dataWeGotViaJsonp.coord.lat);
                var lon = (dataWeGotViaJsonp.coord.lon);
                var temp = params.temp;
                var humidity = params.humidity;
                var temp_min = params.temp_min;
                var temp_max = params.temp_max;
                var weatherCode = dataWeGotViaJsonp.weather[0]['id'];
                var weatherNow = dataWeGotViaJsonp.weather[0]['description'];
                document.getElementById("weather").innerHTML = weatherNow;
                document.getElementById("weatherParams").innerHTML = 'Temperature: '+temp+'&degC<br>'+'Humidity: '
                +humidity+'&#37;<br>Max. temp: '+temp_max+'&degC<br>Min. temp: '+temp_min+'&degC';
                switch(true){
                    case (weatherCode == 800):   document.getElementById("icon").innerHTML =
                        '<i class="wi wi-day-sunny"></i>';
                        break;
                    case (weatherCode == 801):	document.getElementById("icon").innerHTML =
                        '<i class="wi wi-day-cloudy"></i>';
                        break;
                    case (weatherCode == 802):	document.getElementById("icon").innerHTML =
                        '<i class="wi wi-day-cloudy"></i>';
                        break;
                    case (weatherCode == 803):	document.getElementById("icon").innerHTML =
                        '<i class="wi wi-day-cloudy"></i>';
                        break;
                    case (weatherCode == 804):	document.getElementById("icon").innerHTML =
                        '<i class="wi wi-cloudy"></i>';
                        break;
                    case (weatherCode >= 200 && weatherCode <= 232):
                        document.getElementById("icon").innerHTML = '<i class="wi wi-thunderstorm"></i>';
                        break;
                    case (weatherCode >= 300 && weatherCode <= 321):
                        document.getElementById("icon").innerHTML = '<i class="wi wi-day-sprinkle"></i>';
                        break;
                    case (weatherCode >= 500 && weatherCode <= 531):
                        document.getElementById("icon").innerHTML = '<i class="wi wi-day-rain"></i>';
                        break;
                    case (weatherCode >= 600 && weatherCode <= 622):
                        document.getElementById("icon").innerHTML = '<i class="wi wi-day-snow"></i>';
                        break;
                    default:	document.getElementById("icon").innerHTML = '<i class="wi wi-day-fog"></i>';

                }
            }

        });


}
geoFindMe();