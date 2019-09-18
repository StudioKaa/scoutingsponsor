<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>



<?php


?>
<body  style="background: #66b266;">
<div >


    <h1 style="color: #CCE5CC; margin: 20px;" >Plot naam: {{$plot->plotname}}</h1>
    @if($plot->sold == 0)

        <p style="color: #CCE5CC; margin: 20px;">Dit plot is nog niet verkocht!</p>

    @elseif($plot->sold == 1)
        <p style="color: #CCE5CC; margin: 20px;">dit plot is bijna verkocht</p>
    @else

        <p style="color: #CCE5CC; margin: 20px;">Helaas!</p>
        <p style="color: #CCE5CC; margin: 20px;">Dit plot is al verkocht aan {{$sponsor->plotname}}.</p>

    @endif

    @if($plot->sold == 0)

        <a style="color: #CCE5CC; margin: 20px;" href="{{ route('plots.edit', $plot->id) }}">Koop Plot</a><br><br>

    @endif

    <a style="color: #CCE5CC; margin: 20px;"  href="{{ route('home') }}">Go back to all plots</a>


</div>
</div>

</body>
</html>
