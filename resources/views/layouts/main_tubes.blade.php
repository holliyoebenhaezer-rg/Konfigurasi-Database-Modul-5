<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>@yield('title') - PandeglangTrip</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <style>
    * { box-sizing: border-box; margin: 0; padding: 0; }
    body {
      font-family: 'Poppins', sans-serif;
      color: #fff;
      background: url('{{ asset('gambar/luxury-3660320052.webp') }}') center/cover fixed no-repeat;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }
    .blur-bg {
      background: rgba(0, 0, 0, 0.5);
      backdrop-filter: blur(6px);
      flex: 1;
      display: flex;
      flex-direction: column;
    }
    main { flex: 1; padding: 40px 20px; }
  </style>
</head>
<body>
  <div class="blur-bg">
    @include('partials.navbar_tubes')
    <main>@yield('content')</main>
    @include('partials.footer_tubes')
  </div>
</body>
</html>
