<form method="POST" action="{{route('plots.store',$plot->id)}}">
        @csrf
        @method('PATCH')
        
        
        <div class="form-group">
        <label for="name">naam</label><br>
        <input type="text" id="name" name="name" required><br>
    </div>
    
    <div class="form-group">
    <label for="lastname">Achternaam</label><br>
        <input type="text" id="lastname" name="lastname" required><br>
    </div>

    <div class="form-group">
    <label for="lastname">Achternaam'</label><br>
        <input type="text" id="lastname" name="lastname" required><br>
    </div>

    <div class="form-group">
    <label for="telefoon">telefoon</label><br>
        <input type="tel" id="telefoon" name="telefoon" required><br>
    </div>

    <div class="form-group">
    <label for="adres">addres</label><br>
        <input type="text" id="adres" name="adres" required><br>
    </div>

    <div class="form-group">
    <label for="email">email</label><br>
        <input type="email" id="email" name="email" required><br>
    </div>


        <input type="hidden" name="sold" value="1">
        <input type="submit" value="koop plot">
    </form>
    <h1>{{$plot->name}}</h1>
    <p>{{$plot->sold}}</p>
