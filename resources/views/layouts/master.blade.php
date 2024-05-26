<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Empresa</title>
</head>
<body class="h-screen flex flex-col">
  @include('partials.navbar')
  <div class="h-full">
    @yield('content')
  </div>
  @include('partials.footer')
</body>
</html>