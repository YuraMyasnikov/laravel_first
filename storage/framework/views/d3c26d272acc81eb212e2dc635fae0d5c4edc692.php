<h3>Приветствую <?php echo e($name); ?></h3>

<p>Заказ №<?php echo e($order->id); ?></p>

<table>
    <tr>
        <th>Название</th>
        <th>Количество</th>
        <th>Цена</th>
        <th>Всего</th>
    </tr>
    <?php $__currentLoopData = $order->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($product->name); ?></td>
            <td><?php echo e($product->pivot->count); ?></td>
            <td><?php echo e($product->price); ?> рублей</td>
            <td><?php echo e($product->price * $product->pivot->count); ?> рублей</td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td>Итого</td>
        <td><?php echo e($order->getFullPrice()); ?></td>
    </tr>
</table>
<?php /**PATH C:\OpenServer\domains\laravel\laravel_first\resources\views\mail\order_success.blade.php ENDPATH**/ ?>