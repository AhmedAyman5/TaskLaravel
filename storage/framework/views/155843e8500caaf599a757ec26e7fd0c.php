

<?php $__env->startSection('title', 'Employees | Edit'); ?>

<?php $__env->startSection('content'); ?>


<section class="h-100 mt-5">
        <div class="card w-100 bg-transparent text-light text-center border border-light">
            <div class="card-title text-start p-3 d-flex justify-content-between" style="align-items: baseline;">
                <h1>Edit Employee | ID: <?php echo e($employee->id); ?></h1>
            </div>
            <div class="card-body text-start">
                <form action=" <?php echo e(route('employees.update', $employee->id)); ?> " method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value=" <?php echo e($employee->name); ?> ">
                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <small class="text-danger">* <?php echo e($message); ?></small>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value=" <?php echo e($employee->email); ?> ">
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <small class="text-danger">* <?php echo e($message); ?></small>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone" value=" <?php echo e($employee->phone); ?> ">
                        <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <small class="text-danger">* <?php echo e($message); ?></small>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="mb-3">
                        <label for="picture" class="form-label">Picture</label>
                        <input type="file" class="form-control" id="picture" name="picture" value=" <?php echo e($employee->picture); ?> ">
                    </div>
                    <div class="mb-3">
                        <label for="manager_id" class="form-label">Manager</label>
                        <select class="form-control" id="manager_id" name="manager_id" value=" <?php echo e($employee->manager_id); ?> ">
                            <option value="-1">Select Manager</option>
                            <?php /* foreach ($managers as $manager): ?>
                                <option value="<?= $manager->id ?>"><?= $manager->name ?></option>
                            <?php endforeach; */ ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Update <i class="fa fa-paper-plane"></i></button>
                </form>

            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\XAMPP\htdocs\TaskLaravel\MyTask\resources\views/employees/edit.blade.php ENDPATH**/ ?>