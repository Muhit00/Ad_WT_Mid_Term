<section>
    <div class="Topbar">
      <div class="top">
        <p>We’re here to provide 24/7 at your service</p>
      </div>
       <div class="top">
        <p><i class="fas fa-phone-alt"></i>01791941284 <i class="far fa-envelope"></i> pandatour@gmail.com</p>
       </div>
    </div>
  </section>
    <header>
        <nav class=""  >
            <ul class="nav-bar">
                <li><a href="<?php echo e(route('adminDash')); ?>">Home</a></li>
                <li><a href="<?php echo e(route('admins.list')); ?>"> Admins </a></li>
                <li><a href="<?php echo e(route('admins.packagelist')); ?>">Packages</a></li>
                <li><a href="<?php echo e(route('admins.events')); ?>">Events</a></li>
                <li><a href="<?php echo e(route('admins.Agentlist')); ?>">Agents</a></li>
                <li><a href="<?php echo e(route('admins.Userlist')); ?>">Users</a></li> 
              </ul>
        </nav>
      
        <?php if(Session::has('admin')): ?>
        <ul class="nav navbar-nav  ">
            <div class="dropdown" >
                <button class="btn" type="button" data-toggle="dropdown"><?php echo e(Session::get('admin')); ?>

                <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo e(route('admineditprofile')); ?>">My Profile</a></li>
                  
                  <li><a href="<?php echo e(route('Alogout')); ?>">Log Out</a></li>
                </ul>
              </div>
        </ul>
        <?php else: ?>
            <li><a class="btn" href="<?php echo e(route('admin')); ?>" ><span ></span>Sign in</a></li>
        
        <?php endif; ?>
    </header><?php /**PATH C:\xampp\htdocs\transport\resources\views/inc/adminnavbar.blade.php ENDPATH**/ ?>