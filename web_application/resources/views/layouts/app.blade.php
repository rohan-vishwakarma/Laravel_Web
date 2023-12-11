<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link href = {{ asset("bootstrap/dist/css/bootstrap.min.css") }} rel="stylesheet" />
    
    <title> @yield('title')</title>
</head>
<body>
    
    @yield('navbar')

    @yield('content')


    @yield('footer')

</body>
</html>