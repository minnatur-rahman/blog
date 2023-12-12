<h1>Users Pages</h1>


{{-- <h2> {{ $user }} </h2>

<h2>City :  {{ !empty($city) ? $city : 'No City' }} </h2> --}}

@foreach ($user as $id => $u)
    <h3> {{ $u['name'] }} | {{ $u['phone'] }} | {{ $u['city'] }}</h3>
@endforeach
