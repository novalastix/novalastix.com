<!DOCTYPE html>
<html lang="en" data-theme="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Trispace:wght@100..800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Courier+Prime:ital,wght@0,400;0,700;1,400;1,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,700,0,200" rel="stylesheet"  />

        <!-- Styles -->
        <link rel="stylesheet" href="/public/styles/global.css">
        <link rel="stylesheet" href="/public/styles/navbar.css">
        <link rel="stylesheet" href="/public/styles/home.css">

        <!-- Icon -->
        <link rel="icon" type="image/svg+xml" href="/public/images/favicon/favicon.svg">
        <link rel="icon" type="image/svg+xml" href="/public/images/favicon/favicon.png">

        <title><?=$meta['title']?></title>
    </head>
    <body>
        <nav>
            <a class="nav-btn">
                <div class="nav-icon nav-collapse"><img src="/public/images/icons/menu.svg" alt="Menu"></div>
                <div class="nav-icon nav-collapse hidden"><img src="/public/images/icons/close.svg" alt="Close"></div>
            </a>
            <a class="nav-link nav-icon-only" href="{{ route('home',[],false) }}">
                <div class="nav-icon"><img src="/public/images/aeon.svg" alt="AEON"></div>
                <div class="nav-text">Home</div>
            </a>
            <!-- <a class="nav-link nav-text-only" href="{{ route('markdown',[],false) }}">
                <div class="nav-icon">{!! file_get_contents(public_path('images/icons/description.svg')) !!}</div>
                <div class="nav-text">Markdown</div>
            </a> -->
            <a class="nav-link nav-text-only" href="{{ route('blank',[],false) }}">
                <div class="nav-icon"><img src="/public/images/icons/error.svg" alt="Error"></div>
                <div class="nav-text">Market</div>
            </a>
            <a class="nav-link nav-text-only" href="{{ route('blank',[],false) }}">
                <div class="nav-icon"><img src="/public/images/icons/error.svg" alt="Error"></div>
                <div class="nav-text">Archive</div>
            </a>

            <div class="nav-right">
                <a class="nav-link nav-icon-only" href="{{ route('terminal',[],false) }}">
                    <div class="nav-icon"><img src="/public/images/icons/terminal.svg" alt="Terminal"></div>
                    <div class="nav-text">Terminal</div>
                </a>
                <a class="nav-link nav-icon-only" href="{{ route('blank',[],false) }}">
                    <div class="nav-icon"><img src="/public/images/icons/person.svg" alt="Person"></div>
                    <div class="nav-text">Account</div>
                </a>
            </div>
        </nav>
       <div class="aeon"><img src="/public/images/aeon.svg" alt="AEON"></div>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="/public/scripts/global.js"></script>
</html>