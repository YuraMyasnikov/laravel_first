<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <div class="labels">
            <?php if($product->isNew()): ?>
                <div style="min-width: 87px; margin-bottom: 5px !important;" class="alert alert-success">Новинка</div>
            <?php endif; ?>
            <?php if($product->isHit()): ?>
                <div style="min-width: 87px; margin-bottom: 5px !important;" class="alert alert-warning">Хит</div>
            <?php endif; ?>
            <?php if($product->isSale()): ?>
                <div style="min-width: 87px; margin-bottom: 5px !important;" class="alert alert-info">Скидка</div>
            <?php endif; ?>
        </div>
        <img src="<?php echo e(Storage::url($product->image)); ?>">
        <div class="caption">
            <h4 class="cardItemName"><?php echo e($product->name); ?></h4>
            <p><?php echo e($product->category->name); ?></p>
            <p><?php echo e($product->price); ?> ₽</p>
            <?php if($product->count == 1): ?>
                <p>Последний шанс</p>
            <?php elseif($product->count > 1 ): ?>
                <p>Торопись, осталось немного</p>
            <?php elseif($product->count == 0): ?>
                <p>Временно отсутствует</p>
            <?php endif; ?>


            <p>
            <form action="<?php echo e(route('basketAdd', $product)); ?>" method="post">
                <?php echo csrf_field(); ?>
                <?php if($product->count > 0): ?>
                    <button type="submit" class="btn btn-success"> В корзину</button>
                <?php else: ?>
                    <button disabled type="submit" class="btn "> В корзину</button>
                <?php endif; ?>
                <a href="<?php echo e(route('product',[isset($category) ? $category->code : $product->category->code, $product->code])); ?>" class="btn btn-default">Подробнее</a>
            </form>
            </p>
        </div>
    </div>
</div>
<?php /**PATH C:\OpenServer\domains\laravel\laravel_first\resources\views\cardItem.blade.php ENDPATH**/ ?>