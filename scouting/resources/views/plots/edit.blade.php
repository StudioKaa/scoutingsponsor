<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Koop Plot</title>

    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<header>
    <div class="container">
        <img src="img/logo.png" alt="logo" style="margin: 20px;">
        <h1>Sponser Scouting Raamsdonksveer</h1>
    </div>
</header>
<main>
    <form action="{{route('plots.update', $id)}}" method="POST">
        @csrf
        @method('PUT')

        <input type="hidden" name="sold" value="1">

        <label for="name">voornaam</label>
        <input type="text" name="name" required>

        <label for="lastname">achternaam</label>
        <input type="text" name="lastname" required>

        <label for="phone">telefoon</label>
        <input type="tel" name="phone" required>

        <label for="adres">address</label>
        <input type="text" name="adres" required>

        <label for="email">email</label>
        <input type="email" name="email" required>

        <label for="price">prijs</label>
        <input type="number" name="price" min="50" step=".01" required>

        <input type="submit" value="koop">
    </form>
</main>
<footer>

</footer>
</body>
</html>