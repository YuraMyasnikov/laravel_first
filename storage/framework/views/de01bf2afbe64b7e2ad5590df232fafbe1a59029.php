<?php $__env->startSection('title',$product->name); ?>

<?php $__env->startSection('content'); ?>
    <h1><?php echo e($product->name); ?></h1>
    <h2><?php echo e($product->category->name); ?></h2>
    <p>Цена: <b><?php echo e($product->price); ?> ₽</b></p>
    <img src="<?php echo e(Storage::url($product->image)); ?>">
    <p><?php echo e($product->description); ?></p>

    <?php if($product->count != 0): ?>
        <form action="<?php echo e(route('basketAdd', $product)); ?>" method="POST">
            <button type="submit" class="btn btn-success" role="button"
                    <?php if(isset($product->deleted_at)): ?> disabled <?php endif; ?>
            >Добавить в корзину
            </button>
            <?php echo csrf_field(); ?>
        </form>
    <?php else: ?>
        <p><b>Товар отстутсвует</b></p>
        <p>Оповестить при наличии товара</p>
        <form action="<?php echo e(route('subscripe', $product)); ?>" method="post">
            <?php echo csrf_field(); ?>
            <label for="email">
                Узнать по почте
                <input type="text" name="email" id="email">
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="alert alert-danger">
                    <?php echo e($message); ?>

                </div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </label>
            <button type="submit" class="btn btn-warning">Оповестить</button>
        </form>
    <?php endif; ?>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('Layouts.mainLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\laravel\laravel_first\resources\views/product.blade.php ENDPATH**/ ?>