@extends('layout.main')
@section('container')   
    <section id="about-section" class="about-us container my-5">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('') }}" class="img-fluid rounded" alt="About Us">
            </div>
            <div class="col-md-6">
                <h2>Our Story</h2>
                <p>At D&R Perfume, our journey began with a passion for creating perfumes that tell a story. We sought to craft fragrances that evoke emotions, transport you to different places, and leave lasting impressions. Inspired by the art of scent and the belief that perfume is an extension of one’s identity, we embarked on a mission to blend timeless elegance with contemporary allure. Each fragrance is thoughtfully composed, capturing the essence of beauty, elegance, and individuality. From our humble beginnings, D&R has grown into a brand synonymous with luxurious, quality perfumes that make every moment unforgettable.</p>
                <h2>Our Mission</h2>
                <p>Our mission is to create luxurious, high-quality perfumes that resonate with our customers' personal style. We are committed to using the finest ingredients and blending them with craftsmanship, passion, and creativity. We aim to provide every individual with a fragrance that not only enhances their presence but also evokes their unique essence, making each moment special and unforgettable.</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-6 order-md-2">
                <img src="{{ asset('') }}" class="img-fluid rounded" alt="Our Vision">
            </div>
            <div class="col-md-6 order-md-1">
                <h2>Our Vision</h2>
                <p>WTo become a leading fragrance brand that inspires confidence and enhances the personal expression of individuals worldwide, through innovative and timeless scents that evoke emotions and create memorable experiences.</p>
            </div>
        </div>
    </section>
@endsection