<?php $__env->startSection('title', 'Категории'); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-md-12">
        <h1>Категории</h1>
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
                    Действия
                </th>
            </tr>

            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $property): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($property->id); ?></td>
                    <td><?php echo e($property->code); ?></td>
                    <td><?php echo e($property->name); ?></td>
                    <td>
                        <div class="btn-group" role="group">
                            <form action="<?php echo e(route('categories.destroy', $property)); ?>" method="POST">
                                <a class="btn btn-success" type="button" href="<?php echo e(route('categories.show', $property)); ?>">Открыть</a>
                                <a class="btn btn-warning" type="button" href="<?php echo e(route('categories.edit', $property)); ?>">Редактировать</a>
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
        <a href="<?php echo e(route('categories.create')); ?>" class="btn btn-success">Добавить Категорию</a>
    </div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('Layouts.authBasketLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\laravel\laravel_first\resources\views\admin\categories\categories.blade.php ENDPATH**/ ?>