<!DOCTYPE html>
<html lang="en" data-theme="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome To AEON</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,700,0,200" rel="stylesheet"  />

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/global.css') }}">
        <link rel="stylesheet" href="{{ asset('css/home.css') }}">

        <!-- Icon -->
	    <link rel="icon" type="image/svg+xml" href="{{ asset('images/favicon/favicon.svg') }}">
	    <link rel="icon" type="image/png" href="{{ asset('images/favicon/favicon.png') }}">
	    
    </head>
    <body>
        @include('components/nav-bar') 
        <main>
            <div class="aeon">{!! file_get_contents(public_path('images/aeon.svg')) !!}</div>
        </main>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="{{ asset('js/global.js') }}"></script>
</html>