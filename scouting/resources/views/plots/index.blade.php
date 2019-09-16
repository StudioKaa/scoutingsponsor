<ul>

@foreach($plots as $plot)
    <li><a href="{{ route('plots.show', $plot->id) }}"> {{$plot->name}}</a></li>
@endforeach

</ul>