<?php $__env->startSection('contain'); ?>
<tr>
            <th> <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h2 class="mb-2 text-primary">Event List</h2>
                </div></th>
        </tr>
<div class="row">
  <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    
    
      <div class="image-cards col-md-3">
          <div class="image-card">
              <div class="image-card-banner">
                  <img src="<?php echo e(asset($event->image)); ?>">
              </div>
              <div class="card-details">
                  <h1><b><?php echo e($event->eventname); ?></b></h1>
                  <p class="cards-p"><i class="fas fa-bolt"></i>
                    From <span id="price"> <?php echo e($event->price); ?></span> taka
                </p>
                <p><i class="fas fa-clock"></i> 1day & 2 night</p>
              </div>
              
              <td><a href="/admin/eventdetails/<?php echo e($event->id); ?>/<?php echo e($event->name); ?>">See Details</a></td>
            
          </div>
      </div>
  </a>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\transport\resources\views/pages/admin/event/adminEventList.blade.php ENDPATH**/ ?>