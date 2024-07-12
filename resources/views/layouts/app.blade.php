<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Operation</title>
        @include('libraries.app.styles')
        @stack('css')
    </head>
  <body>
        @include('components.nav')

        @yield('content')

        @include('components.footer')
        @include('libraries.app.scripts')
        @stack('scripts')
  </body>
</html>
