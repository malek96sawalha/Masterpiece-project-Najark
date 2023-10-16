@extends('layout.master')
@section('title', 'Cart')
@section('content')

<section class="ftco-section ftco-cart">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ftco-animate mt-4">
                <div class="hero-wrap hero-bread"
                    style="background-image: url('../mas/img/pexels-tima-miroshnichenko-6508962.jpg')">
                    <div class="container">
                        <div class="row no-gutters slider-text align-items-center justify-content-center">
                            <div class="col-md-9 ftco-animate text-center">
                                <h1 class="mb-0 bread">My Cart</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cart-list">
                    <table class="table" style="width:100%">
                        <thead class="thead-primary">
                            <tr class="text-center">
                                <th>Product name</th>
                                <th>Product description</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cart as $cartItem)
                                <tr class="text-center">
                                    <td class="product-name" style="min-width: 250px">
                                        <h3>{{ isset($cartItem->product) ? $cartItem->product->name : $cartItem['productname'] }}</h3>
                                    </td>
                                    <td class="product-name">
                                        <p>{{ isset($cartItem->product) ? $cartItem->product->cartDescription : $cartItem['shortdes'] }}</p>
                                    </td>
                                    <td class="price">${{ isset($cartItem->product) ? $cartItem->product->price : $cartItem['price'] }}</td>
                                    <td class="quantity">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <a class="btn btn-outline-secondary"
                                                    href="{{ route('deletecart', isset($cartItem->product) ? $cartItem->product->id : $cartItem['id']) }}">-</a>
                                            </div>
                                            <input type="number" name="quantity"
                                                class="quantity form-control input-number"
                                                value="{{ isset($cartItem->quantity) ? $cartItem->quantity : $cartItem['quantity'] }}"
                                                min="1" max="100">
                                            <div class="input-group-append">
                                                <a class="btn btn-outline-secondary"
                                                    href="{{ route('addcart', ['id' => isset($cartItem->product) ? $cartItem->product->id : $cartItem['id']]) }}">+</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="total">${{ isset($cartItem->product) ? $cartItem->product->price * $cartItem->quantity : $cartItem['price'] * $cartItem['quantity'] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-3 mt-5 cart-wrap ftco-animate" style="margin-left: 20px">
                <div class="cart-total mb-3">
                    <h3>Cart Totals</h3>
                    <p class="d-flex">
                        <span>Subtotal :</span>
                        <span>$ {{ $total }}</span>
                    </p>
                    <p class="d-flex">
                        <span>Delivery :</span>
                        <span>${{ $delivery }}</span>
                    </p>
                    <hr>
                    <p class="d-flex total-price">
                        <span>Total :</span>
                        <span>${{ $total + $delivery }}</span>
                    </p>
                </div>
                <p><a href="{{ route('checkout')}}" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
            </div>
        </div>
    </div>
</section>

@endsection
