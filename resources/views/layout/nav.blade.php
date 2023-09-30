 <!-- Spinner Start -->
 <div id="spinner"
     class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
     <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
         <span class="sr-only">Loading...</span>
     </div>
 </div>
 <!-- Spinner End -->


 <!-- Topbar Start -->
 <div class="container-fluid bg-light p-0">
     <div class="row gx-0 d-none d-lg-flex">
         <div class="col-lg-7 px-5 text-start">
             <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                 <small class="fa fa-map-marker-alt text-primary me-2"></small>
                 <small>Houfa Alwasatea, Irbid, Jordan</small>
             </div>
             <div class="h-100 d-inline-flex align-items-center py-3">
                 <small class="far fa-clock text-primary me-2"></small>
                 <small>Sun - Thu : 09.00 AM - 06.00 PM</small>
             </div>
         </div>
         <div class="col-lg-5 px-5 text-end">
             <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                 <small class="fa fa-phone-alt text-primary me-2"></small>
                 <small>0798425191</small>
             </div>
             <div class="h-100 d-inline-flex align-items-center">
                 <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i
                         class="fab fa-facebook-f"></i></a>
                 <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i
                         class="fab fa-twitter"></i></a>
                 <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i
                         class="fab fa-linkedin-in"></i></a>
                 <a class="btn btn-sm-square bg-white text-primary me-0" href=""><i
                         class="fab fa-instagram"></i></a>
             </div>
         </div>
     </div>
 </div>
 <!-- Topbar End -->

 <!-- Navbar Start -->
 <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
     <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
         <h2 class="m-0 text-primary">NajarK</h2>
     </a>
     <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
         <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarCollapse">
         <div class="navbar-nav ms-auto p-4 p-lg-0">
             <a href="index.html" class="nav-item nav-link active">Home</a>
             <a href="about.html" class="nav-item nav-link">About</a>
             <a href="service.html" class="nav-item nav-link">Service</a>
             <a href="project.html" class="nav-item nav-link">Project</a>
             <div class="nav-item dropdown">
                 <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                 <div class="dropdown-menu fade-up m-0">
                     <a href="cart.html" class="dropdown-item">Cart</a>
                     <a href="profile.html" class="dropdown-item">My profile</a>
                     <a href="login.html" class="dropdown-item">Login</a>
                     <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                     <!-- <a href="404.html" class="dropdown-item">404 Page</a> -->
                 </div>
             </div>
             <a href="contact.html" class="nav-item nav-link">Contact</a>

              @if (Auth::check())
          <a href="{{ route('profile.edit', [Auth::user()]) }}" class="nav-item nav-link">{{ Auth::user()->name }}</a>
         <form  method="POST" class="nav-item nav-link" action="{{ route('logout') }}">
             @csrf

              <a href="{{ route('logout') }}" onclick="event.preventDefault();this.closest('form').submit();">{{ __('Logout') }}</a>
         </form>
     @else
         <a href="/login" class="login-panel nav-item nav-link"></i>Login</a>
         <a href="/register"  class="register-panel nav-item nav-link"></i>Register</a>
     @endif
         </div>
    
         <a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Get A Quote<i
                 class="fa fa-arrow-right ms-3"></i></a>
     </div>

 </nav>
 <!-- Navbar End -->
