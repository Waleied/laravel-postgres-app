<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title','No name')</title>
</head>
<body>
        @yield('hello')
        @section('sidebar')
            This is Sidebar from master layour
        @show
</body>
</html>
