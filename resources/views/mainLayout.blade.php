
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/starter-template.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="http://internet-shop.tmweb.ru">Интернет Магазин</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{ route('home') }}">Все товары</a></li>
                <li ><a href="{{ route('categories') }}">Категории</a>
                </li>
                <li ><a href="{{ route('basket') }}">В корзину</a></li>
                <li><a href="http://internet-shop.tmweb.ru/reset">Сбросить проект в начальное состояние</a></li>
                <li><a href="http://internet-shop.tmweb.ru/locale/en">en</a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">₽<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="http://internet-shop.tmweb.ru/currency/RUB">₽</a></li>
                        <li><a href="http://internet-shop.tmweb.ru/currency/USD">$</a></li>
                        <li><a href="http://internet-shop.tmweb.ru/currency/EUR">€</a></li>
                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @guest()
                    <li><a href="{{ route('user.login') }}">Войти</a></li>
                @endguest
                @auth()
                    <li><a href="{{ route('user.cabinet') }}">Личный кабинет</a></li>
                    <li><a href="{{ route('user.private') }}">Админ</a></li>
                    <li><a href="{{ route('user.logout') }}">Выйти</a></li>
                @endauth
            </ul>
        </div>
    </div>
</nav>

<div class="container">

    @if(session()->has('success'))
        <p class="alert alert-success" style="height: 50px; margin: 20px 0; text-align: center">
            {{ session()->get('success') }}
        </p>
    @elseif(session()->has('error'))
        <p class="alert alert-danger" style="height: 50px; margin: 20px 0; text-align: center">
            {{ session()->get('error') }}
        </p>
    @endif

    <div class="starter-template">
        @yield('content')
    </div>
</div>
</body>
</html>
