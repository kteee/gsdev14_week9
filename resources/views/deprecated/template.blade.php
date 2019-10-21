<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

  <header class='bg-primary text-white'>
    <div class="container">
      <h1>KAKEIBO</h1>
      <nav>
        <ul>
          <li>{{$user}}</li>
        </ul>
      </nav>
    </div>
  </header>

  <main>
    @yield('content')
  </main>
  

  <!-- js -->
  <script src="js/app.js"></script>

</body>
</html>