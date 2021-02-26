<?php $__env->startSection('title','Главная страница'); ?>

<?php $__env->startSection('content'); ?>
    <h1><?php echo app('translator')->get('home.products'); ?></h1>
    <div class="row"  style="margin: 30px 0;">
        <div class="col">
            <?php $__errorArgs = ['price_from'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="alert alert-danger"> <?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            <?php $__errorArgs = ['price_to'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="alert alert-danger"> <?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
    </div>
    <form method="GET" action="<?php echo e(route('home')); ?>">
        <div class="filters row">
            <div class="col-sm-6 col-md-3">
                <label for="price_from">Цена от
                    <input type="text" name="price_from" id="price_from" size="6" value="<?php echo e($request->price_from); ?>">
                </label>

                <label for="price_to">до
                    <input type="text" name="price_to" id="price_to" size="6"  value="<?php echo e($request->price_to); ?>">
                </label>

            </div>
            <?php $__currentLoopData = ['new'=>__('home.filter.new'),'hit'=>__('home.filter.hit'),'sale'=>__('home.filter.sale')]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fieldCheck =>
            $fieldValue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-sm-2 col-md-2">
                    <label for="<?php echo e($fieldCheck); ?>">
                        <input type="checkbox" name="<?php echo e($fieldCheck); ?>" id="<?php echo e($fieldCheck); ?>"
                        <?php if($request->$fieldCheck): ?> checked="checked" <?php endif; ?>
                        > <?php echo e($fieldValue); ?>

                    </label>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm-6 col-md-3">
                <button type="submit" class="btn btn-primary">Фильтр</button>
                <a href="<?php echo e(route('home')); ?>" class="btn btn-warning">Сброс</a>
            </div>
        </div>
    </form>
    <div class="row">
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo $__env->make('cardItem', compact($product), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php echo e($products->links()); ?>


    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layouts.mainLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\laravel\laravel_first\resources\views\index.blade.php ENDPATH**/ ?>