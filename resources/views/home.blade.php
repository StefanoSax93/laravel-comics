<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset("js/app.js") }}"></script>

</head>
<body>

    
    @include('partials.header')
    

    <main>
        
    </main>

    <footer style="background-image: url({{asset('images/footer-bg.jpg')}}">
        @include('partials.footer')
    </footer>

</body>
</html>