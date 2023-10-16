@extends('layout.master')
@section('title', 'checkout')
@section('content')

    <div class="hero-wrap hero-bread" style="background-image: url('../mas/img/pexels-anna-tarazevich-7299928.jpg');">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">

                    <h1 class="mb-0 bread">Checkout</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 ftco-animate">
                    <form style="width:100%" action="{{ route('stripe') }}" method="post">
                        @csrf @method('post')
                        <h3 class="mb-4 billing-heading">Billing Details</h3>
                        <div class="row align-items-end">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="firstname">Name</label>
                                    <input name="name" type="text" value="{{ Auth::user()->name }}"
                                        class="form-control" placeholder="">
                                    <span style="color:red">
                                        @error('name')
                                            {{ $message }}
                                        @enderror
                                    </span><br>
                                </div>
                            </div>
                            <div class="w-100"></div>

                            <div class="w-100"></div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="streetaddress">Street Address</label>
                                    <input
                                        @if (isset(Auth::user()->address)) value="{{ Auth::user()->address->address }}" @endif
                                        type="text" class="form-control" placeholder="House number and street name"
                                        name="address">
                                    <span style="color:red">
                                        @error('address')
                                            {{ $message }}
                                        @enderror
                                    </span><br>
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="towncity">Town / City</label>
                                    <input name="city" type="text" class="form-control" placeholder="">
                                    <span style="color:red">
                                        @error('city')
                                            {{ $message }}
                                        @enderror
                                    </span><br>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input name="phone" type="number" class="form-control" />
                                    <span style="color:red">
                                        @error('phone')
                                            {{ $message }}
                                        @enderror
                                    </span><br>
                                </div>
                            </div>


                            <button class="btn btn-primary py-3 px-4" type="submit">place your order</button>
                    </form>
                </div>

            </div>
            <div class="col-xl-5">
                <div class="row mt-5 pt-3">
                    <div class="col-md-12 d-flex mb-5">
                        <div class="cart-detail cart-total p-3 p-md-4">
                            <h3 class="billing-heading mb-4">Cart Total</h3>
                            <p class="d-flex">
                                <span>Subtotal :</span>
                                <span>JOD 600</span>
                            </p>
                            <p class="d-flex">
                                <span>Delivery :</span>
                                <span>JOD 30</span>
                            </p>
                            <p class="d-flex">
                                <span>Discount :</span>
                                <span>10%</span>
                            </p>
                            <hr>
                            <p class="d-flex total-price">
                                <span>Total :</span>
                                <span>JOD 570</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="cart-detail p-3 p-md-4">
                            <h3 class="billing-heading mb-4">Payment Method</h3>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="radio">
                                        <label><input type="radio" name="optradio" class="mr-2"> Direct Bank
                                            Tranfer</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="radio">
                                        <label><input type="radio" name="optradio" class="mr-2">Cash</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="radio">
                                        <label><input type="radio" name="optradio" class="mr-2"> Paypal</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="checkbox">
                                        <label><input type="checkbox" value="" class="mr-2"> I have read and
                                            accept
                                            the terms and conditions</label>
                                    </div>
                                </div>
                            </div>
                            <p>



                            </p>
                        </div>
                    </div>
                </div>
            </div> <!-- .col-md-8 -->
        </div>
        </div>
    </section> <!-- .section -->

    <section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
        <div class="container py-4">
            <div class="row d-flex justify-content-center py-5">
                <div class="col-md-6">
                    <h2 style="font-size: 22px;" class="mb-0">Subcribe to our Newsletter</h2>
                    <span>Get e-mail updates about our latest shops and special offers</span>
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <form action="#" class="subscribe-form">
                        <div class="form-group d-flex">
                            <input type="text" class="form-control" placeholder="Enter email address">
                            <input type="submit" value="Subscribe" class="submit px-3">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
