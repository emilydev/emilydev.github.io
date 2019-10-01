<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link href="files/style.css" type="text/css" rel="stylesheet">
        <link href="files/style.scss" type="text/css" rel="stylesheet">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    </head>
    <body>

        <div id="toggle" class="topregion" style="display: show;">
            <a class="warn"><strong>Note:</strong></a><a class="note"> 99,9% self coded, future updates will come</a>
            <button id="close">×</button>
        </div>


        <div id="middleregion">
            <a class="letter">E</a>

            <marquee>
                x <a>emily</a>
                x <a>name</a> x
            </marquee>

        </div>



        <video autoplay loop id="myVideo">
            <source src="vid<?php echo(rand(1,2)); ?>.mp4" type="video/mp4">
        </video>


<script>
$('#close').click(function (e) {
    if ($(e.target).attr('id') != 'xbut') {
        $('#toggle').hide();
        event.stopPropagation();
    }
})
</script>

    </body>
</html>