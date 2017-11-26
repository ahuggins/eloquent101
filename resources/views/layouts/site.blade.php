<!DOCTYPE HTML>
<html>
    <head>
        <title>@yield('heading') | Eloquent 101</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
        <link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" href="css/style.css">
        <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
        <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
        <link rel="stylesheet" href="/css/vs2015.css">
        <script src="/js/highlight.pack.js"></script>
        <script>hljs.initHighlightingOnLoad();</script>

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

        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.scrolly.min.js"></script>
        <script src="assets/js/jquery.scrollzer.min.js"></script>
        <script src="assets/js/skel.min.js"></script>
        <script src="assets/js/util.js"></script>
        <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
        <script src="assets/js/main.js"></script>

    </body>
</html>
