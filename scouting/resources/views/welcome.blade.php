<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Scouting</title>

        <link rel="stylesheet" href="{{ asset('css/main.css') }}">

        <!-- dit linkt naar de js extentie jquery -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

        <!-- dit linkt naar de jquery code voor het laten zien van de vakjes-->
        <script type="text/javascript" src="js/jquery.maphilight.js"></script>

        <!-- dit linkt naar de js file -->
        <script src="js/main.js"></script>

        <!-- dit stukje script zorgt er voor dat je de vakjes kan zien -->
        <script type="text/javascript">$(function() {
                $('.map').maphilight();
            });
        </script>
    </head>
    <body>
    <header>
        <div class="container">
            <img src="img/logo.png" alt="logo" style="margin: 20px;">
            <h1>Sponser Scouting Raamsdonksveer</h1>
        </div>
    </header>
    <main>
        <!-- de info pop up -->
        <div class="info" id="info">
            <h2>Sponsor Scouting Raamsdonksveer</h2>
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

            <!-- de titel -->
            <h2>Sponsor nu een stuk terein</h2>

            <!-- een error vakje -->
            <div class="error"></div>

            <!-- de plattegrond afbeelding -->
            <img src="img/plattegrond V4.png" class="map" id="img" usemap="#simple">

            <!-- de map waar de vakjes op komen-->
            <map name="simple">
                <!-- een foreach die de de vakjes aanmaakt -->
                @foreach($plots as $plot)
                    <?php
                        //de data uit de database word met formules naar de juiste coords getransformeerd

                        //xTop is de X cord voor de linker bovenhoek van een vakje
                        $xTop = $plot->x * 44;

                        //de yTop is Y cord voor de linker bovenhoek van een vakje
                        $yTop = $plot->y * 26;

                        //de xBottom is de X cord voor de rechter onderhoek van een vakje
                        $xBottom = $xTop + 44;

                        //de yBottom is de Y cord voor de rechter onderhoek van een vakje
                        $yBottom = $yTop + 26;

                        //check of het vakje al verkocht is
                        //een area is een vakje
                        if ($plot->sold == 1){
                            echo "<area class='area {$plot->x},{$plot->y}' shape='rect' coords='{$xTop}, {$yTop}, {$xBottom}, {$yBottom}'
                                    href=\"plots/{$plot->id}\" alt='area{$plot->x},{$plot->y}'
                                    data-maphilight='{\"fillColor\":\"FFFF00\", \"fillOpacity\":0.6}'>";
                        }elseif ($plot->sold == 2){
                            echo "<area class='area {$plot->x},{$plot->y}' shape='rect' coords='{$xTop}, {$yTop}, {$xBottom}, {$yBottom}'
                                    href=\"plots/{$plot->id}\" alt='area{$plot->x},{$plot->y}'
                                    data-maphilight='{\"fillColor\":\"FF0000\", \"fillOpacity\":0.6}'>";
                        }else{
                            echo "<area class='area {$plot->x},{$plot->y}' shape='rect' coords='{$xTop}, {$yTop}, {$xBottom}, {$yBottom}'
                                    href=\"plots/{$plot->id}\" alt='area{$plot->x},{$plot->y}'>";
                        }
                    ?>
                @endforeach
            </map>
            <div id="status"></div>
        </div>

        <div class="info2">
            <h2>Sponsor Scouting Raamsdonksveer</h2>
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
        </div>
    </main>
    <footer>

    </footer>
    </body>
</html>
