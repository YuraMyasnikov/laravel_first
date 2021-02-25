
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $__env->yieldContent('title'); ?></title>

    <!-- Scripts -->
    <script src="/js/app.js" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/admin.css" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-default navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="http://internet-shop.tmweb.ru">
                Вернуться на сайт
            </a>

            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item">
                        <a class="nav-link" href="">Войти</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Зарегистрироваться</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <div class="py-4">
        <div class="container">
            <?php echo $__env->yieldContent('conrent'); ?>
        </div>
    </div>
</div>
</body>
</html>
<?php /**PATH C:\OpenServer\domains\laravel\laravel_first\resources\views\Registration\logout.blade.php ENDPATH**/ ?>