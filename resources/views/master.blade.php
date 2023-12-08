<h1>Hi I am Master Page</h1>

{{4+8}}

<br><br>

{{'Hello World'}}

<br><br>

{{'<h1>Hello World</h1>'}}

<br><br>

{!!'<h1>Hello World</h1>'!!}

<br><br>

{{"<script>alert('Minnatur')</script>"}}
<br><br>


@php
    $names = ['shaku', 'molin', 'babu', 'bok'];
    $user = "minnatur";
@endphp


<ul>
@foreach ( $names  as $n )
    @if ($loop->first)
         <li style="color: blue">{{$n}}</li>


    @elseif($loop->last)
        <li style="color: rgb(0, 255, 221)">{{$n}}</li>
    @else
        <li>{{$n}}</li>
    @endif

@endforeach
</ul>





