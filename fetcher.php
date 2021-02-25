<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Fetch tournaments data from the AIBVC APIs.
 */
function aibvc_tournaments_fetch() {

    $curl = curl_init();
        curl_setopt($curl, CURLOPT_HTTPGET, 1);
        curl_setopt($curl, CURLOPT_URL, "http://aibvcapi.azurewebsites.net/api/v1/tornei/GetTornei/");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_HTTPHEADER, [
            'Content-Type' => 'application/json',
        ]);

        $rawResponse = curl_exec($curl);
        curl_close($curl);

        $collection = json_decode($rawResponse, true);
        return $collection;

}

