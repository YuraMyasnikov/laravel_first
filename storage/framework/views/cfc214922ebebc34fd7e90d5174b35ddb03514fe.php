

<?php $__env->startSection('title', 'Заказ '); ?>

<?php $__env->startSection('content'); ?>

    <div class="py-4">
        <div class="container">
            <div class="justify-content-center">
                <div class="panel">
                        <h1>Заказ №<?php echo e($order->id); ?></h1>
                        <p>Заказчик: <b><?php echo e($order->name); ?></b></p>
                        <p>Номер телефона: <b><?php echo e($order->phone); ?></b></p>
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
                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td>
                                        <a href="<?php echo e(route('product', [$product->category->code, $product->code])); ?>">
                                            <img height="56px" src="<?php echo e(Storage::url($product->image)); ?>">
                                            <?php echo e($product->name); ?>

                                        </a>
                                        <?php if($product->isNew()): ?>
                                            <span class="alert alert-success">Новинка</span>
                                        <?php endif; ?>
                                        <?php if($product->isHit()): ?>
                                            <span class="alert alert-warning">Хит</span>
                                        <?php endif; ?>
                                        <?php if($product->isSale()): ?>
                                            <span class="alert alert-info">Скидка</span>
                                        <?php endif; ?>
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

                                    <?php echo e($order->created_at->format('d/m/Y')); ?>

                                </td>
                            </tr>
                            </tbody>
                        </table>
                    <br>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layouts.authBasketLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\laravel\laravel_first\resources\views\admin\order.blade.php ENDPATH**/ ?>