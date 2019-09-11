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
    <h1>{{$plot->name}}</h1>
    <p>{{$plot->sold}}</p>
    

       @if($plot->sold == 0) 
        <a href="{{ route('plots.edit', $plot->id) }}">edit</a><br>     
       @endif
  
    <a href="{{ route('home') }}">Go back to all plots</a>



</body>
</html>