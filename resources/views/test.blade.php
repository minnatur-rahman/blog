@php
    $user = "Minnatur Rahman";
    $fruts = ['Mango', 'Lichu', 'Banana', 'Orange', 'Lemon', 'Nut', 'Coconut'];
@endphp

<script>
    // var data = @json($fruts);

    var data = {{ Js::from($fruts)}};

    data.forEach(function(error){
        console.log(error);
    });

</script>
