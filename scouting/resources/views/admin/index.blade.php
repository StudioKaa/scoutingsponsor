<h1>Alle verkochten plots:</h1>

    @foreach($fulldata as $data)
    <ul>
        <li>Plot: {{$data->plotname}} <br>

            @if({{data->sold}} == 2)
                <p>Status: Verkocht aan</p> {{$data->name}} {{$data->lastname}}<br>
                @endif
            @if({{$data->sold== 1)
                <p>status: Pending   </p> {{$data->name}} {{$data->lastname}}
            @endif

                <p>Verkocht voor:    </p>{{$data->price}}<br>
                <p>Telefoon nummer:  </p>{{$data->phone}}<br>
                <p>Email:            </p>{{$data->email}}<br>
                <p>addres:           </p>{{$data->adres}}<br>
            </li>
    </ul>

    @endforeach    
       
