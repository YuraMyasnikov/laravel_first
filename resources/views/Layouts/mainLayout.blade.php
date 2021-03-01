
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="/css/starter-template.css" rel="stylesheet">
    {{--<link href="/css/app.css" rel="stylesheet">--}}

    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
   {{-- <script src="/js/app.js"></script>--}}
    <script src="/js/myjq.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ route('home') }}">@lang('home.title')</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li @routeactive('home')> <a href="{{ route('home') }}">@lang('home.products')</a> </li>
                <li @routeactive('categor*')><a href="{{ route('categories')}}">@lang('home.categories')</a> </li>
                <li @routeactive('basket*')><a href="{{ route('basket') }}">@lang('home.basket')</a></li>
                <li><a href="{{ route('reset') }}">@lang('home.reset')</a></li>
                <li><a href="{{ route('locale', __('home.set_lang')) }}">@lang('home.curent_lang')</a></li>
                <li class="dropdown">
                    <a id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Валюта
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dLabel">
                        @foreach(App\Models\Currency::get() as $currency)
                            <li><a href="{{ route('currency' , $currency->code) }}">{{ $currency->code
                            }}</a></li>
                        @endforeach
                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @guest()
                    <li><a href="{{ route('user.login') }}">@lang('home.login')</a></li>
                @endguest
                @auth()
                    @if(Auth::user()->is_admin)
                        <li><a href="{{ route('user.private') }}">@lang('home.admin')</a></li>
                        <li><a href="{{ route('user.logout') }}">@lang('home.logout')</a></li>
                    @else
                        <li><a href="{{ route('user.cabinet') }}">@lang('home.cabinet')</a></li>
                        <li><a href="{{ route('user.logout') }}">@lang('home.logout')</a></li>
                    @endif
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

<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-6"><p>Категории товаров</p>
                <ul>
                    @foreach($categories as $property)
                        <li><a href="{{ route('category', $property->code) }}">{{ $property->name }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-lg-6"><p>Самые популярные товары</p>
                <ul>
                    @foreach($bestProducts as $bestProduct)
                        <li><a href="{{ route('product', [$bestProduct->category->code , $bestProduct->code]) }}">{{
                        $bestProduct->name
                        }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
