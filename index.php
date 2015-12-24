<html>
    <head>
        <script src="Resources/jQuery.js"></script>
        <script src="Resources/Bootstrap.js"></script>
        <link rel="stylesheet" type="text/css" href="Resources/Bootstrap.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>
        <div class="row fill">
            <div class="col-md-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="text-center"><b>Latest Followers</b></div>
                    </div>
                    <div class="panel-body">
                        <div class="text-center">
                            <?php
                                include("Twitch-Integration/GET-followers.php");
                                include("Twitch-Integration/GET-channel.php");

                                $followers = GET_followers();
                                foreach($followers["follows"] as $follower) {
                                    $channel = GET_channel($follower["user"]["name"]);
                                    $name = $channel["name"];
                                    $logo = $channel["logo"];
                                    $url = $channel["url"];

                                    if (strlen($logo) == 0) {
                                        $logo = "../Resources/Images/twitch-icon.png";
                                    }

                                    echo "<a href='{$url}'><div class='text-uppercase'>{$name}</div><img width='100%' class='thumbnail' src='{$logo}'></a>";
                                }
                            ?>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
