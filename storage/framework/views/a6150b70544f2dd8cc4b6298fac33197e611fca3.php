

<?php $__env->startSection('title', 'Кабинет'); ?>

<?php $__env->startSection('content'); ?>

    <div class="py-4">
        <div class="container">
            <div class="justify-content-center">
                <div class="panel">
                    <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <h1 style="display: flex">Заказ №<?php echo e($order->id); ?></h1>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Название</th>
                            <th>Кол-во</th>
                            <th>Цена</th>
                            <th>Стоимость</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $order->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>
                                    <a href="<?php echo e(route('product', [$product->category->code, $product->code])); ?>">
                                        <img height="56px" src="<?php echo e(Storage::url($product->image)); ?>">
                                        <?php echo e($product->name); ?>

                                    </a>
                                </td>
                                <td><span class="badge"><?php echo e($product->pivot->count); ?> </span></td>
                                <td><?php echo e($product->price); ?> </td>
                                <td><?php echo e($product->getPriceForCount()); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td colspan="3">Общая стоимость:</td>
                            <td>
                                <?php echo e($order->getFullPrice()); ?>

                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">Дата:</td>
                            <td>
                                <?php echo e($order->created_at->format('j-m-Y')); ?>

                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <br>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layouts.mainLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\laravel\laravel_first\resources\views\Auth\cabinet.blade.php ENDPATH**/ ?>