<!DOCTYPE HTML>
<html>
    <head>
        <title>@yield('heading') | Eloquent 101</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
        <link rel="stylesheet" href="{{ url('assets/css/main.css') }}" />
        <link rel="stylesheet" href="{{ url('css/style.css') }}">
        <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
        <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
        <link rel="stylesheet" href="{{ url('css/vs2015.css') }}">
        <script src="{{ url('js/highlight.pack.js') }}"></script>
        <script>hljs.initHighlightingOnLoad();</script>

        <meta property="og:title" content="@yield('heading') | Eloquent 101" />
        <meta property="og:image" content="{{ url('/images/code-sample-title.jpg') }}" />
        <meta property="og:url" content="{{ Request::url() }}" />
        <meta property="og:type" content="article" />
        <meta property="og:description" content="@yield('description', 'Welcome to Eloquent101, a website to help you learn the Eloquent ORM found in Laravel')" />
        <meta property="article:author" content="Andy Huggins" />
        <meta property="article:section" content="Code" />
        <meta property="article:tag" content="Laravel" />
        <meta property="article:tag" content="Eloquent" />
        <meta property="article:tag" content="Eloquent ORM" />
        @if (array_key_exists('youtube', View::getSections()))
            <meta property="og:video" content="https://www.youtube.com/v/@yield('youtube')?hd=1" />
        @endif

    </head>
    <body>
        <div id="header">
            <div class="top">
                <div id="logo">
                    @include('partials.avatar')
                    <h1 id="title">Andy Huggins</h1>
                    <p>Creator</p>
                </div>
                <nav id="nav">
                    {!! Menu::main() !!}
                </nav>
            </div>
            <div class="bottom">
                @include('partials.social')
            </div>
        </div>
        <div id="main">
            @include('partials.youtube')
            <section id="about" class="three">
                <div class="container">

                    @include('partials.heading')
                    <div class="content">
                        @yield('content')
                    </div>
                </div>
            </section>
        </div>
        @include('partials.footer')

        <script src="{{ url('assets/js/jquery.min.js') }}"></script>
        <script src="{{ url('assets/js/jquery.scrolly.min.js') }}"></script>
        <script src="{{ url('assets/js/jquery.scrollzer.min.js') }}"></script>
        <script src="{{ url('assets/js/skel.min.js') }}"></script>
        <script src="{{ url('assets/js/util.js') }}"></script>
        <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
        <script src="{{ url('assets/js/main.js') }}"></script>
        @yield('scripts')
        @include('partials.ga')
    </body>
</html>
