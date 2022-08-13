<?php $__env->startSection('contain'); ?>
    <table class="table table-borded">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <h3 class="mb-2 text-primary">Agent List</h3>
        </div>
     
        <tr>
            <th>Name</th>
            <th>Id</th>
            <th>Email</th>
            <th>Phone</th>
            <th>role</th>
            <th></th>
        </tr>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($user->name); ?></td>
                <td><?php echo e($user->id); ?></td>
                <td><?php echo e($user->email); ?></td>
                <td><?php echo e($user->phone); ?></td>
                
                <td><a href="/admins/item/<?php echo e($user->id); ?>/<?php echo e($user->name); ?>">Item</a></td>
                <td><a href="/admins/Agentedit/<?php echo e($user->id); ?>/<?php echo e($user->name); ?>">Edit</a></td>
                <td><a href="/admins/Agentdelete/<?php echo e($user->id); ?>/<?php echo e($user->name); ?>">Delete</a></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\transport\resources\views/pages/admin/agentlist.blade.php ENDPATH**/ ?>