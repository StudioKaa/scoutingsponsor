<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background: #66b266">
<style>
    body{

    }
    form{
        text-align: center;
    }
    .form-group{
        margin-bottom: 5%;
    }
    input, textarea{
     width: 50% ;
    }
</style>
    @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach

<div style="background: ">
    <form method="POST" action="{{route('plots.store')}}">
        @csrf
<div style="display: flex; justify-content: flex-start">
    <h1  style="color: #CCE5CC; margin: 20px;">{{$plot->plotname}}</h1>
    <p style="color: #CCE5CC; margin: 20px; font-size: 30px;" >{{$plot->sold}}</p>
</div>
        <div class="form-group">
        <label style="color: #CCE5CC" for="name">naam</label><br>
        <input type="text" id="name" name="name" required><br>
    </div>

    <div class="form-group">
    <label style="color: #CCE5CC" for="lastname">Achternaam</label><br>
        <input type="text" id="lastname" name="lastname" required><br>
    </div>

    <div class="form-group">
    <label style="color: #CCE5CC" for="phone">telefoon</label><br>
        <input type="tel" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" id="phone" name="phone" required><br>
    </div>

    <div class="form-group">
    <label style="color: #CCE5CC" for="adres">addres</label><br>
        <input type="text" id="adres" name="adres" required><br>
    </div>

    <div class="form-group">
    <label  style="color: #CCE5CC" for="email">email</label><br>
        <input type="email" id="email" name="email" required><br>
    </div>

        <input type="hidden" name="plotId" value="{{$plot->id}} ">
        <input type="hidden" name="sold" value="1">
        <input style="background: #99cc99; color: #CCE5CC;" type="submit" value="koop plot">
    </form>

    <h1>{{$plot->plotname}}</h1>
    

