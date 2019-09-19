<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Koop Plot</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/costum.css')}}">
</head>
<body>
<header>
    <img src="/img/logo.png" alt="logo" style="margin: 20px;">
    <div class="container">
        <h1>Sponser Scouting Raamsdonksveer</h1>
    </div>
</header>
<main>
    <div class="container">
    <form action="{{route('plots.update', $id)}}" method="POST">
        @csrf
        @method('PUT')

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
        <input class="form-control" type="email" name="email" required>

        <label for="price">prijs</label>
        <input class="form-control" type="number" name="price" min="50" step=".01" required>

        <div class="buttonkoop" style="display: flex; justify-content: center;" >
            <input class="btn btn-primary" type="submit" value="koop" style="margin: 10px; width: 200px;">
        </div>
    </form>
    </div>
</main>
</body>
</html>
