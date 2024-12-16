@extends('layouts.main-page-layout')

@section('title', $product->name)

@section('page-title', 'Home Page')

@section('styles')

@endsection

@section('content')
    <div class="container my-5">
        <div class="card">
            <div class="row g-0">
                <!-- Product Image -->
                <div class="col-md-4">
                    <img src="{{ asset($product->image_path) }}" class="img-fluid rounded-start" alt="{{ $product->name }}">
                </div>
                <!-- Product Details -->
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text"><strong>Category:</strong> {{ $product->category }}</p>
                        <p class="card-text"><strong>Price:</strong> ${{ number_format($product->price, 2) }}</p>
                        <p class="card-text"><strong>Stock:</strong> {{ $product->stock }}</p>
                        <p class="card-text"><strong>Created At:</strong> {{ $product->created_at->format('Y-m-d H:i:s') }}
                        </p>
                        <p class="card-text"><strong>Updated At:</strong> {{ $product->updated_at->format('Y-m-d H:i:s') }}
                        </p>
                        <p class="card-text"><strong>Uploaded by User ID:</strong> {{ $product->user_id }}</p>
                        <a href="{{ route('product.buy', $product->id) }}" class="btn mt-3"style="background-color: #4A7562; color:white" onmouseover="this.style.backgroundColor='#3f5d48';" 
                        onmouseout="this.style.backgroundColor='#4A7562';">Buy</a>
                        <a href="{{ url()->previous() }}" class="btn btn-outline mt-3"style="border: 1.85px solid #4A7562; color: #4A7562; background-color: transparent;" 
   onmouseover="this.style.backgroundColor='#4A7562'; this.style.color='white';" 
   onmouseout="this.style.backgroundColor='transparent'; this.style.color='green';">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
