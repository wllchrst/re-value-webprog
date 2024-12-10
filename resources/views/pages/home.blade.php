@extends('layouts.main-page-layout')

@section('title', 'Home')

@section('page-title', 'Home Page')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

// add animation
@section('content')
    <div class="welcome-container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="showcase-left animate__animated animate__fadeInLeft">
                    <img src="/images/Recycle.png" alt="">
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="showcase-right animate__animated animate__fadeInRight">
                    <h1>
                        Turn Waste Into Worth
                    </h1>
                    <p>
                        Empowering a sustainable future by transforming waste into valuable opportunities. Join us in
                        revolutionizing
                        e-commerce by giving recycled items a new purpose and creating a greener tomorrow, one sale at a
                        time.
                    </p>
                </div>
            </div>
        </div>
    </div>
    // add jargon
    <div class="jargon animate__animated animate__fadeInUp">
        <p>Together, we’re crafting a cleaner, brighter future—one transaction at a time. 🌍✨</p>
    </div>
    <div class="container mt-4 animate__animated animate__fadeInUp animate__delay-1s animate__duration-2s">
        <div class="row row-cols-1 row-cols-md-4 g-4 products-container">
            @foreach ($products as $product)
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ $product->image_path ?? 'default-image.jpg' }}" class="card-img-top max-h-10"
                            alt="{{ $product->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">Category: {{ $product->category }}</p>
                            <p class="card-text">Price: ${{ $product->price }}</p>
                            <p class="card-text">Stock: {{ $product->stock }}</p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-primary w-100">Buy Now</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="pagination justify-content-center">
            {{ $products->links() }}
        </div>
    </div>


@endsection
