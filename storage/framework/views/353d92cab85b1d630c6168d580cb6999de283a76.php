<?php $__env->startSection('title','Корзина'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Корзина</h1>
    <p>Оформление заказа</p>
    <div class="panel">
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
                    <a href="<?php echo e(route('product', [$product->category->code, $product->code] )); ?>">
                        <div style="width: 60px;display: inline-block">
                            <img height="56px" src="<?php echo e(Storage::url($product->image)); ?>">
                        </div>
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
                <td><span class="badge"><?php echo e($product->pivot->count); ?></span>
                    <div class="btn-group form-inline">
                        <form action="<?php echo e(route('basketDel',$product->id)); ?>" method="POST">
                            <button type="submit" class="btn btn-danger">
                                <span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
                            </button>
                            <?php echo csrf_field(); ?>
                        </form>
                        <form action="<?php echo e(route('basketAdd',$product->id)); ?>" method="POST">
                            <button type="submit" class="btn btn-success">
                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                            </button>
                            <?php echo csrf_field(); ?>
                        </form>
                    </div>
                </td>
                <td><?php echo e($product->price); ?> ₽</td>
                <td><?php echo e($product->getPriceForCount()); ?> ₽</td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td colspan="3">Общая стоимость:</td>
                <td><?php echo e($order->getFullPrice()); ?> ₽</td>
            </tr>
            </tbody>
        </table>
        <br>
        <div class="btn-group pull-right" role="group">
            <a type="button" class="btn btn-success" href="<?php echo e(route('basketPlace')); ?>">Оформить заказ</a>
        </div>
    </div>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('Layouts.mainLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\laravel\laravel_first\resources\views\Basket\basket.blade.php ENDPATH**/ ?>