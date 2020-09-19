<!doctype html>
<html lang="en">

<head>
  <title>@yield('title')</title>
  @stack('prepend-style')
    @include('includes.style')
    @stack('addon-style')
  </head>
<body>
    @include('includes.navbar')
    @yield('content')
    @include('includes.footer')
    @stack('prepend-script')
    @include('includes.script')
    @stack('addon-script')
</body>

</html>
