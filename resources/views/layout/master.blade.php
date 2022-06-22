<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet" >

    <title>@yield('title','master Page')</title>
  </head>
  <body>

    @yield('content')
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="{{asset('/js/bootstrap.bundle.min.js')}}" ></script>
  </body>
</html>
