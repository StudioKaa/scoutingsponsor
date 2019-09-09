
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
<form action="{{ route('plots.store') }}"  method="post">
    @csrf
    <div class="form-group">
        <label for="plot">plot</label><br>
        <input type="text" id="plot" name="plot" placeholder="plot 1" required><br>
    </div>

    <div class="form-group">
        <label for="sold">sold</label><br>
        <textarea name="sold" cols="40" rows="5" id="sold" name="sold" placeholder="sold 1" required></textarea><br>
    </div>
    
    <div class="form-group">
        <input type="submit" value="Create plot">
    </div>  

</form>
