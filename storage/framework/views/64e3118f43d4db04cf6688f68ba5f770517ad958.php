<?php $__env->startSection('contain'); ?>
<?php if(Session::has('packages')): ?>
<h1 style="align-content: center">Go and Book any package</h1>
<?php else: ?>
<div>
    <h1>Packages Booked By You</h1>
    <table class="table">
    <thead>
        <tr>
        
        <th scope="col">Order Id</th>
        <th scope="col">Package Name</th>
        <th scope="col">Package Price</th>
        <th scope="col">Start Date</th>
        </tr>
    </thead>
    <tbody>
        
        <?php $__currentLoopData = $packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
            <tr>
                
                <td><?php echo e($package->id); ?></td>
                <td><?php echo e($package->name); ?></td>
                <td><?php echo e($package->price); ?></td>
                <td><?php echo e($package->date); ?></td>
                
            </tr>
            
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
    </table>
</div>
<?php endif; ?>
<hr>
        <?php if(Session::has('events')): ?>
        <h1 style="align-content: center">Go and Book any event</h1>
        <?php else: ?>
            <div>
                <h1>Events Booked By You</h1>
                <table class="table">
                <thead>
                    <tr>
                    
                    <th scope="col">Order Id</th>
                    <th scope="col">Event Name</th>
                    <th scope="col">Event Price</th>
                    <th scope="col">Event Start Date</th>
                    <th scope="col">Event End Date</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                        <tr>
                            
                            <td><?php echo e($event->id); ?></td>
                            <td><?php echo e($event->name); ?></td>
                            <td><?php echo e($event->price); ?></td>
                            <td><?php echo e($event->startdate); ?></td>
                            <td><?php echo e($event->enddate); ?></td>
                            
                        </tr>
                        
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                </table>
            </div>
        <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\transport\resources\views/pages/user/mybooking.blade.php ENDPATH**/ ?>