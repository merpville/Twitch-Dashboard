<html>
    <head>
        <script src="Resources/jQuery.js"></script>
        <script src="Resources/Bootstrap.js"></script>
        <link rel="stylesheet" type="text/css" href="Resources/Bootstrap.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="Resources/helpers.js"></script>

        <style>
            body {
                background-color: #0d000c;
            }
            .container {
                padding-top: 10px;
                padding-bottom: 10px;
                width: 95% !important;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="col-md-5">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="text-center">
                                    <b>Latest Followers</b>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div id="latestFollowers" class="text-center">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <iframe frameborder="0" scrolling="no" height="97%" src="http://twitch.tv/merpette1/chat?popout="></iframe>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
