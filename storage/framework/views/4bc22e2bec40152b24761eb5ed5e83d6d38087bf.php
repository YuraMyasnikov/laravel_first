

<?php $__env->startSection('title', 'Товары'); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-md-12">
        <div style="display: flex"><h1>Товары</h1><?php echo e($products->count()); ?></div>
        <table class="table">
            <tbody>
            <tr>
                <th>
                    #
                </th>
                <th>
                    Код
                </th>
                <th>
                    Название
                </th>
                <th>
                    Кол-во
                </th>
                <th>
                    Действия
                </th>
            </tr>

            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($product->id); ?></td>
                    <td><?php echo e($product->code); ?></td>
                    <td><?php echo e($product->name); ?></td>
                    <td><?php echo e($product->count); ?></td>
                    <td>
                        <div class="btn-group" role="group">
                            <form action="<?php echo e(route('products.destroy', $product)); ?>" method="POST">
                                <a class="btn btn-success" type="button" href="<?php echo e(route('products.show', $product)); ?>">Открыть</a>
                                <a class="btn btn-warning" type="button" href="<?php echo e(route('products.edit', $product)); ?>">Редактировать</a>
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <input class="btn btn-danger" type="submit" value="Удалить">
                            </form>
                        </div>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>
        </table>
        <a href="<?php echo e(route('products.create')); ?>" class="btn btn-success">Добавить товар</a>
    </div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('Layouts.authBasketLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\laravel\laravel_first\resources\views\admin\products\products.blade.php ENDPATH**/ ?>