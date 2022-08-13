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
                    <td><?php echo e($events->name); ?></td>
                </tr>
                <tr>
                    <td>Price:</td>
                    <td><?php echo e($events->price); ?></td>
                </tr>
                <tr>
                    <td>Short Description:</td>
                    <td><?php echo e($events->shortdesc); ?></td>
                </tr>
                <tr>
                    <td>Description:</td>
                    <td><?php echo e($events->desc); ?></td>
                </tr>
                <tr>
                    <td>Start Date:</td>
                    <td><?php echo e($events->startdate); ?></td>
                </tr>
                <tr>
                    <td>End Date:</td>
                    <td><?php echo e($events->enddate); ?></td>
                </tr>
                <tr>
                    <td>Deadline:</td>
                    <td><?php echo e($events->deadline); ?></td>
                </tr>
            </tbody>
        </table>
    </div>
        <br>

        <div >
              <div >
                <form method="POST" action="<?php echo e(route('confirmevent')); ?>">
                  <?php echo e(csrf_field()); ?>


        
        

        <div class="mb-3" hidden>
            <label for="formGroupExampleInput" class="form-label" style="margin-top: 20px">Pack Name</label>
            <input type="text" name="eventId" class="form-control" id="formGroupExampleInput" value="<?php echo e($events->id); ?>">
           
        </div>
        
        <?php if(Session()->get('role')=='agent'): ?>
            <div class="alert alert-success" style="margin-top: 20px">
                <h4 class="alert-heading">Just See</h4>
                <p>You can not buy events as an agent </p>
            
             </div>
        <?php else: ?>
            <input type="submit" name="submit" value="Confirm Booking" class="btn btn-primary login_button">
        <?php endif; ?> 
        
      </form>  
    </div>
    
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\transport\resources\views/pages/event/eventdetails.blade.php ENDPATH**/ ?>