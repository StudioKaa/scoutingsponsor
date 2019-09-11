<style>
    body{
        width: 960px;
        margin: auto;
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
    <!-- <form method="POST" action="{{route('plots.update',$plot->id)}}">
    @csrf
    @method('PATCH')

    <div class="form-group">
        <label for="plots">plot'</label><br>
        <input type="text" id="plot" name="plot" value="{{$plot->name}}" required><br>
    </div>
    
    <div class="form-group">
        <label for="sold">sold</label><br>
        <textarea name="sold" cols="40" rows="5" id="sold" name="sold"  required> {{$plot->sold}} </textarea><br>
    </div>
    
    <div class="form-group">
        
        <input type="submit" value="edit plot">
    </div>  

</form> -->
    <form method="POST" action="{{route('plots.store')}}">
        @csrf
     
        <div class="form-group">
        <label for="name">naam</label><br>
        <input type="text" id="name" name="name" required><br>
    </div>
    
    <div class="form-group">
    <label for="lastname">Achternaam</label><br>
        <input type="text" id="lastname" name="lastname" required><br>
    </div>

    <div class="form-group">
    <label for="phone">telefoon</label><br>
        <input type="tel" id="phone" name="phone" required><br>
    </div>

    <div class="form-group">
    <label for="adres">addres</label><br>
        <input type="text" id="adres" name="adres" required><br>
    </div>

    <div class="form-group">
    <label for="email">email</label><br>
        <input type="email" id="email" name="email" required><br>
    </div>

        <input type="hidden" name="plotId" value="{{$plot->id}} ">
        <input type="hidden" name="sold" value="1">
        <input type="submit" value="koop plot">
    </form>
    <h1>{{$plot->name}}</h1>
    <p>{{$plot->sold}}</p>
