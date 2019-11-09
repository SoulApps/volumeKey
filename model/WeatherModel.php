<?php

/**
 * Class WeatherModel
 * @author Ramon Guardia Lopez
 */
class WeatherModel
{

    public function __construct()
    {
    }

    /**
     * getWeatherData
     * It gets  the response calling the api. The response is decoded and returned
     * @return response object
     */
    public function getWeatherData()
    {
        require_once ('WeatherApiHandler.php');
        require_once ('data/Constants.php');
        $params    = array('q' => Constants::ZONE, 'appid' => Constants::API_KEY, "units" => Constants::UNITS);
        $response  = WeatherApiHandler::callAPI(Constants::PETITION_GET,Constants::URL,$params);

        return json_decode($response);
    }



}