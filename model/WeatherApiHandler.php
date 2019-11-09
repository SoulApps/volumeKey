<?php

/**
 * Class WeatherApiHandler
 * @author Ramon Guardia Lopez
 */
class WeatherApiHandler
{
    /**
     * @param $method  Type of connection
     * @param $url     URL to connect
     * @param $data    aditional params
     * @return $result
     */
    public static function callAPI($method, $url, $data)
    {
        $curl = curl_init();

        switch ($method) {
            case Constants::PETITION_POST:
                curl_setopt($curl, CURLOPT_POST, true);
                if ($data)
                    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                break;
            case Constants::PETITION_PUT:
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, Constants::PETITION_PUT);
                if ($data)
                    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                break;
            default:
                if ($data)
                    $url = sprintf('%s?%s', $url, http_build_query($data));
        }

        // OPTIONS:
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);

        // EXECUTE:
        $result = curl_exec($curl);
        if (!$result) {
            die('Connection Failure');
        }
        curl_close($curl);
        return $result;
    }
}