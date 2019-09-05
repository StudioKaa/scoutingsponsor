<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Scouting</title>

        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="js/jquery.maphilight.js"></script>
        <script type="text/javascript">$(function() {
                $('.map').maphilight();
                $('#squidheadlink').mouseover(function(e) {
                    $('#squidhead').mouseover();
                }).mouseout(function(e) {
                    $('#squidhead').mouseout();
                }).click(function(e) { e.preventDefault(); });
            });</script>
    </head>
    <body>
    <img src="plattegrond.png" width="1100" height="832" class="map" usemap="#simple">
    <map name="simple">
        <?php
        $width = 44; // repeat 23x
        $height = 26; // repeat 31x
        $row = 26;
        $coords = array();
        for ( $y = 0; $y < 31; $y++)
        {
            for($x = 0; $x < 23; $x++)
            {
                $xTop = $x * $width;
                $yTop = $row;
                $xBottom = $xTop + $width;
                $yBottom = $yTop + $height;

                echo "<area class='area {$x},{$y}' shape='rect' coords='{$xTop}, {$yTop}, {$xBottom}, {$yBottom}' href='javascript:void(0)' alt='area{$x},{$y}'>";
                array_push($coords, "{$x}, {$y}");
            }

            $row = $row + $height;
        }
        //        var_dump($coords);
        ?>
    </map>
    </body>
</html>
