

<?php $__env->startSection('title','Категории'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Все Категории</h1>
    

    <div class="starter-template">
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="panel">
                <a href="<?php echo e($category->code); ?>">
                    <img src="<?php echo e(Storage::url($category->image)); ?>" height="50px">
                    <h2><?php echo e($category->name); ?></h2>
                </a>
                <p>
                    <?php echo e($category->description); ?>

                </p>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layouts.mainLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\laravel\laravel_first\resources\views\categories.blade.php ENDPATH**/ ?>