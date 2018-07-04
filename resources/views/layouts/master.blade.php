<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{url('css/bootstrap/bootstrap.min.css')}}">
  <script src="{{url('js/jquery/jquery.min.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="{{url('js/bootstrap/bootstrap.min.js')}}"></script>
</head>
<body>

@yield('content')

</body>
</html>