<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>x-manu.com</title>
    <script src="https://kit.fontawesome.com/9ac48922f1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    @vite('resources/css/app.css', 'resources/js/app.js')
  </head>
  <body>
    <x-navbar/>
    <div class="min-vh-100">
      {{ $slot }}
     </div>
    <x-footer/>
    
    @vite('resources/js/app.js')
  </body>
</html>