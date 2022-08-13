<?php $__env->startSection('contain'); ?>
        <?php if(Session::has($events[0])): ?>
            <h1 style="align-content: center">"Even if you are on the right track, you’ll get run over if you just sit there.” – Will Rodgers</h1>
        <?php else: ?>
            <div>
                <table class="table">
                <thead>
                    <tr>
                    
                    <th scope="col">Order Id</th>
                    <th scope="col">Customer Name</th>
                    <th scope="col">Customer Email</th>
                    <th scope="col">Customer Phone</th>
                    
                    </tr>
                </thead>
                <tbody>
                    
                    <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                        <tr>
                            
                            <td><?php echo e($event->id); ?></td>
                            <td><?php echo e($event->name); ?></td>
                            <td><?php echo e($event->email); ?></td>
                            <td><?php echo e($event->phone); ?></td>
                            
                        </tr>
                        
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                </table>
            </div>
        <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\transport\resources\views/pages/agent/bookevent.blade.php ENDPATH**/ ?>