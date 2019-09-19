<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<?php


?>
<body>
    <h1>Plot naam: {{$plot->plotname}}</h1>
    @if($plot->sold == 0)
    
        <p>Dit plot is nog niet verkocht!</p>

    @elseif($plot->sold == 1)
        <p>dit plot is bijna verkocht</p>

    @else

        <p>Helaas!</p>
        <p>Dit plot is al verkocht aan {{$sponsor->name}}.</p>
    
    @endif

    @if($plot->sold == 0) 

        <a href="{{ route('plots.edit', $plot->id) }}">Koop Plot</a><br><br>  

    @endif
  
    <a href="{{ route('home') }}">Go back to all plots</a>


</div>

</body>
</html>
