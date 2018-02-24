@extends('base')

@section('title', 'Planet')

@section('addCss')
@endsection

@section('addJs')

@endsection

<?php
$planet_image_name = "Alderaan.png";
$diameter = "000";
$rotation = "000";
$orbital = "000";
$gravity = "000";
$population = "000";
$climate = "000";
$terrain = "000";
$surface = "000";
$residents = "000";
$films = "placeholder";
?>
@section('content')
    <div id="app">
        <example></example>
    </div>
    <h2>{{ $planet->name }}</h2>
    <div class="planet_unfold_image_container">
      <img src="img/{{$planet_image_name}}" class="planet_unfold_image"/>
    </div>

    <br/>
    <h2>Details</h2>
    <p>Diameter: {{$diameter}}</p>
    <p>Rotation: {{$rotation}}</p>
    <p>Orbital period: {{$orbital}}</p>
    <p>Gravity: {{$gravity}} </p>
    <p>Population: {{$population}}</p>
    <p>Climate: {{$climate}}</p>
    <p>Terrain: {{$terrain}}</p>
    <p>Surface water: {{$surface}}</p>
    <p>Residents: {{$residents}}</p>

    <br/>
    <h2>Films</h2>
    {{$films}}

    <script src="{{ asset('js/app.js') }}"></script>
@endsection
