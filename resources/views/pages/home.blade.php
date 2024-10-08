@extends('layouts.main-page-layout')

@section('title', 'Home')

@section('page-title', 'Home Page')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('content')
    <div class="container mt-4">
        <div class="row row-cols-1 row-cols-md-3 g-4 products-container">
            @foreach ($products as $product)
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ $product->image_path ?? 'default-image.jpg' }}" class="card-img-top"
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
    </div>
@endsection
