<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="static/css/weatherView.css">
    <script src="static/js/jquery-3.4.1.min.js" type="text/javascript"></script>
    <script src="static/js/layerAnimation.js"></script>
    <title>Volume Key Layer</title>
</head>
<body>
    <div class="layer-container display">
        <p class="layer-text" id="weather-name"><?= $response->name ?></p>
        <p class="layer-text" id="weather-description"><?= $response->weather[0]->description ?></p>
        <img id="weatherIcon" src="http://openweathermap.org/img/w/<?= $response->weather[0]->icon ?>.png">
        <p class="layer-text" id="weather-temp"><?= $response->main->temp ?>℃</p>
        <p class="layer-text" id="weather-min-temp">Min <?= $response->main->temp_min ?>℃</p>
        <p class="layer-text" id="weather-max-temp">Max <?= $response->main->temp_max ?>℃</p>
    </div>
</body>
</html>