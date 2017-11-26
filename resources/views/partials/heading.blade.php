@if (array_key_exists('heading', View::getSections()))
    <header>
        <h2>@yield('heading')</h2>
    </header>
@endif
