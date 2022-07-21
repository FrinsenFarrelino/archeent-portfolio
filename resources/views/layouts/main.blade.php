<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
  <title>{{ $title }} - Archeent</title>
</head>
<body>
  
  @include('partials.navbar')
  <div class="w-full">
    @yield('container')
  </div>

  <script>
    const button = document.querySelector('#menu-button')
    const menu = document.querySelector('#menu')

    button.addEventListener('click', () => {
      menu.classList.toggle('hidden')
    });
  </script>
</body>
</html>