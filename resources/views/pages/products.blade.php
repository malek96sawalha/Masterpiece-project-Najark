<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Najark - Carpenter Website</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="../css/lightbox.min.css">
    <link rel="stylesheet" href="../css/animate.min.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/product.css">
</head>

<body style="  background-color: #FCF4EE ;">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
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
                      <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-facebook-f"></i></a>
                      <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-twitter"></i></a>
                      <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-linkedin-in"></i></a>
                      <a class="btn btn-sm-square bg-white text-primary me-0" href=""><i class="fab fa-instagram"></i></a>
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
          </div>
          <a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Get A Quote<i class="fa fa-arrow-right ms-3"></i></a>
      </div>
  </nav>
  <!-- Navbar End -->
<!-- title page -->
<div class="page-title">
<h1>Modern Bedrooms</h1>
</div>
<!-- end title -->
<!-- body -->
<div class="container">
    @foreach ($products as $product )
    <div class="card">
        <div class="body-card">
            <div class="image">
                <img src="../img/image_png.png" alt="" srcset="">
            </div>
            <div class="title">
                <p>{{$product->name}}
                </p>

            </div>
            <div class="description">
                <p>{{$product->shortDescription}}
                </p>

            </div>
            <div class="button">
                <a href="{{ route('productdetail', ['id' => $product->id]) }}" class="btn-detail">View Complete Details</a>
            </div>
        </div>
    </div>

    @endforeach


</div>
<!-- end body -->



        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
          <div class="container py-5">
              <div class="row g-5">
                  <div class="col-lg-3 col-md-6">
                      <h4 class="text-light mb-4">Address</h4>
                      <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Houfa Alwasatea, Irbid, Jordan</p>
                      <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>0798425191</p>
                      <p class="mb-2"><i class="fa fa-envelope me-3"></i>najarkonline@gmail.com</p>
                      <div class="d-flex pt-2">
                          <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                          <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                          <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                          <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                      <h4 class="text-light mb-4">Services</h4>
                      <a class="btn btn-link" href="">General Carpentry</a>
                      <a class="btn btn-link" href="">Furniture Remodeling</a>
                      <a class="btn btn-link" href="">Wooden Floor</a>
                      <a class="btn btn-link" href="">Wooden Furniture</a>
                      <a class="btn btn-link" href="">Custom Carpentry</a>
                  </div>
                  <div class="col-lg-3 col-md-6">
                      <h4 class="text-light mb-4">Quick Links</h4>
                      <a class="btn btn-link" href="">About Us</a>
                      <a class="btn btn-link" href="">Contact Us</a>
                      <a class="btn btn-link" href="">Our Services</a>
                      <a class="btn btn-link" href="">Terms & Condition</a>
                      <a class="btn btn-link" href="">Support</a>
                  </div>
                  <div class="col-lg-3 col-md-6">
                      <!-- <h4 class="text-light mb-4">Newsletter</h4> -->
                      <h2 style="color:#AB7442;">NajarK</h2>
                      <!-- <div class="position-relative mx-auto" style="max-width: 400px;">
                          <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                          <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                      </div> -->
                  </div>
              </div>
          </div>
          <div class="container">
              <div class="copyright">
                  <div class="row">
                      <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                          &copy; <a class="border-bottom" href="#">NajarK online</a>, All Right Reserved.
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- Footer End -->


      <!-- Back to Top -->
      <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>


      <!-- JavaScript Libraries -->
      <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
      <script src="../js/wow.min.js"></script>
      <script src="../js/easing.min.js"></script>
      <script src="../js/waypoints.min.js"></script>
      <script src="../js/counterup.min.js"></script>
      <script src="../js/owl.carousel.min.js"></script>
      <script src="../js/isotope.pkgd.min.js"></script>
      <script src="../js/lightbox.min.js"></script>

      <!-- Template Javascript -->
      <script src="../js/main.js"></script>
  </body>

  </html>
