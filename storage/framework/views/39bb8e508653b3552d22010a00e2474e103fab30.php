<?php $__env->startSection('contain'); ?>
    <table class="table table-borded">
    <tr>
        <th>
        <form action="" class="col-9">
            <div class="form-group">
                <input type="search" name="search" id="" class="form-control" placeholder="Search by name and email" 
                value="<?php echo e($search); ?>" >
            </div>
            <button class="btn btn-primary" > Search </button>
    </form>
        </th>
    </tr>
    

        <tr>
            <th> <a class="btn btn-primary" href="<?php echo e(route('admins.create')); ?>"> Do you want to Create an Admin  </a></th>
           
        </tr>
       
        <tr>
            <th> <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h2 class="mb-2 text-primary">Admins List</h2>
                </div></th>
        </tr>
       
        <tr>
            <th>Name</th>
            <th>Id</th>
            <th>Email</th>
            <th>Phone</th>
            <th></th>
        </tr>
        <?php $__currentLoopData = $admins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $admin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($admin->name); ?></td>
                <td><?php echo e($admin->id); ?></td>
                <td><?php echo e($admin->email); ?></td>
                <td><?php echo e($admin->phone); ?></td>
                <td><a href="/admins/edit/<?php echo e($admin->id); ?>/<?php echo e($admin->name); ?>">Edit</a></td>
                <td><a href="/admins/delete/<?php echo e($admin->id); ?>/<?php echo e($admin->name); ?>">Delete</a></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\transport\resources\views/pages/admin/list.blade.php ENDPATH**/ ?>