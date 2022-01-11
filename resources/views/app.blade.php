<html>
    <head>
        <meta charset="UTF-8"/>
        <title>@yield('title', '首頁')</title>
    </head>
    <body>
        @include('header')
        @yield('guide_contents')
        @include('footer')
    </body>
</html>
