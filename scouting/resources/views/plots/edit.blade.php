<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript" src="{{asset('js/js.js')}}"></script>

    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>Document</title>

    {{--<script>--}}
        {{--function data() {--}}
            {{--this.preventDefault();--}}
            {{--let custom = document.getElementById('div1');--}}
            {{--let radio = document.getElementById('radio');--}}
        {{--}--}}
    {{--</script>--}}

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
    .pricing{
        width: 20%;
    }
    body {
  font-family: arial;
}
.hide {
  display: none;
}
p {
  font-weight: bold;
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
</header>
<main>
    <div class="container">
        <form action="{{route('plots.store', $id)}}" method="POST">
            @csrf

            <input  class="form-control" type="hidden" name="sold" value="1">

            <label for="name">voornaam</label>
            <input class="form-control" type="text" name="name" required>

            <label for="lastname">achternaam</label>
            <input class="form-control" type="text" name="lastname" required>

            <label for="phone">telefoon</label>
            <input class="form-control" type="tel" name="phone" required>

            <label for="adres">address</label>
            <input class="form-control" type="text" name="adres" required>

            <label for="email">email</label>
            <input class="form-control" type="email" name="email">

            <div class="pricing">
                <input  type="radio" name="price" value="50" checked onclick="show1();" value="igotnone">   €50 <br>
                <input type="radio" name="price" value="100" onclick="show1();" value="igotnone"> €100<br>
                <input type="radio" name="price" value="200" onclick="show1();" value="igotnone"> €200 <br>
                <input id="radio" type="radio" name="price" value="custom" onclick="show2();" value="igottwo">Custom prijs



                <input id="div1" class="hide" style="display:none" type="number" type="hidden"min="20" name="custominput" step="any"/>
            </div>

            <div class="form-group">
                <input type="checkbox" name="mail" value="1" id="test6">Ik wil graag de nieuwsbrief ontvangen<br>
            </div>

            <input type="hidden" name="plotId" value="{{$plot->id}} ">
            <input type="hidden" name="sold" value="1">
            <input style="background: #99cc99; color: #CCE5CC;" type="submit" value="koop plot">
        </form>
    </div>
</main>
</body>
</html>
