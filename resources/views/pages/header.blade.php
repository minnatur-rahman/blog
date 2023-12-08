<h1>header peage</h1>

@foreach ($names as $key => $value )
    <h1>{{$key}}-{{$value}}</h1>
@endforeach

@forelse ( $names as $key => $value )
    <h1>{{$key}}-{{$value}}</h1>
@empty
    <p>No Value Found</p>
@endforelse
