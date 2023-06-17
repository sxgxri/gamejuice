<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('styles/style.css')}}">
    <title>GameJuice - игровой портал</title>

  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css')}}">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css')}} ">

  <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}} ">
</head>
<body class="antialiased">
<div class="header">
    <div class="header-menu-1">
        <div class="sources">
            <div class="vk">
                <a href="https://vk.com">
                    <img src="{{asset('images/vk-icon.png')}}" alt="vk-source" style="width: 45px; height: 45px">
                </a>
            </div>
            <div class="tg">
                <a href="">
                    <img src="{{asset('images/tg-icon.png')}}" alt="tg-source" style="width: 45px; height: 45px">
                </a>
            </div>
        </div>
        <div class="login">
            <ul class="navbar-nav me-auto">
            </ul>
            <ul class="navbar-nav ms-auto" style="display: flex;">
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item" style="list-style-type: none; padding-right: 10px">
                            <a class="nav-link" href="{{ route('login') }}">Войти</a>
                        </li>
                    @endif
                    @if (Route::has('register'))
                        <li class="nav-item" style="list-style-type: none;">
                            <a class="nav-link" href="{{ route('register') }}">Регистрация</a>
                        </li>
                    @endif
                @else
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <input  type="submit" value="Выйти из аккаунта" style="background: none;
                                 color: white; cursor: pointer; font-size: 16px;">
                    </form>
                @endguest
            </ul>
        </div>
    </div>
    <div class="header-menu-2">
        <div class="logo">
            <a href="{{ route('main.index') }}">
                <img src="{{asset('images/logo.png')}}" alt="logo">
            </a>
        </div>
        <div class="menu-buttons">
            <a href="{{ route('main.index') }}" style="font-family: Fregat;">Игры</a>
            <a href="{{ route('articles.index') }}" style="font-family: Fregat;">Статьи</a>
            <a href="{{ route('about.index') }}" style="font-family: Fregat;">О нас</a>
        </div>
    </div>
</div>
<div class="main">
    @yield('content')
</div>
<div class="footer">
    <div class="footer-container" >
        <div class="footer-menu">
            <div class="ftr-btn">
                <a style="font-family: Fregat; color: white;" href="{{ route('articles.index') }}">Статьи</a>
            </div>
            <div  class="ftr-btn">
                <a style="font-family: Fregat; color: white;" href="{{ route('main.index') }}">Игры</a>
            </div>
            <div  class="ftr-btn">
                <a style="font-family: Fregat; color: white;" href="{{ route('about.index') }}">О нас</a>
            </div>
        </div>
        <div class="footer-logo">

        </div>
        <div class="footer-text">
            <a style="font-family: Fregat; color: gray;">GameJuice. 2023.</a>
        </div>
    </div>
</div>
</body>
</html>








