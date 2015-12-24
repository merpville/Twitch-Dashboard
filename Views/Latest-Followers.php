<?php
    include("../Twitch-Integration/GET-followers.php");
    include("../Twitch-Integration/GET-channel.php");

    $followers = GET_followers();
    foreach($followers["follows"] as $follower) {
        $channel = GET_channel($follower["user"]["name"]);
        $name = $channel["name"];
        $logo = $channel["logo"];
        $url = $channel["url"];

        if (strlen($logo) == 0) {
            $logo = "/Resources/Images/twitch-icon.png";
        }

        echo "<a href='{$url}'><div class='text-uppercase'>{$name}</div><img width='100%' class='thumbnail' src='{$logo}'></a>";
    }
