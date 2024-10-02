

<?php $__env->startSection('title', 'Employees'); ?>

<?php $__env->startSection('content'); ?>



<section class="h-100 mt-5">
        <div class="card w-100 bg-transparent text-light text-center border border-light">
            <div class="card-title text-start p-3 d-flex justify-content-between" style="align-items: baseline;">
                <h1>Employees</h1>
                <a href="<?php echo e(route('employees.create')); ?>" class="btn btn-success">Add Employee <i class="fa fa-plus"></i></a>
            </div>
            <div class="card-body">
                <table class="table table-dark">
                    <thead>
                        <tr class="table-light">
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Picture</th>
                            <th>Manager ID</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $emp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($emp->id); ?></td>
                        <td><?php echo e($emp->name); ?></td>
                        <td><a href="mailto:<?php echo e($emp->email); ?>"><?php echo e($emp->email); ?></a></td>
                        <td><a href="tel:<?php echo e($emp->phone); ?>"><?php echo e($emp->phone); ?></a></td>
                        <td><img src="<?php echo e(asset('uploads/' . $emp->picture)); ?>" width="50" height="50" alt="profile image"></td>
                        <td><?php echo e($emp->manager_id); ?></td>
                        <td>
                            <a href="<?php echo e(route('employees.edit', $emp->id)); ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                            <a href="<?php echo e(route('employees.destroy', $emp->id)); ?>" onclick="return confirm('Are you sure?') }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                        </td>



                        
            <?php   /*  <td>
                            <a href="{{ route('students.edit', $emp->id) }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                            <a href="{{ route('students.destroy', $empd->id) }}" onclick="return confirm('Are you sure?') }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                        </td> 
                    */
            ?>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                    </tbody>
                </table>
            </div>
        </div>
    </section>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\XAMPP\htdocs\TaskLaravel\MyTask\resources\views/employees/index.blade.php ENDPATH**/ ?>