

<?php $__env->startSection('title','Категории'); ?>

<?php $__env->startSection('content'); ?>
    <h1><?php echo e($category->name); ?></h1>
    <p>В категории <?php echo e($category->products->count()); ?> товара</p>

    <?php $__currentLoopData = $category->products()->with('category')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo $__env->make('cardItem',compact('product'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layouts.mainLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\laravel\laravel_first\resources\views\category.blade.php ENDPATH**/ ?>