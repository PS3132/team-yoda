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
    {{--<div id="app">--}}
        {{--<planet></planet>--}}
    {{--</div>--}}

    @foreach($planets as $planet)
    <div class="col-md-12">
        <a href="/planets/{{ $loop->index +1 }}">

        <div class="card card-default">
                <div class="card-header"><h2>{{ $planet->name }}</h2></div>

            <div class="card-body">
                <div class="planet_unfold_image_container">
                    @if($planet->name === "Yavin IV")
                        <img src='/img/Yavin-IV.png' class="planet_unfold_image"/>
                    @else
                     <img src='/img/{{ $planet->name }}.png' class="planet_unfold_image"/>
                    @endif
                </div>
            </div>
        </div>
        </a>
        </div>
        @endforeach

    <script src="{{ asset('js/app.js') }}"></script>
@endsection
