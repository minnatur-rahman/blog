@extends('layout.master')

@section('content')
{{-- <h1>I Am Home Page</h1>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ea illum blanditiis, necessitatibus culpa laborum provident cupiditate expedita, ipsa recusandae earum placeat consectetur eaque quo facilis est sunt voluptas animi, exercitationem asperiores officia obcaecati facere odio? Ipsum nobis vero quibusdam deleniti aperiam iure commodi ad tempore voluptates, iste velit distinctio sit dolorem quo minima ipsam cupiditate totam eaque natus fugiat. Omnis animi modi a, excepturi, deserunt nisi itaque laborum incidunt soluta amet corporis libero neque aliquam quae quia ipsa perspiciatis. Unde voluptate fuga sed amet fugit aliquam quos quisquam natus sequi rerum nihil praesentium adipisci corporis provident, necessitatibus officia? Dolore? --}}
@endsection


@section('title')
    Home
@endsection

@push('scripts')
    <script src="/example.js"></script>
    <script src="/ample.js"></script>
    <script src="/ple.js"></script>
@endpush

@push('scripts')
    <script src="/students.js"></script>

@endpush


@push('style')
    <link rel="stylesheet" href="bootstrap.css">
@endpush

@prepend('style')
    <style class="bg-danger">

    </style>
@endprepend

