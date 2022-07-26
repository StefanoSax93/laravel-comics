<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page_title')</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix("js/app.js") }}"></script>

    @yield('header_scripts')

</head>
<body>

    
    @include('partials.header')
    

    <main>
        @yield('page_content')
    </main>

    <footer>
        @include('partials.footer')
    </footer>

</body>
</html>