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
              <li><a href="{{route('home')}}">Home</a></li>
              <li><a href="{{route('packages')}}">Packages</a></li>
              <li><a href="{{route('events')}}">Events</a></li>
              <li><a href="">Resort</a></li>
              <li><a href="">ShopHobe</a></li>
              <li><a href="">RentHobe</a></li>
              <li><a href="">Contact Us</a></li>
            </ul>
      @if (Session::has('user'))
      <ul class="nav navbar-nav  ">
          <div class="dropdown" >
              <button class="btn" type="button" data-toggle="dropdown">{{Session::get('user')}}
              <span class="caret"></span></button>
              <ul class="dropdown-menu">
                <li><a href="{{route('editprofile')}}">My Profile</a></li>
                
                @if (Session()->get('role')=='agent')
                  <li><a href="{{route('createpackages')}}">My Packages</a></li>
                  <li><a href="{{route('createevents')}}">My Events</a></li>
                @else
                  <li><a href="{{route('mybooking')}}">My Booking</a></li>
                @endif
                
                <li><a href="{{route('logout')}}">Log Out</a></li>
              </ul>
            </div>
      </ul>
      @else
          <li><a class="btn" href={{route('login')}} ><span ></span>Sign in</a></li>
      
      @endif
  </header>