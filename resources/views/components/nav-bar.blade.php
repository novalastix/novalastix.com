<nav>
    <a class="nav-btn" href="#">
        <div class="nav-icon nav-collapse">{!! file_get_contents(public_path('images/icons/menu.svg')) !!}</div>
        <div class="nav-icon nav-collapse hidden">{!! file_get_contents(public_path('images/icons/close.svg')) !!}</div>
    </a>
    <a class="nav-link nav-icon-only" href="{{ route('home') }}">
        <div class="nav-icon">{!! file_get_contents(public_path('images/aeon.svg')) !!}</div>
        <div class="nav-text">Home</div>
    </a>
    <a class="nav-link nav-text-only" href="{{ route('home') }}">
        <div class="nav-icon">{!! file_get_contents(public_path('images/icons/error.svg')) !!}</div>
        <div class="nav-text">Staff</div>
    </a>
    <a class="nav-link nav-text-only" href="{{ route('home') }}">
        <div class="nav-icon">{!! file_get_contents(public_path('images/icons/error.svg')) !!}</div>
        <div class="nav-text">Market</div>
    </a>
    <a class="nav-link nav-text-only" href="{{ route('home') }}">
        <div class="nav-icon">{!! file_get_contents(public_path('images/icons/error.svg')) !!}</div>
        <div class="nav-text">Archive</div>
    </a>

    <div class="nav-right">
        <a class="nav-link nav-icon-only" href="{{ route('home') }}">
            <div class="nav-icon">{!! file_get_contents(public_path('images/icons/terminal.svg')) !!}</div>
            <div class="nav-text">Console</div>
        </a>
        <a class="nav-link nav-icon-only" href="{{ route('home') }}">
            <div class="nav-icon">{!! file_get_contents(public_path('images/icons/person.svg')) !!}</div>
            <div class="nav-text">Account</div>
        </a>
    </div>
</nav>