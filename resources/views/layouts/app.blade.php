@include('layouts.partials.head')
@include('layouts.partials.header')
{{-- @include('layouts.partials.nav_ad') --}}
<main class="py-4">
    <div class="container">
        <div class="row">
            @yield('content')
        </div>
    </div>
</main>
@include('layouts.partials.footer')
</body>
</html>
