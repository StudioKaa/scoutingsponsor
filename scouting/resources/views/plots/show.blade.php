<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/costum.css')}}">

<body>
<header>
    <img src="/img/logo.png" alt="logo" style="margin: 20px;">
    <div class="container">
        <h1>Sponser Scouting Raamsdonksveer</h1>
    </div>
</header>
<main>
    <div class="container" style="text-align: center">


        <h1>Plot naam: {{$plot->plotname}}</h1>
        @if($plot->sold == 0)

            <p>Dit plot is nog niet verkocht!</p>

        @elseif($plot->sold == 1)
            <p>dit plot is bijna verkocht</p>
        @else

            <p>Helaas!</p>
            <p>Dit plot is al verkocht aan {{$sponsor->plotname}}.</p>

        @endif

        @if($plot->sold == 0)

            <a href="{{ route('plots.edit', $plot->id) }}">Koop Plot</a><br><br>

        @endif

        <a href="{{ route('home') }}">Go back to all plots</a>


    </div>
</main>
</body>
</html>




