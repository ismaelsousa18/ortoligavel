<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @include('site.includes.header.head')

    <title>Ortoligável</title>
</head>
<body>
    
    @include('site.includes.header.header')

    @include('site.includes.breadcrumb')

    @include('site.includes.tratamentos-nav')    

    <div class="tratamentos-integra-page @yield('breadcrumb-class')">
        @yield('content')
    </div>

    @if(!\Request::is('lp'))
        @include('site.includes.footer.footer')
    @endif

    @include('site.includes.footer.scripts')
</body>
</html>