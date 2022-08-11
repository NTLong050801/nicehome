<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{$title}}</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
       {{-- Laravel Mix - CSS File --}}
     
       @yield('style')
     
    </head>
    <body>
        @include('nicehome::layouts.header');
        @yield('content')

        {{-- Laravel Mix - JS File --}}
        @include('nicehome::layouts.footer');
        <script src="{{ mix('js/index.js') }}"></script>
        @yield('js')
    </body>
</html>
