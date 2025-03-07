@extends('layout.main')
@section('container')
    <section class="video-section">
        <video autoplay muted loop  class="background-video">
            <source src="images/video/video-bg.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        
        <div class="video-overlay"></div>
        <div class="video-content text-center text-white">
            <h1>Welcome to Our Website</h1>
            <p>Experience the best with our services</p>
        </div>
    </section>

    <section id="unique-featured-products" class="unique-product-section">
        <div class="container">
            <h2 class="unique-section-title text-center">Category</h2>
            <div class="row justify-content-center">
                <div class="col-md-5 mb-4">
                    <div id="unique-product-frame-1" class="unique-product-frame">
                        <a href="/man" class="unique-image-link">
                            <img src="{{ asset('images/other/model-m.png') }}" alt="Product 1" class="unique-product-image" id="unique-product-image-1">
                        </a>
                    </div>
                </div>

                <div class="col-md-5 mb-4">
                    <div id="unique-product-frame-2" class="unique-product-frame">
                        <a href="/woman" class="unique-image-link">
                            <img src="images/other/model-w.png" alt="Product 2" class="unique-product-image" id="unique-product-image-2">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
     
    
    <section class="product-section">
        <div class="container">
            <h2 class="text-center mb-4">Our Products</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="product-frame">
                        <a href="/man">
                            <img src="{{ asset('images/products/man/man-2.png') }}" alt="Azure Drift" class="product-img">
                        </a>
                        <p class="product-caption">Azure Drift</p>
                        <p class="product-price">Rp100.000</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-frame">
                        <a href="/woman">
                            <img src="{{ asset('images/products/woman/woman-1.png') }}" alt="Crimson Desire" class="product-img">
                        </a>
                        <p class="product-caption">Crimson Desire</p>
                        <p class="product-price">Rp100.000</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-frame">
                        <a href="/man">
                            <img src="{{ asset('images/products/man/man-3.png') }}" alt="Oceanic Depths" class="product-img">
                        </a>
                        <p class="product-caption">Oceanic Depths</p>
                        <p class="product-price">Rp100.000</p>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="product-frame">
                        <a href="woman">
                            <img src="{{ asset('images/products/woman/woman-2.png') }}" alt="Emerald Glow " class="product-img">
                        </a>
                        <p class="product-caption">Emerald Glow</p>
                        <p class="product-price">Rp100.000</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-frame">
                        <a href="/woman">
                            <img src="{{ asset('images/products/woman/woman-3.png') }}" alt="Rose Blush" class="product-img">
                        </a>
                        <p class="product-caption">Rose Blush</p>
                        <p class="product-price">Rp100.000</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="product-frame">
                        <a href="/man">
                            <img src="{{ asset('images/products/man/man-1.png') }}" alt="Midnight Edge" class="product-img">
                        </a>
                        <p class="product-caption">Midnight Edge</p>
                        <p class="product-price">Rp100.000</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection