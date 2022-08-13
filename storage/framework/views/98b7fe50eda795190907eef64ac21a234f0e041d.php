<?php $__env->startSection('contain'); ?>
<style>
    table{
        align-items: center;
    }
    table, tr, td {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 20px;
    }
    
</style>
<?php if(Session::has('message')): ?>
        <div class="alert alert-success" style="margin-top: 20px"><?php echo e(Session::get('message')); ?></div>
<?php endif; ?>

<br>
    <legend> Package Details </legend>
    
    <div>
        <table>
            <tbody>
                <tr>
                    <td>Name:</td>
                    <td><?php echo e($packages->name); ?></td>
                </tr>
                <tr>
                    <td>Price:</td>
                    <td><?php echo e($packages->price); ?></td>
                </tr>
                <tr>
                    <td>Short Description:</td>
                    <td><?php echo e($packages->shortdesc); ?></td>
                </tr>
                <tr>
                    <td>Description:</td>
                    <td><?php echo e($packages->desc); ?></td>
                </tr>
            </tbody>
        </table>
    </div>
        

        <div class="createPart">
            <legend > Add Package </legend>  
              <div >
                <form method="POST" action="<?php echo e(route('confirmpackage')); ?>">
                  <?php echo e(csrf_field()); ?>


        
        

        <div class="mb-3" hidden>
            <label for="formGroupExampleInput" class="form-label" style="margin-top: 20px">Pack Name</label>
            <input type="text" name="packageId" class="form-control" id="formGroupExampleInput" value="<?php echo e($packages->id); ?>">
           
        </div>

        <div class="mb-3" >
            <label for="formGroupExampleInput" class="form-label" style="margin-top: 20px">date </label>
            <input type="date" name="date" class="form-control" id="formGroupExampleInput" >
            <?php $__errorArgs = ['date'];
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
        <?php if(Session()->get('role')=='agent'): ?>
        <div class="alert alert-success" style="margin-top: 20px">
            <h4 class="alert-heading">Just See</h4>
            <p>You can not buy packages as an agent </p>
            
          </div>
        <?php else: ?>
            <input type="submit" name="submit" value="Confirm Booking" class="btn btn-primary login_button">
        <?php endif; ?>
      </form>  
    </div>
    
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\transport\resources\views/pages/package/packdetails.blade.php ENDPATH**/ ?>