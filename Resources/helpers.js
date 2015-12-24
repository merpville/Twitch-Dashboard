$(document).ready(function() {
    $.get("../Views/Latest-Followers.php", function (result) {
        $('#latestFollowers').html(result);
    });

    // Function for timed refreshes
    setInterval(function() {
        $.get("../Views/Latest-Followers.php", function (result) {
            $('#latestFollowers').html(result);
        });
    }, 15000);
});