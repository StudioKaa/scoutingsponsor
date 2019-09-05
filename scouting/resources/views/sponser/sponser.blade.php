
<h2>Sponser</h2>

<form action="{{ route('sponsers.store') }}" method="post">
    @csrf
    <input type="hidden" name="type" value="sponser">

    <div class="form-group">
        <p>Voornaam.</p>
        <input type="name" name="name" id="name" class="inputField" required>
    </div>

    <div class="form-group">
        <p>Achternaam.</p>
        <input type="achternaam" name="achternaam" id="achternaam" class="inputField" required>
    </div>

    <div class="form-group">
        <p>Telfoon.</p>
        <input type="telfoon" name="telfoon" id="telfoon" class="inputField" required>
    </div>

    <div class="form-group">
        <p>Eamil.</p>
        <input type="email" name="email" id="email" class="inputField" required>
    </div>

    <div class="form-group">
        <p>Addres.</p>
        <input type="addres" name="addres" id="addres" class="inputField" required>
    </div>

    <div class="form-group">
        <p>Postcode.</p>
        <input type="postcode" name="postcode" id="postcode" class="inputField" required>
    </div>


    <div class="form-group-buttons">
        <input class="button" type="submit" value="Sponser" class="submit">
    </div>

</form>
