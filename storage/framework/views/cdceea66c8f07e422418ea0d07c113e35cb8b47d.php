<?php $__env->startSection('contain'); ?>
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
<h3 class="mb-2 text-primary">Packages List</h3>
    </div>
    <table class="table table-borded">
    
     
        <tr>
            <th>Name</th>
            <th>Id</th>
            <th>Price</th>
            <th>Short Description</th>
            <th>Description</th>

            <th>Agent ID</th>
            
            <th>End Date</th>
            <th>Booiking Deadline</th>

        </tr>
        <?php $__currentLoopData = $Packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($Package->name); ?></td>
                <td><?php echo e($Package->id); ?></td>
                <td><?php echo e($Package->price); ?></td>
                <td><?php echo e($Package->shortdesc); ?></td>
                <td><?php echo e($Package->desc); ?></td>

                <td><?php echo e($Package->agentID); ?></td>
               
                <td><a href="/admins/Packageedit/<?php echo e($Package->id); ?>/<?php echo e($Package->name); ?>">Edit</a></td>
                <td><a href="/admins/Packagedelete/<?php echo e($Package->id); ?>/<?php echo e($Package->name); ?>">Delete</a></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\transport\resources\views/pages/admin/package/packagelist.blade.php ENDPATH**/ ?>