<?php
/**
 * Created by PhpStorm.
 * User: KTA-PC 21
 * Date: 7/1/15
 * Time: 12:32 PM
 */
?>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript">

    var elem=$('#fullscreen')

        var requestFullscreen = function (ele) {
            if (ele.requestFullscreen) {
                ele.requestFullscreen();
            } else if (ele.webkitRequestFullscreen) {
                ele.webkitRequestFullscreen();
            } else if (ele.mozRequestFullScreen) {
                ele.mozRequestFullScreen();
            } else if (ele.msRequestFullscreen) {
                ele.msRequestFullscreen();
            } else {
                // Fallback
                console.log('Fullscreen API is not supported.');
            }
        };
        $(function()
        {

            $('#fs').click(function()
            {

                requestFullscreen(document.documentElement); // Chrome, Opera & Safari (WebKit)

            });

        });


    </script>
</head>

<div id="fullscreen" style="background-color: :#fff00; width:600px;height:700px">

    dg
    dfg
    dfg
</div>

<button id="fs">full screen</button>


