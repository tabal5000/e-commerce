<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MyApp</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.2/css/all.css" rel="stylesheet">
    <link href="/css/styles.css" rel="stylesheet">
</head>
<body>

    @include('layouts/nav')

    <div class="container container-fluid">

    @yield('content')

    </div>

    <script src="/js/app.js"></script>
</body>
</html>
