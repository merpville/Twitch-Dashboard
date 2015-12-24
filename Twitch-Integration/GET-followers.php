<?php
    function GET_followers() {
        $config = parse_ini_file("config.ini", true);
        $url = str_replace("{user}", $config["auth"]["username"], $config["endpoints"]["GET_followers"]);
        $client_id = $config["auth"]["client_id"];
        $limit = 4;

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_URL => $url . "?client_id={$client_id}&limit={$limit}",
            CURLOPT_HEADER => false
        ));

        return json_decode(curl_exec($curl), true);
    }
