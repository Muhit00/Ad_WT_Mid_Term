<?php $__env->startSection('contain'); ?>
<style>
  table{
  table-layout:fixed;
  border: 1px solid gray;
  border-collapse: collapse;
}
th.from, th.date {
  width: 15%;
}
th.subject{
  width: 70%;
}
td{
  word-wrap: break-word;
}
</style>
<?php if(Session::has('message')): ?>
        <div class="alert alert-success" style="margin-top: 20px"><?php echo e(Session::get('message')); ?></div>
<?php endif; ?>

<br>
    <div class="createPart">
      <legend > Add Package </legend>  
        <div >
          <form method="POST" action="<?php echo e(route('createpackages')); ?>">
            <?php echo e(csrf_field()); ?>

            <div class="mb-6">
                <label for="formGroupExampleInput" class="form-label">Package Name :</label>
                <input type="text" name="name" class="form-control" id="formGroupExampleInput" >
                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <span class="text-danger"><?php echo e($message); ?></span>
                 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label" style="margin-top: 20px">Price :</label>
                <input type="text" name="price" class="form-control" id="formGroupExampleInput" >
                <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <span class="text-danger"><?php echo e($message); ?></span>
                 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
              <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label" style="margin-top: 20px">Short Description</label>
                <input type="text" name="shortdesc" class="form-control" id="formGroupExampleInput" >
                <?php $__errorArgs = ['shortdesc'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <span class="text-danger"><?php echo e($message); ?></span>
                 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
              <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label" style="margin-top: 20px">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="desc"></textarea>
                <?php $__errorArgs = ['desc'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <span class="text-danger"><?php echo e($message); ?></span>
                 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
              

              <div class="mb-3" hidden>
                <label for="formGroupExampleInput" class="form-label" style="margin-top: 20px">Agent Name</label>
                <input type="text" name="agentname" class="form-control" id="formGroupExampleInput" value="<?php echo e(Session()->get('userId')); ?>">
                <?php $__errorArgs = ['agentname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <span class="text-danger"><?php echo e($message); ?></span>
                 <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
              
              <input type="submit" name="submit" value="Add Package" class="btn btn-primary login_button">
          </form>  
        </div>
        
    </div>
    <fieldset>
      <br>
      <legend> My Package </legend>
      <div>
        <table class="table">
          <thead>
            <tr>
              
              <th scope="col">Name</th>
              <th scope="col">Price</th>
              <th scope="col">Short Description</th>
              <th scope="col">Description</th>
              <th scope="col"></th>
              <th scope="col"></th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            
              <?php $__currentLoopData = $packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              
                  <tr>
                    
                      <td><?php echo e($package->name); ?></td>
                      <td><?php echo e($package->price); ?></td>
                      <td><?php echo e($package->shortdesc); ?></td>
                      <td ><?php echo e($package->desc); ?></td>
                      <td><a href="/book/<?php echo e($package->id); ?>">Booking Details</a></td>
                      <td><a href="/editpackage/<?php echo e($package->id); ?>">Edit</a></td>
                      <td><a href="package/delete/<?php echo e($package->id); ?>">Delete</a></td> 
                  </tr>
                
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>
      </div>
    </fieldset>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\transport\resources\views/pages/agent/createpackages.blade.php ENDPATH**/ ?>