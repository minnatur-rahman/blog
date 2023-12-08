
@php
    $fruts = ['one'=>'Apple', 'two'=> 'Banana', 'three'=> 'kola', 'four'=> 'labu', 'five'=> 'Sosa'];
    $value = "Hello";
@endphp



@includeUnless(empty($value), 'pages.header', ['names'=> $fruts])


<h1>Hi I am Master Page</h1>


@include('pages.footer')



