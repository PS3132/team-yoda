@extends('base')

@section('title', 'Planet')

@section('addCss')
@endsection

@section('addJs')

@endsection

@section('content')
    <div id="app">
        <example></example>
    </div>
    <h2>{{ $planet->name }}</h2>

    <script src="{{ asset('js/app.js') }}"></script>
@endsection