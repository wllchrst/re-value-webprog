@extends('layouts.main-page-layout')

@section('title', 'Home')

@section('page-title', 'Home Page')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <style>
        .pagination .page-item.active .page-link {
    background-color: #4A7562;
    border-color: #4A7562;
    color: white;
}

/* Gaya untuk pagination hover */
.pagination .page-item:hover .page-link {
    background-color: #3f5d48;
    color: #ccc;
    border-color: #3f5d48;
}

.pagination .page-link {
    color: #4A7562;
    border: 1px solid #4A7562;
}

.pagination .page-item.disabled .page-link {
    background-color: #f1f1f1;
    color: #ccc;
    border-color: #ccc;
}
    </style>
@endsection

@section('content')



<div class="container mt-4">
    <div class="row row-cols-1 row-cols-md-5 g-4 products-container">
        @foreach ($products as $product)
            <div class="col animate__animated animate__fadeInUp animate__duration-15s">
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



