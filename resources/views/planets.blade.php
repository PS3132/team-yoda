@extends('base')

@section('title', 'Planet')

@section('addCss')
@endsection

@section('addJs')

@endsection

<?php
$planet_image_name = "Alderaan.png";
$films = "placeholder";
?>
@section('content')
    <div id="app">
        <example></example>
        
    </div>

    <h2>Films</h2>
    {{$films}}

    <script src="{{ asset('js/app.js') }}"></script>
@endsection
