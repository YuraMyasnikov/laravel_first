<?php if(isset($property)): ?>
    <?php $__env->startSection('title', 'Редактирование ' . $property->name); ?>
<?php else: ?>
    <?php $__env->startSection('title', 'Создать категорию'); ?>
<?php endif; ?>


<?php $__env->startSection('content'); ?>
    <div class="col-md-12">

        <?php if(isset($property)): ?>
        <h1>Редактирование категории <b><?php echo e($property->name); ?></b></h1>
        <?php else: ?>
            <h1>Добавить Категорию</h1>
        <?php endif; ?>

        <form method="POST" enctype="multipart/form-data"
              action="
                    <?php if(isset($property)): ?>
                        <?php echo e(route('categories.update', $property)); ?>

                    <?php else: ?>
                        <?php echo e(route('categories.store')); ?>

                    <?php endif; ?>
                  ">
            <div>
                <?php if(isset($property)): ?>
                    <?php echo method_field('PUT'); ?>
                <?php endif; ?>
                <?php echo csrf_field(); ?>
                <div class="input-group row">
                    <label for="code" class="col-sm-2 col-form-label">Код: </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="code" id="code"
                               value="<?php echo e(old('code', isset($property) ? $property->code : null)); ?>">
                        <?php $__errorArgs = ['code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="alert alert-danger"> <?php echo e($message); ?> </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <br>
                <div class="input-group row">
                    <label for="name" class="col-sm-2 col-form-label">Название: </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="name" id="name"
                               value="<?php echo e(old('name', isset($property) ? $property->name : null)); ?>">
                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger"> <?php echo e($message); ?> </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>

                <br>
                <div class="input-group row">
                    <label for="description" class="col-sm-2 col-form-label">Описание: </label>
                    <div class="col-sm-6">
                        <textarea name="description" id="description" cols="72"
                                  rows="7"><?php echo e(old('description', isset($property) ? $property->description : null)); ?></textarea>
                        <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger"> <?php echo e($message); ?> </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <br>

                <div class="input-group row">
                    <label for="image" class="col-sm-2 col-form-label">Картинка: </label>
                    <div class="col-sm-10">
                        <label class="btn btn-default btn-file">
                            Загрузить <input type="file" style="display: none;" name="image" id="image">
                        </label>
                    </div>
                </div>
                <button class="btn btn-success">Сохранить</button>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('Layouts.authBasketLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\laravel\laravel_first\resources\views\admin\categories\categoryCreate.blade.php ENDPATH**/ ?>