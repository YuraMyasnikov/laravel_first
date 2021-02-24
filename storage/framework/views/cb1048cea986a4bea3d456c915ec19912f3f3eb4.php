

<?php if(isset($category)): ?>
    <?php $__env->startSection('title', 'Редактирование ' . $product->name); ?>
<?php else: ?>
    <?php $__env->startSection('title', 'Создать товар'); ?>
<?php endif; ?>


<?php $__env->startSection('content'); ?>
    <div class="col-md-12">

        <?php if(isset($product)): ?>
            <h1>Редактирование товара <b><?php echo e($product->name); ?></b></h1>
        <?php else: ?>
            <h1>Создать товар</h1>
        <?php endif; ?>

        <form method="POST" enctype="multipart/form-data"
              action="
                    <?php if(isset($product)): ?>
              <?php echo e(route('products.update', $product)); ?>

              <?php else: ?>
              <?php echo e(route('products.store')); ?>

              <?php endif; ?>
                  ">
            <div>
                <?php if(isset($product)): ?>
                    <?php echo method_field('PUT'); ?>
                <?php endif; ?>
                <?php echo csrf_field(); ?>
                <br>
                <div class="input-group row">
                    <label for="show" class="col-sm-2 col-form-label">Показать на сайте </label>
                    <div class="col-sm-6">
                        <input type="checkbox" class="form-check" name="show" id="show"
                               <?php if( !isset($product) || $product->show == 1): ?> checked="checked" <?php endif; ?>
                        >
                    </div>
                </div>
                <div class="input-group row">
                    <label for="code" class="col-sm-2 col-form-label">Код: </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="code" id="code"
                               value="<?php echo e(old('code', isset($product) ? $product->code : null )); ?>">
                        <?php $__errorArgs = ['code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger"> <?php echo e($message); ?></div>
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
                               value="<?php echo e(old('name', isset($product)? $product->name : null )); ?>">
                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger"> <?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>

                <br>
                <div class="input-group row">
                    <label for="price" class="col-sm-2 col-form-label">Категория: </label>
                    <div class="col-sm-6">
                        <select name="category_id" id="category_id" class="form-control" style="height: auto;">
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($category->id); ?>"
                                        <?php if(isset($product)): ?>
                                        <?php if($category->id == $product->category_id): ?>
                                        selected
                                    <?php endif; ?>
                                    <?php endif; ?>
                                > <?php echo e($category->name); ?>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <?php $__errorArgs = ['category_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger"> <?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>

                <br>
                <div class="input-group row">
                    <label for="price" class="col-sm-2 col-form-label">Цена: </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="price" id="price"
                               value="<?php echo e(old('price', isset($product)? $product->price : null )); ?>">
                        <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger"> <?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>

                <br>
                <div class="input-group row">
                    <label for="count" class="col-sm-2 col-form-label">Количнство: </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="count" id="count"
                               value="<?php echo e(old('count', isset($product) ? $product->count : null )); ?>">
                        <?php $__errorArgs = ['count'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger"> <?php echo e($message); ?></div>
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
                                  rows="7"><?php echo e(old('description', isset($product)? $product->description : null )); ?>

                        </textarea>
                        <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger"> <?php echo e($message); ?></div>
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
                        <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger"> <?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>

                <?php $__currentLoopData = ['new' => 'Новинка','hit' => 'Хит продаж','sale' => 'Скидка']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <br>
                    <div class="input-group row">
                        <label for="<?php echo e($key); ?>" class="col-sm-2 col-form-label"><?php echo e($value); ?> </label>
                        <div class="col-sm-6">
                            <input type="checkbox" class="form-check" name="<?php echo e($key); ?>" id="<?php echo e($key); ?>"
                                   <?php if(isset($product) && $product[$key] === 1): ?> checked="checked" <?php endif; ?>
                            >
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <button class="btn btn-success" type="submit">Сохранить</button>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('Layouts.authBasketLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\laravel\laravel_first\resources\views\admin\products\productCreate.blade.php ENDPATH**/ ?>