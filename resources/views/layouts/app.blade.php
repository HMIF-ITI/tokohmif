<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>@yield('title')</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  @include('includes.style')

</head>

<body class="index-page">

  @include('includes.navbar')

  @yield('content')

  @include('includes.footer')

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @include('includes.script')

</body>

</html>