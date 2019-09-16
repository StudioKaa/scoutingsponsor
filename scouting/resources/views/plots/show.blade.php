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
<body style="background: #83e561">
<div class="showklass" style=" text-align: center;">
    <h1 style="color: #effbeb;">{{$plot->name}}</h1>
    <p  style="font-size: 30px; color: #effbeb;">{{$plot->sold}}</p>


       @if($plot->sold == 0)
        <a style="color: #effbeb;" href="{{ route('plots.edit', $plot->id) }}">edit</a><br>
       @endif

    <a style="color:#effbeb" href="{{ route('home') }}">Go back to all plots</a>

</div>

</body>
</html>
