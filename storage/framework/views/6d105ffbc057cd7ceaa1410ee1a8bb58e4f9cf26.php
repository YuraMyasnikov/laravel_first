<?php $__env->startSection('title', 'Категория ' . $property->name); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-md-12">
        <h1>Категория <?php echo e($property->name); ?></h1>
        <table class="table">
            <tbody>
            <tr>
                <th>
                    Поле
                </th>
                <th>
                    Значение
                </th>
            </tr>
            <tr>
                <td>ID</td>
                <td><?php echo e($property->id); ?></td>
            </tr>
            <tr>
                <td>Код</td>
                <td><?php echo e($property->code); ?></td>
            </tr>
            <tr>
                <td>Название</td>
                <td><?php echo e($property->name); ?></td>
            </tr>
            <tr>
                <td>Описание</td>
                <td><?php echo e($property->description); ?></td>
            </tr>
            <tr>
                <td>Картинка</td>
                <td><img src="<?php echo e(Storage::url($property->image)); ?>"
                         height="240px"></td>
            </tr>
            <tr>
                <td>Кол-во товаров</td>
                <td><?php echo e($property->products->count()); ?></td>
            </tr>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layouts.authBasketLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\laravel\laravel_first\resources\views\admin\categories\categoryShow.blade.php ENDPATH**/ ?>