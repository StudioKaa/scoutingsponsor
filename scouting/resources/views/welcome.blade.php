<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Scouting</title>

        <link rel="stylesheet" href="css/main.css">

        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="js/jquery.maphilight.js"></script>
        <script src="js/main.js"></script>

        <script type="text/javascript">$(function() {
                $('.map').maphilight();
                $('#squidheadlink').mouseover(function(e) {
                    $('#squidhead').mouseover();
                }).mouseout(function(e) {
                    $('#squidhead').mouseout();
                }).click(function(e) { e.preventDefault(); });
            });
        </script>
    </head>
    <body>
    <header>
        <div class="container">
            <img src="img/logo.png" alt="logo">
            <h1>Sponser Scouting Raamsdonksveer</h1>
        </div>
    </header>
    <main>
        <!-- de info pop up -->
        <div class="info" id="info">
            <h2>Sonser Scouting Raamsdonksveer</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Aut beatae dignissimos eius eveniet nisi recusandae, saepe velit vero.
                Aut cumque debitis deleniti expedita harum laborum mollitia odio qui temporibus vel?
                Amet consequuntur corporis culpa dicta dolor dolore, ea exercitationem harum inventore laboriosam,
                laborum maiores mollitia nihil praesentium rem saepe sequi ullam unde voluptas voluptatum.
                Aspernatur debitis id nesciunt nostrum obcaecati optio perspiciatis quidem, saepe, sed temporibus,
                unde veritatis voluptatum! Accusantium at atque corporis delectus dolorem doloremque dolores eaque explicabo
                fugit harum ipsa iure laborum maxime molestias nesciunt,
                non nostrum nulla numquam placeat quas qui quia quidem quisquam quo quod quos repellendus reprehenderit,
                repudiandae sit soluta unde vel vitae voluptates. Aliquam atque consequuntur deserunt facilis magni nisi quia repellat vel.
                Beatae dignissimos iste libero maiores maxime numquam,
                porro veritatis. Animi consectetur consequatur culpa cupiditate deleniti dolor dolorem eaque facilis fuga hic,
                inventore, itaque magni modi molestiae nulla optio, tenetur vel vitae?
            </p>
            <img src="img/info.png" alt="info">
            <p class="close" onclick="popUp()">close</p>
        </div>

        <!-- de plattegrond -->
        <div class="plattegrond">
            <h2>Sponser nu een stuk terein</h2>
            <img src="img/plattegrond V3.png" class="map" usemap="#simple">
            <map name="simple">
            <?php
                $width = 44; // repeat 23x
                $height = 26; // repeat 31x
                $row = 0;
                $Xcoords = array();
                $Ycoords = array();
                for ( $y = 0; $y < 32; $y++)
                {
                    for($x = 0; $x < 25; $x++)
                    {
                        $xTop = $x * $width;
                        $yTop = $row;
                        $xBottom = $xTop + $width;
                        $yBottom = $yTop + $height;

                        echo "<area class='area {$x},{$y}' shape='rect' coords='{$xTop}, {$yTop}, {$xBottom}, {$yBottom}' href='javascript:void(0)' alt='area{$x},{$y}'>";
                        array_push($Xcoords, "{$x}");
                        array_push($Ycoords, "{$y}");
                    }

                    $row = $row + $height;
                }
            ?>
            </map>
        </div>
    </main>
    <footer>

    </footer>
    </body>
</html>
