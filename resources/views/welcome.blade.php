<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        {{-- Standard Meta --}}
        @section('metaLabels')
            <meta charset="UTF-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />

            <meta name="description" content="">
            <meta name="author" content="">
        @show


        {{-- Site Properties--}}
        <link rel="icon" href="{{ asset('favicon.ico') }}">
        <title>@yield('title') @hasSection('title') | @endif {{ config('app.name') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        {{-- Styles --}}
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

        {{-- icon css --}}
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
        @yield('addCss')


    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                        <a href="{{ url('/swapi') }}">Home</a>
                </div>
            @endif
            <div class="ftop-right links">
                <nav class="nav-brand">Team Yoda</nav>
                <h2 class="pull-right">
                    <a href="{{ url('/planets') }}" style="text-decoration: solid; color: cornsilk;">Planets</a>
                </h2>
            </div>
            <div class="content">
                <div class="starwars-demo">
                    <img src="//cssanimation.rocks/demo/starwars/images/star.svg" alt="Star" class="star">
                    <img src="//cssanimation.rocks/demo/starwars/images/wars.svg" alt="Wars" class="wars">
                    {{--<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/109450/star-wars-logo-outline.png" alt="" />--}}
                    <h2 class="byline" id="byline">The Force Awakens</h2>
                </div>
            </div>
        </div>

        <script>

            var byline = document.getElementById('byline');  	// Find the H2
            bylineText = byline.innerHTML;										// Get the content of the H2
            bylineArr = bylineText.split('');									// Split content into array
            byline.innerHTML = '';														// Empty current content

            var span;					// Create variables to create elements
            var letter;

            for(i=0;i<bylineArr.length;i++){									// Loop for every letter
                span = document.createElement("span");					// Create a <span> element
                letter = document.createTextNode(bylineArr[i]);	// Create the letter
                if(bylineArr[i] == ' ') {												// If the letter is a space...
                    byline.appendChild(letter);					// ...Add the space without a span
                } else {
                    span.appendChild(letter);						// Add the letter to the span
                    byline.appendChild(span); 					// Add the span to the h2
                }
            }

        </script>
    </body>
</html>
