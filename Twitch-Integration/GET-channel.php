<?php
    function GET_channel($user) {
        $config = parse_ini_file("config.ini", true);
        $url = str_replace("{user}", $user, $config["endpoints"]["GET_channel"]);
        $client_id = $config["auth"]["client_id"];

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_URL => $url . "?client_id={$client_id}",
            CURLOPT_HEADER => false
        ));

        return json_decode(curl_exec($curl), true);
    }
