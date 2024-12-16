@extends('layouts.main-page-layout')

@section('title', $product->name)

@section('page-title', 'Product Detail Page')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/productDetail.css') }}">
@endsection

@section('content')

    <div class="container my-5">
        <div class="card border-0 shadow">
            <div class="row g-0">
                <div class="col-md-5 image-container">
                    <img src="{{ asset($product->image_path) }}" class="product-image" alt="{{ $product->name }}">
                </div>

                <div class="col-md-7">
                    <div class="card-body" style="margin: 0 40px">
                        <h1 class="card-title">{{ $product->name }}</h1>
                        <p class="product-price">
                            <span class="fw-bold" style="color: #2C6B49">${{ number_format($product->price, 2) }}</span>
                        </p>
                        <p class="card-text"><strong>Category:</strong> {{ $product->category }}</p>
                        <p class="card-text"><strong>Stock:</strong> {{ $product->stock }}</p>
                        <p class="card-text"><strong>Created At:</strong> {{ $product->created_at->format('Y-m-d H:i:s') }}
                        </p>
                        <p class="card-text"><strong>Updated At:</strong> {{ $product->updated_at->format('Y-m-d H:i:s') }}
                        </p>
                        <p class="card-text"><strong>Uploaded by User ID:</strong> {{ $product->user_id }}</p>

                        <a href="{{ route('product.buy', $product->id) }}"
                            class="btn w-25"style="background-color: #4A7562; color:white"
                            onmouseover="this.style.backgroundColor='#3f5d48';"
                            onmouseout="this.style.backgroundColor='#4A7562';">Buy</a>
                            
                        <a href="{{ url()->previous() }}"
                            class="btn btn-outline mx-2 w-25"style="border: 1.85px solid #4A7562; color: #4A7562; background-color: transparent;"
                            onmouseover="this.style.backgroundColor='#4A7562'; this.style.color='white';"
                            onmouseout="this.style.backgroundColor='transparent'; this.style.color='green';">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
