<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @include('site.includes.header.head')

    <title>Ortoligável</title>
</head>
<body>
    
    @if(!\Request::is('lp'))
        @include('site.includes.header.header')
    @endif

    @yield('content')

    @if(!\Request::is('lp'))
        @include('site.includes.footer.footer')
    @endif

    @include('site.includes.footer.scripts')
</body>
</html>