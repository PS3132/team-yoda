@extends('base')

@section('title', 'Planet')

@section('addCss')
@endsection

@section('addJs')
@endsection

@section('content')
    <div id="app">
        <example-component></example-component>
    </div>
    <h2>{{ $planet->name }}</h2>

@endsection