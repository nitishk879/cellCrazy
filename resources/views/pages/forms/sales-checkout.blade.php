@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-content">
                        <ul class="nav">
                            <li><a href="{{ route("/") }}">Home</a></li>
                            <li>{{ $title ?? '' }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End-->
    <!-- checkout area start -->
    <div class="checkout-area mt-60px mb-40px">
        <div class="container">
            <form method="post" action="{{ route("checkout") }}" class="row">
                @csrf
                <div class="col-lg-7">
                    <div class="billing-info-wrap">
                        <h3>Billing Details</h3>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-20px">
                                    <label for="firstName">First Name</label>
                                    <input type="text" name="first_name" id="firstName" value="{{ old('first_name') ?? '' }}" />
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-20px">
                                    <label for="lastName">Last Name</label>
                                    <input type="text" name="last_name" id="lastName" value="{{ old('last_name') ?? '' }}" />
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-20px">
                                    <label for="emailAddress">Email Address</label>
                                    <input type="email" name="email" id="emailAddress" value="{{ old('email') ?? '' }}" />
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-20px">
                                    <label for="phoneNumber">phone</label>
                                    <input type="text" name="phone" id="phoneNumber" value="{{ old('phone') ?? '' }}" />
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="billing-info mb-20px">
                                    <label for="addressLine1">Street Address</label>
                                    <input class="billing-address" id="addressLine1" placeholder="House number and street name" type="text" name="address_line_1" value="{{ old('address_line_1') ?? '' }}" />
                                    <input placeholder="Apartment, suite, unit etc." type="text" name="address_line_2" value="{{ old('address_line_2') ?? '' }}" />
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="billing-info mb-20px">
                                    <label for="city">Town / City</label>
                                    <input type="text" name="city" id="city" value="{{ old('city') ?? '' }}" />
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-20px">
                                    <label for="county">County(Optional)</label>
                                    <input type="text" name="county" id="county" value="{{ old('county') ?? '' }}" />
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-20px">
                                    <label for="postalCode">Postcode / ZIP</label>
                                    <input type="text" name="postal_code" id="postalCode" value="{{ old('postal_code') ?? '' }}" />
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="billing-select mb-20px">
                                    <label for="country">Country</label>
                                    <select id="country" name="country">
                                        <option>Select a country</option>
                                        <option>Azerbaijan</option>
                                        <option>Bahamas</option>
                                        <option>Bahrain</option>
                                        <option>Bangladesh</option>
                                        <option>Barbados</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-20px">
                                    <label for="iMEI">Your Device's IMEI number (optional)</label>
                                    <input type="text" name="imei" id="iMEI" value="{{ old('imei') ?? '' }}" />
                                </div>
                            </div>
                        </div>
                        <div class="checkout-account mb-30px">
                            <input class="checkout-toggle2" checked type="checkbox" id="agree" name="agree" value="{{ old('agree') ?? '' }}" />
                            <label for="agree">I have read and agree to the website <a href="{{ route("terms-conditions") }}">terms and conditions</a> * </label>
                        </div>
                        <div class="additional-info-wrap">
                            <h4>Additional information</h4>
                            <div class="additional-info">
                                <label for="message">Order notes</label>
                                <textarea placeholder="Notes about your order, e.g. special notes for delivery. " id="message" name="message">{{ old('message') ?? '' }}</textarea>
                            </div>
                        </div>
                        <h3>Bank Account Details!</h3>
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="billing-info mb-20px">
                                    <label for="accountHolderName">Account Holder's Name (optional)</label>
                                    <input type="text" id="accountHolderName" name="account_holder_name" value="{{ old('account_holder_name') ?? '' }}" />
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="billing-info mb-20px">
                                    <label for="accountNumber">Account Number (optional)</label>
                                    <input type="text" id="accountNumber" name="account_number" value="{{ old('account_number') ?? '' }}" />
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div class="billing-info mb-20px">
                                    <label for="accountShortCode">Account Shortcode (optional)</label>
                                    <input type="text" id="accountShortCode" name="account_short_code" value="{{ old('account_short_code') ?? '' }}" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 mt-md-30px mt-lm-30px ">
                    <div class="your-order-area">
                        <h3>Your order</h3>
                        <div class="your-order-wrap gray-bg-4">
                            <div class="your-order-product-info">
                                <div class="your-order-top">
                                    <ul>
                                        <li>Product</li>
                                        <li>Total</li>
                                    </ul>
                                </div>
                                <div class="your-order-middle">
                                    <ul>
                                        @foreach($cart->items as $item)
                                            <li>
                                                <span class="order-middle-left">
                                                    {{ $item['item']['name'] ?? '' }}
                                                    @if($item['item']['model']['memory']!==0)<br><span class="badge badge-dark">{{ $item['item']['model']['memory'] ?? '' }}</span>@endif
                                                    @if($item['item']['model']['condition']!==0)<br><span class="badge badge-dark">{{ $item['item']['model']['condition'] ?? '' }}</span>@endif
                                                    @if($item['item']['color']!==0)<br><span class="badge badge-dark">{{ $item['item']['color'] ?? '' }}</span>@endif
                                                </span>
                                                <span class="order-price">{{ $item['item']['price'] ?? '' }} </span></li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="your-order-bottom">
                                    <ul>
                                        <li class="your-order-shipping">Shipping</li>
                                        <li>Free shipping</li>
                                    </ul>
                                </div>
                                <div class="your-order-total">
                                    <ul>
                                        <li class="order-total">Total</li>
                                        <li>{{ config("app.default_currency") }} {{ $cart->totalPrice ?? '' }}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="payment-method">
                                <div class="payment-accordion element-mrg">
                                    <div class="panel-group" id="accordion">
                                        <div class="panel payment-accordion">
                                            <div class="panel-heading" id="method-one">
                                                <h4 class="panel-title">
                                                    <input id="paymentMethod1" type="radio" name="payment_method" value="mail-in-service">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#method1">
                                                        Mail-In Service
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="method1" class="panel-collapse collapse show">
                                                <div class="panel-body">
                                                    <p>Once you confirm your sale, we will send you a fully insured pre-paid box to send us your device in. You will receive your money directly into your bank account on the same day we receive and process your device.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel payment-accordion">
                                            <div class="panel-heading" id="method-two">
                                                <h4 class="panel-title">
                                                    <input id="paymentMethod2" type="radio" name="payment_method" value="received-payment-in-store">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#method2">
                                                        Receive Payment In-Store
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="method2" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p>Please only choose this option if you plan on coming to our office to sell your device in-person.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="Place-order mt-25">
                            <button type="submit" class="btn btn-block btn-outline-secondary">Place Order</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- checkout area end -->
@endsection

@section('stylesheets')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
@endsection

@section('scripts')@endsection

@section('subscriber-section')@endsection
