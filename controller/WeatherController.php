<?php


require_once ('model/WeatherModel.php');


$weatherInstance = new WeatherModel();

$response        = $weatherInstance->getWeatherData();

require_once ('view/WeatherView.php');