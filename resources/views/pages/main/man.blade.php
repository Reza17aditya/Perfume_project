@extends('layout.main')
@section('container')
    <section id="man-line-up" class="man-line-up">
        <div class="man-line-up-box">
            <div class="frame">
                <a href="/man">
                    <img src="{{ asset('images/products/man/man-1.png') }}" alt="Image 1">
                    <p class="caption">Caption 1</p>
                </a>
            </div>
        </div>
        <div class="man-line-up-box">
            <div class="frame">
                <a href="/main">
                    <img src="{{ asset('images/products/man/man-2.png') }}" alt="Image 2">
                    <p class="caption">Caption 2</p>
                </a>
            </div>
        </div>
        <div class="man-line-up-box">
            <div class="frame">
                <a href="/man">
                    <img src="{{ asset('images/products/man/man-3.png') }}" alt="Image 3">
                    <p class="caption">Caption 3</p>
                </a>
            </div>
        </div>
    </section>
@endsection