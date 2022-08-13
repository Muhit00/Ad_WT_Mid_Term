<?php $__env->startSection('contain'); ?>
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h3 class="mb-2 text-primary">Events Details</h3>
    </div>
    <table class="table table-borded">
    
     
        <tr>
            <th>Name</th>
            <th>Id</th>
            <th>Short Description</th>
           
            <th>Description</th>
            <th>Price</th>
            <th>Agent ID</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Deadline</th>
            <th>Image</th>
            
        </tr>
      
            <tr>
                <td><?php echo e($events->name); ?></td>
                <td><?php echo e($events->id); ?></td>
                <td><?php echo e($events->shortdesc); ?></td>
                <td><?php echo e($events->desc); ?></td>
                <td><?php echo e($events->price); ?></td>
                <td><?php echo e($events->agentid); ?></td>
                <td><?php echo e($events->startdate); ?></td>
                <td><?php echo e($events->enddate); ?></td>
                <td><?php echo e($events->deadline); ?></td>
                <td><?php echo e($events->image); ?></td>
            </tr>
      
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\transport\resources\views/pages/admin/event/adminEventDetails.blade.php ENDPATH**/ ?>