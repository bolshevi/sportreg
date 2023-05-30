<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    @yield('custom.css')

</head>
<body>
    
<header style="display: flex; justify-content: space-between; padding-left: 190px; padding-right: 200px;">
    <div>
      <p id="test1">Запись на спортивные занятия</p>
    </div>
    <div>
      <a href="{{ route('index') }}">Главная</a>
    </div>
</header>

<main class="py-4">
    @yield('content')
</main>

@yield('footer')

@yield('script')

</body>
</html>