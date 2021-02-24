<p>Здравствуйте <?php echo e($product->name); ?> появился в продаже. Стоит <?php echo e($product->price); ?> рублей</p>

<a href="<?php echo e(route('product', [$product->category->code, $product->code])); ?>"> смотреть подробнее</a>
<?php /**PATH C:\OpenServer\domains\laravel\laravel_first\resources\views\mail\subscribe.blade.php ENDPATH**/ ?>