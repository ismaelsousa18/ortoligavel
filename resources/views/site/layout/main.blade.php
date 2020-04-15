<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @include('site.includes.header.head')

    <title>Ortoligável</title>
</head>
<body>

    @include('site.includes.header.header-slide')

    @yield('content')
    
    @include('site.includes.footer.footer')

    @include('site.includes.footer.scripts')
</body>
</html>