@extends('layout.main')
@section('container')
<section id="man-line-up" class="man-line-up">
        <div class="man-line-up-box">
            <div class="frame">
                <a href="/woman_1">
                    <img src="{{ asset('images/products/woman/woman-1.png') }}" alt="Crimson Desire">
                    <p class="caption">Crimson Desire</p>
                </a>
            </div>
        </div>
        <div class="man-line-up-box">
            <div class="frame">
                <a href="/woman/2">
                    <img src="{{ asset('images/products/woman/woman-2.png') }}" alt="Emerald Glow">
                    <p class="caption">Emerald Glow</p>
                </a>
            </div>
        </div>
        <div class="man-line-up-box">
            <div class="frame">
                <a href="/woman/3">
                    <img src="{{ asset('images/products/woman/woman-3.png') }}" alt="Rose Blush">
                    <p class="caption">Rose Blush</p>
                </a>
            </div>
        </div>
    </section>
@endsection