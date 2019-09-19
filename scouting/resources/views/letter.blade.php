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
        <?php
            $id = 0;
        ?>
        <form action="{{ route('letter.update', $id) }}" method="POST">
            @csrf
            @method('PUT')

            <input type="hidden" name="mail" value="0">

            <label for="email">email</label>
            <input type="email" name="email" required>

            <input type="submit" value="uitschrijven">
        </form>
    </main>
    <footer>

    </footer>
</body>
</html>