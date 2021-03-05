<nav class="nav-top d-flex justify-content-end">
    <div><a href="#"><img src="{{ asset('img/DC_desktop_blue.svg') }}" alt=""></a></div>
    <div><a href="#"><img src="{{ asset('img/DCUI_desktop.svg') }}" alt=""></a></div>
    <div><a href="#"><img src="{{ asset('img/DC_SHOP_desktop.svg') }}" alt=""></a></div>
    <div><a href="#"><img src="{{ asset('img/DC_community.svg') }}" alt=""></a></div>
    <div><a href="#"><img src="{{ asset('img/DC_on_HBOMAX_desktop.svg') }}" alt=""></a></div>
</nav>
<nav class="nav-bottom">
    <div class="logo">
        <a href="{{ route('homepage') }}"><img src="{{ asset('img/logo.png') }}" alt=""></a>
    </div>
    <div class="link_nav">
        <a href="#">CHARACTERS</a>
        <a href="{{ route('comics') }}">COMICS</a>
        <a href="#">MOVIES</a>
        <a href="#">TV</a>
        <a href="#">GAMES</a>
        <a href="#">VIDEOS</a>
        <a href="#">NEWS</a>
        <a href="#">SHOP <i class="fas fa-caret-down"></i></a>
    </div>
    <div class="search">Search <i class="fas fa-search"></i></div>
</nav>