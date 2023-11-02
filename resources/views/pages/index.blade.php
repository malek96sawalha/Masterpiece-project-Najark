

@extends('layout.master')
@section('title','Home')
@section('content')
   <!-- Carousel Start -->
   <div class="container-fluid p-0 pb-5">
    <div class="owl-carousel header-carousel position-relative">
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="../img/carousel-1.jpg" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(53, 53, 53, .7);">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-8 text-center">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Welcome To Najark</h5>
                            <h1 class="display-3 text-white animated slideInDown mb-4">Best Carpenter & Craftsman Services</h1>
                            <p class="fs-5 fw-medium text-white mb-4 pb-2">Crafting dreams in timber, carpenters shape the world's tangible art.</p>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                            <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Free Quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="../img/carousel-2.jpg" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(53, 53, 53, .7);">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-8 text-center">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Welcome To Najark</h5>
                            <h1 class="display-3 text-white animated slideInDown mb-4">Best Carpenter & Craftsman Services</h1>
                            <p class="fs-5 fw-medium text-white mb-4 pb-2">Crafting dreams in timber, carpenters shape the world's tangible art.</p>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                            <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Free Quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="../img/carousel-3.jpg" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(53, 53, 53, .7);">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-8 text-center">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Welcome To Najark</h5>
                            <h1 class="display-3 text-white animated slideInDown mb-4">Best Carpenter & Craftsman Services</h1>
                            <p class="fs-5 fw-medium text-white mb-4 pb-2">Crafting dreams in timber, carpenters shape the world's tangible art.</p>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                            <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Free Quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->

<!-- categoury start -->
<div class="section-title text-center">
    <h1 class="display-5 mb-5">Categories</h1>
</div>
<div class="container-xxl py-5">
    <div class="container">
<div class="row g-4 portfolio-container">
    @foreach ($categories as $category)
    <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
        <div class="rounded overflow-hidden">
            <div class="position-relative overflow-hidden">
                <img class="img-fluid w-100" src="{{$category->img}}" alt="" id="categoryImage">
                {{-- <img class="img-fluid w-100" src="../img/modern bedroom.png" alt=""> --}}
                <div class="portfolio-overlay">
                    <a class="btn btn-square btn-outline-light mx-1" href="../img/modern bedroom.png" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                    <a class="btn btn-square btn-outline-light mx-1" href="products/{{ $category->id }}"><i class="fa fa-link"></i></a>
                </div>
            </div>
            <div class="border border-5 border-light border-top-0 p-4">
                <p class="text-primary fw-medium mb-2">{{$category->name}}</p>
                <h5 class="lh-base mb-0">{{$category->description}}</a>
            </div>
        </div>
    </div>

    @endforeach

    <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.3s">
        <div class="rounded overflow-hidden">
            <div class="position-relative overflow-hidden">
                <img class="img-fluid w-100" src="../img/Make-Your-Own-Sanctuary-With-These-Amazing-Modern-Wooden-Bed-Design-2.jpg" alt="">
                <div class="portfolio-overlay">
                    <a class="btn btn-square btn-outline-light mx-1" href="../img/Simple Antique Bedroom.png" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                    <a class="btn btn-square btn-outline-light mx-1" href="custtest2.html"><i class="fa fa-link"></i></a>
                </div>
            </div>
            <div class="border border-5 border-light border-top-0 p-4">
                <p class="text-primary fw-medium mb-2">Customize your Bedroom</p>
                <h5 class="lh-base mb-0">Wooden Furniture Manufacturing And Remodeling</a>
            </div>
        </div>
    </div>
   </div>
</div>



<!-- categoury end -->



      <!-- Projects Start -->
      <div class="container-xxl py-5" >
        <div class="container" id="projects">
            <div class="section-title text-center">
                <h1 class="display-5 mb-5">Our Projects</h1>
            </div>
            <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-12 text-center">
                    <ul class="list-inline mb-5" id="portfolio-flters">
                        <li class="mx-2 active" data-filter="*">All</li>
                        <li class="mx-2" data-filter=".first">General Carpentry</li>
                        <li class="mx-2" data-filter=".second">Custom Carpentry</li>
                    </ul>
                </div>
            </div>
            <div class="row g-4 portfolio-container">
                @foreach ($projects as $project)

                <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                    <div class="rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="../img/modern bedroom.png" alt="">
                            <div class="portfolio-overlay">
                                <a class="btn btn-square btn-outline-light mx-1" href="../img/modern bedroom.png" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                        <div class="border border-5 border-light border-top-0 p-4">
                            <p class="text-primary fw-medium mb-2">{{$project->name}}</p>
                            <h5 class="lh-base mb-0">{{$project->shortDescription}}</a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Projects End -->



      <!-- Feature Start -->
      <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container feature px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 ps-lg-0">
                        <div class="section-title text-start">
                            <h1 class="display-5 mb-4">Why Choose Us</h1>
                        </div>
                        <p class="mb-4 pb-2">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo erat amet</p>
                        <div class="row g-4">
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                                        <i class="fa fa-check fa-2x text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="mb-2">Quality</p>
                                        <h5 class="mb-0">Services</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                                        <i class="fa fa-user-check fa-2x text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="mb-2">Creative</p>
                                        <h5 class="mb-0">Designers</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                                        <i class="fa fa-drafting-compass fa-2x text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="mb-2">Free</p>
                                        <h5 class="mb-0">Consultation</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                                        <i class="fa fa-headphones fa-2x text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="mb-2">Customer</p>
                                        <h5 class="mb-0">Support</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="../img/feature.jpg" style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->



@endsection
