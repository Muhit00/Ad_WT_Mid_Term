<?php $__env->startSection('contain'); ?>
    <div class="page">
        <div class="login_body">
          <h3 style="text-align: center">Admin Login</h3>
          <?php if(Session::has('err2')): ?>
          <div class="alert alert-info"><?php echo e(Session::get('err2')); ?></div>
          <?php endif; ?>
          <form method="POST" action="<?php echo e(route('admin')); ?>">
            <?php echo e(csrf_field()); ?>

            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Email :</label>
                <input type="text" name="email" class="form-control" id="formGroupExampleInput" >
              </div>

              <div class="mb-3" style="margin-top: 20px">
                <label for="formGroupExampleInput2" class="form-label">Password :</label>
                <input type="password" name="password" class="form-control" id="formGroupExampleInput2" >
              </div>
              <input type="submit" name="submit" value="Sign in" class="btn btn-primary login_button">
          </form>
        </div>
        
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\transport\resources\views/pages/admin/login.blade.php ENDPATH**/ ?>