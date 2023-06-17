<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('styles/style.css')}}">
        <title>GameJuice - игровой портал</title>
    </head>
    <body class="antialiased">
       <div class="header">
            <div class="header-menu-1">
                <div class="sources">
                    <div class="vk">
                        <a href="https://vk.com">
                            <img src="{{asset('images/vk-icon.png')}}" alt="vk-source">
                        </a>
                    </div>
                    <div class="tg">
                        <a href="">
                            <img src="{{asset('images/tg-icon.png')}}" alt="tg-source">
                        </a>
                    </div>
                </div>
                <div class="login">
                    <ul class="navbar-nav me-auto">
                    </ul>
                    <ul class="navbar-nav ms-auto" style="display: flex;">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item" style="list-style-type: none; margin-right: 30px">
                                    <a class="nav-link" href="{{ route('login') }}">Войти</a>
                                </li>
                            @endif
                            @if (Route::has('register'))
                                <li class="nav-item" style="list-style-type: none;">
                                    <a class="nav-link" href="{{ route('register') }}">Регистрация</a>
                                </li>
                            @endif
                        @else
                            <form action="{{ route('personal.main.index') }}">
                                @csrf
                                <input  class="btn btn-outline-danger" type="submit" value="Личный кабинет" style="background: none;
                                 color: white; cursor: pointer; font-size: 16px; margin-right: 40px">
                            </form>
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <input  class="btn btn-outline-danger" type="submit" value="Выйти из аккаунта" style="background: none;
                                 color: white; cursor: pointer; font-size: 16px">
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
                    <a href="{{ route('main.index') }}">Игры</a>
                    <a href="{{ route('articles.index') }}">Статьи</a>
                    <a href="{{ route('about.index') }}">О нас</a>
                </div>
            </div>
       </div>
       <div class="main">
        @yield('content')
       </div>
       <div class="footer">
            <div class="footer-container">
                <div class="footer-menu">
                    <div class="ftr-btn">
                        <a href="{{ route('articles.index') }}">Статьи</a>
                    </div>
                    <div class="ftr-btn">
                        <a href="{{ route('main.index') }}">Игры</a>
                    </div>
                    <div class="ftr-btn">
                        <a href="{{ route('about.index') }}">О нас</a>
                    </div>
                </div>
                <div class="footer-logo">

                </div>
                <div class="footer-text">
                    <a>GameJuice. 2023.</a>
                </div>
            </div>
       </div>
    </body>
</html>
