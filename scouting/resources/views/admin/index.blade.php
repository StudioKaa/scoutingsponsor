<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>



<script src="js/main.js"></script>

<body  style="background: #66b266;" id="body" onload="authorise()">

<h1 style="color: #CCE5CC; margin: 20px;">Alle verkochten plots:</h1>

    @foreach($fulldata as $data)
    <ul>
        <listyle style="color: #CCE5CC; margin: 20px;" >Plot: {{$data->plotname}} <br>
            @if($data->sold == 2)

                Status: Verkocht aan {{$data->name}} {{$data->lastname}}<br>


            @elseif($data->sold == 1)

                <form method="POST" action="{{route('admin.update',$data->id)}}">
                    @csrf
                    @method('PUT') 
                    <input type="hidden" name="id" value="{{$data->sponsorId}}">
                    <input type="hidden" name="sold" value="2">
                <input type="submit" value="Verkocht">

                status: Pending    {{$data->name}} {{$data->lastname}}<br>

            @endif
                Telefoon nummer:  {{$data->phone}}<br>
                Email:            {{$data->email}}<br>
                Addres:           {{$data->adres}}<br>
                Prijs:            {{$data->price}}<br>
            </li>
    </ul>

    @endforeach

    </body>

<?php


?>
