<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">
    <title>Projeto</title>
</head>

<body>

    @yield('content')
    <script src=" {{ asset('js/custom.js') }}"></script>
</body>

</html>
