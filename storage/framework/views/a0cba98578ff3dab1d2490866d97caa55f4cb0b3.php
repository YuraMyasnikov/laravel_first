

<?php $__env->startSection('title', 'Товар ' . $product->name); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-md-12">
        <h1>Товар <?php echo e($product->name); ?></h1>
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
                <td><?php echo e($product->id); ?></td>
            </tr>
            <tr>
                <td>Код</td>
                <td><?php echo e($product->code); ?></td>
            </tr>
            <tr>
                <td>Название</td>
                <td><?php echo e($product->name); ?></td>
            </tr>
            <tr>
                <td>Категория</td>
                <td><?php echo e($nameCategory($product->category_id)); ?></td>
            </tr>
            <tr>
                <td>Цена</td>
                <td><?php echo e($product->price); ?> руб.</td>
            </tr>
            <tr>
                <td>Описание</td>
                <td><?php echo e($product->description); ?></td>
            </tr>
            <tr>
                <td>Картинка</td>
                <td><img src="<?php echo e(Storage::url($product->image)); ?>"
                         height="240px"></td>
            </tr>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layouts.authBasketLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\laravel\laravel_first\resources\views\admin\products\productShow.blade.php ENDPATH**/ ?>