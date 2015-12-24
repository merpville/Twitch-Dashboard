<?php
    $config = parse_ini_file("config.ini", true);
    $url = str_replace("{user}", $config["auth"]["username"], $config["endpoints"]["POST_auth"]);
    $fields = array(
        "response_type" => "token",
        "client_id" => $config["auth"]["client_id"],
        "redirect_uri" => "http://localhost",
        "scope" => "user_read"
    );

    $fields_string = "";
    foreach($fields as $key => $value) {
        $fields_string .= "{$key}={$value}&";
    }
    $fields_string = rtrim($fields_string, '&');

    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_POST => count($fields),
        CURLOPT_POSTFIELDS => $fields_string
    ));
    $POST_auth = curl_exec($curl);
    curl_close($curl);
