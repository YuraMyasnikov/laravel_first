
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $__env->yieldContent('title'); ?></title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="/css/starter-template.css" rel="stylesheet">
    

    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
   
    <script src="/js/myjq.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo e(route('home')); ?>"><?php echo app('translator')->get('home.title'); ?></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li <?php echo Route::currentRouteNamed('home') ? 'class="active"' : '' ?>> <a href="<?php echo e(route('home')); ?>"><?php echo app('translator')->get('home.products'); ?></a> </li>
                <li <?php echo Route::currentRouteNamed('categor*') ? 'class="active"' : '' ?>><a href="<?php echo e(route('categories')); ?>"><?php echo app('translator')->get('home.categories'); ?></a> </li>
                <li <?php echo Route::currentRouteNamed('basket*') ? 'class="active"' : '' ?>><a href="<?php echo e(route('basket')); ?>"><?php echo app('translator')->get('home.basket'); ?></a></li>
                <li><a href="<?php echo e(route('reset')); ?>"><?php echo app('translator')->get('home.reset'); ?></a></li>
                <li><a href="<?php echo e(route('locale', __('home.set_lang'))); ?>"><?php echo app('translator')->get('home.curent_lang'); ?></a></li>
                <li class="dropdown">
                    <a id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Валюта
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dLabel">
                        <?php $__currentLoopData = App\Models\Currency::get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $currency): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><a href="<?php echo e(route('currency' , $currency->code)); ?>"><?php echo e($currency->code); ?></a></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <?php if(auth()->guard()->guest()): ?>
                    <li><a href="<?php echo e(route('user.login')); ?>"><?php echo app('translator')->get('home.login'); ?></a></li>
                <?php endif; ?>
                <?php if(auth()->guard()->check()): ?>
                    <?php if(Auth::user()->is_admin): ?>
                        <li><a href="<?php echo e(route('user.private')); ?>"><?php echo app('translator')->get('home.admin'); ?></a></li>
                        <li><a href="<?php echo e(route('user.logout')); ?>"><?php echo app('translator')->get('home.logout'); ?></a></li>
                    <?php else: ?>
                        <li><a href="<?php echo e(route('user.cabinet')); ?>"><?php echo app('translator')->get('home.cabinet'); ?></a></li>
                        <li><a href="<?php echo e(route('user.logout')); ?>"><?php echo app('translator')->get('home.logout'); ?></a></li>
                    <?php endif; ?>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>

<div class="container">

    <?php if(session()->has('success')): ?>
        <p class="alert alert-success" style="height: 50px; margin: 20px 0; text-align: center">
            <?php echo e(session()->get('success')); ?>

        </p>
    <?php elseif(session()->has('error')): ?>
        <p class="alert alert-danger" style="height: 50px; margin: 20px 0; text-align: center">
            <?php echo e(session()->get('error')); ?>

        </p>
    <?php endif; ?>

    <div class="starter-template">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
</div>
</body>
</html>
<?php /**PATH C:\OpenServer\domains\laravel\laravel_first\resources\views/Layouts/mainLayout.blade.php ENDPATH**/ ?>