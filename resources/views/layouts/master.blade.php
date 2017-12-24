<!DOCTYPE html>
<html lang="en">
    <head>
      <title>MyApp</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link href="/css/sticky_footer.css" rel="stylesheet">

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>

        @include('layouts/nav')

        <div class="container">

        @yield('content')

        </div>

        @include('layouts/footer')

    </body>
</html>
