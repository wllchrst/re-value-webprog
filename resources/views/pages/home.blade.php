@extends('layouts.main-page-layout')

@section('title', 'Home')

@section('page-title', 'Home Page')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('content')
    <div class="welcome-container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="showcase-left animate__animated animate__fadeInLeft">
                    <img src="/website-content/Recycle.png" alt="">
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
    <div class="jargon animate__animated animate__fadeInUp">
        <p>Together, we’re crafting a cleaner, brighter future—one transaction at a time. 🌍✨</p>
    </div>
    <div class="container mt-5">
        <h2 class="text-center mb-4 animate__animated animate__fadeInDown animate__delay-1s animate__duration-2s" style="color: #2C6B49">Re-Value can do it all</h2>
        <div class="row text-center">
            <div class="col-md-6 mb-4 animate__animated animate__fadeInLeft animate__delay-1s animate__duration-2s">
                <img src="/website-content/Recycle_icon.png" alt="Recycled Products" class="img-fluid mb-3" style="width: 100px;">
                <h5>Recycled Products</h5>
                <p>Buy eco-friendly items made from recycled materials</p>
            </div>
            <div class="col-md-6 mb-4 animate__animated animate__fadeInRight animate__delay-1s animate__duration-2s">
                <img src="/website-content/SaleTag_icon.png" alt="Sell Used Items" class="img-fluid mb-3" style="width: 100px;">
                <h5>Sell Used Items</h5>
                <p>Sell used bottles, cardboard, cans, and earn points</p>
            </div>
            <div class="col-md-12 mb-4 animate__animated animate__fadeInUp animate__delay-1s animate__duration-2s">
                <img src="/website-content/Coin_icon.png" alt="Earn Points for Recycling" class="img-fluid mb-3" style="width: 100px;">
                <h5>Earn Points for Recycling</h5>
                <p>Get points for submitting used items. Redeem for rewards!</p>
            </div>
        </div>
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
                            <a href="{{ route("product.detail", $product->id) }}" class="btn w-100" style="background-color: #4A7562; color:white" onmouseover="this.style.backgroundColor='#3f5d48';" 
                            onmouseout="this.style.backgroundColor='#4A7562';"> Buy Now </a>
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
