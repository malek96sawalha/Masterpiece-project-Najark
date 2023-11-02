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
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap"
        rel="stylesheet">

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
    <link href="../css/productdetail.css" rel="stylesheet">
</head>

<body style="  background-color: #FCF4EE ;
">
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
    <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h2 class="m-0 text-primary">NajarK</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{ route('home') }}" class="nav-item nav-link active">Home</a>
            <a href="{{ route('about') }}" class="nav-item nav-link">About</a>
            {{-- <a href="service.html" class="nav-item nav-link">Service</a> --}}
            <a href="{{ url('/') }}#projects" class="nav-item nav-link">Projects</a>

            <div class="nav-item dropdown">
                <a href="#" class="nav-link nav-link" data-bs-toggle="dropdown">Cart</a>
                {{-- <div class="dropdown-menu fade-up m-0">
                    <a href="cart.html" class="dropdown-item">Cart</a>
                    <a href="profile.html" class="dropdown-item">My profile</a>
                    <a href="login.html" class="dropdown-item">Login</a>
                    <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                    <!-- <a href="404.html" class="dropdown-item">404 Page</a> -->
                </div> --}}
            </div>
            <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>

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

    <!-- star content -->
    <div class="page-title">
        <h1>Product Details</h1>
    </div>
    <div class="container">

        <div class="left-side">
            <div class="main-image">
                <img src="../img/image_png.png" alt="">

            </div>
            <div class="sub-images">
                <div class="image">
                    <img src="../img/image_png.png" alt="">

                </div>
                <div class="image">
                    <img src="../img/image_png.png" alt="">

                </div>
                <div class="image">
                    <img src="../img/image_png.png" alt="">

                </div>
                <div class="image">
                    <img src="../img/image_png.png" alt="">

                </div>
                <div class="image">
                    <img src="/images/image_png.png" alt="">

                </div>
                <div class="image">
                    <img src="/images/image_png.png" alt="">

                </div>

            </div>

        </div>
        <div class="right">
            <div>
                <h3>Product Specification</h3>
                <br>
                <h4>{{$product->name}}</h4>
                <br>
                <h5>{{$product->longDescription}}</h5>
                <br>
                <h6>price : {{ $product->price }} $</h6>
                <br>
                <h6>Type : {{ $product->type }}</h6>
                <br>
                <h6>Material Type : {{ $product->material }}</h6>
                <br>
                <h6>Warranty : {{ $product->waranty }} Years</h6>

            </div>
            <div class="content">
                {{-- <table>
                    <thead>
                        <tr>
                            <th>price:</th>
                        </tr>
                        <tr>
                            <th>Type:</th>
                        </tr>


                        <tr>
                            <th>Material Type :</th>
                        </tr>
                        <tr>
                            <th>Warranty : {{ $product->waranty }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $product->price }} $</td>

                        </tr>
                        <tr>
                            <td>{{ $product->type }}</td>
                            <td>single bed</td>
                        </tr>


                        <tr>
                            <td>{{ $product->material }}</td>
                            <td>wood</td>
                        </tr>
                        <tr>
                            <td>{{ $product->waranty }} Years</td>
                        </tr>
                    </tbody>
                </table> --}}


            </div>
            <div class="btns">
                <a href="products.html">Back</a>
                {{-- @dd('ssss'); --}}
                <a href="{{ route('addcart',$product->id) }}">Add To Cart</a>

            </div>

        </div>

    </div>










    <!-- end content -->

    @extends('layout.footer')


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i
            class="bi bi-arrow-up"></i></a>


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
