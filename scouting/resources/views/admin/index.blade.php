
<script src="js/main.js"></script>

<body onload="authorise()">

<h1>Alle verkochten plots:</h1>

    @foreach($fulldata as $data)
    <ul>
        <li>Plot: {{$data->plotname}} <br>
            @if($data->sold == 2)

                Status: Verkocht aan {{$data->name}} {{$data->lastname}}<br>
          

            @elseif($data->sold == 1)

                <form method="POST" action="{{route('admin.update',$data->id)}}">
                    @csrf
                    @method('PUT') 
                    input
                    <input type="hidden" name="id" value="{{$data->sponsorId}}">
                    <input type="hidden" name="sold" value="2">
                <input type="submit" value="Verkocht">

                status: Pending    {{$data->name}} {{$data->lastname}}<br>

            @endif
                Telefoon nummer:  {{$data->phone}}<br>
                Email:            {{$data->email}}<br>
                addres:           {{$data->adres}}<br>
            </li>
    </ul>

    @endforeach    
       
    </body>