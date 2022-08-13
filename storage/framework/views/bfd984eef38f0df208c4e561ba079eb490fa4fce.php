<?php $__env->startSection('contain'); ?>
<br>
    <legend> Packages </legend>
<br>

  <div class="row">
    <?php $__currentLoopData = $packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="/packagedetails/<?php echo e($package->id); ?>">
        <div class="image-cards col-md-3">
            <div class="image-card">
                <div class="image-card-banner">
                    <img src="<?php echo e($package->image); ?>">
                </div>
                <div class="card-details">
                    <h1><b><?php echo e($package->name); ?></b></h1>
                    <p class="cards-p"><i class="fas fa-bolt"></i>
                      From <span id="price"> <?php echo e($package->price); ?></span> taka
                  </p>
                  <p><i class="fas fa-clock"></i>Duration :<?php echo e($package->shortdesc); ?></p>
                </div>
              
            </div>
        </div>
    </a>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\transport\resources\views/pages/package/packages.blade.php ENDPATH**/ ?>