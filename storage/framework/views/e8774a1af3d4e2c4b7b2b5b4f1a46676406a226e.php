<section>
  <div class="Topbar">
    <div class="top">
      <h3>We’re here to provide 24/7 at your service</h3>
    </div>
      <div class="top">
      <p><i class="fas fa-phone-alt"></i>01644828192<i class="far fa-envelope"></i> pandatour@gmail.com</p>
      </div>
  </div>
</section>
  <header>
          <ul class="nav-bar">
              <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
              <li><a href="<?php echo e(route('packages')); ?>">Packages</a></li>
              <li><a href="<?php echo e(route('events')); ?>">Events</a></li>
              <li><a href="">Resort</a></li>
              <li><a href="">ShopHobe</a></li>
              <li><a href="">RentHobe</a></li>
              <li><a href="">Contact Us</a></li>
            </ul>
      <?php if(Session::has('user')): ?>
      <ul class="nav navbar-nav  ">
          <div class="dropdown" >
              <button class="btn" type="button" data-toggle="dropdown"><?php echo e(Session::get('user')); ?>

              <span class="caret"></span></button>
              <ul class="dropdown-menu">
                <li><a href="<?php echo e(route('editprofile')); ?>">My Profile</a></li>
                
                <?php if(Session()->get('role')=='agent'): ?>
                  <li><a href="<?php echo e(route('createpackages')); ?>">My Packages</a></li>
                  <li><a href="<?php echo e(route('createevents')); ?>">My Events</a></li>
                <?php else: ?>
                  <li><a href="<?php echo e(route('mybooking')); ?>">My Booking</a></li>
                <?php endif; ?>
                
                <li><a href="<?php echo e(route('logout')); ?>">Log Out</a></li>
              </ul>
            </div>
      </ul>
      <?php else: ?>
          <li><a class="btn" href=<?php echo e(route('login')); ?> ><span ></span>Sign in</a></li>
      
      <?php endif; ?>
  </header><?php /**PATH C:\xampp\htdocs\transport\resources\views/inc/navbar.blade.php ENDPATH**/ ?>