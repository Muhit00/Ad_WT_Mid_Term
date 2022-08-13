<?php $__env->startSection('contain'); ?>
        <legend> Events </legend>
        <br>

<div class="row">
  <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <a href="/eventdetails/<?php echo e($event->id); ?>">
      <div class="image-cards col-md-3">
          <div class="image-card">
              <div class="image-card-banner">
                  <img src="<?php echo e($event->image); ?>">
              </div>
              <div class="card-details">
                  <h1><b><?php echo e($event->name); ?></b></h1>
                  <p class="cards-p"><i class="fas fa-bolt"></i>
                    From <span id="price"> <?php echo e($event->price); ?></span> taka
                </p>
                <p><i class="fas fa-clock"></i> Duration :<?php echo e($event->shortdesc); ?></p>
              </div>
            
          </div>
      </div>
  </a>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\transport\resources\views/pages/event/events.blade.php ENDPATH**/ ?>