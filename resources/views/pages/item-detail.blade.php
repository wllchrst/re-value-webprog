@extends('layouts.main-page-layout')

@section('title', $item->name)

@section('page-title', 'Home Page')

@section('styles')

@endsection

@section('content')
    <div class="container my-5">
        <div class="card">
            <div class="row g-0">
                <!-- Item Image -->
                <div class="col-md-4">
                    <img src="{{ asset($item->image_path) }}" class="img-fluid rounded-start" alt="{{ $item->name }}">
                </div>
                <!-- Item Details -->
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->name }}</h5>
                        <p class="card-text"><strong>Description:</strong> {{ $item->description }}</p>
                        <p class="card-text"><strong>Weight:</strong> {{ $item->weight }} kg</p>
                        <p class="card-text"><strong>Sold:</strong> {{ $item->sold ? 'Yes' : 'No' }}</p>
                        <p class="card-text"><strong>Item Type ID:</strong> {{ $item->item_type->name }}</p>
                        <p class="card-text"><strong>Created At:</strong> {{ $item->created_at->format('Y-m-d H:i:s') }}</p>
                        <p class="card-text"><strong>Updated At:</strong> {{ $item->updated_at->format('Y-m-d H:i:s') }}</p>
                        <p class="card-text"><strong>Uploaded by User ID:</strong> {{ $item->user->name }}</p>
                        <a href="{{ route('item.buy', $item->id) }}" class="btn btn-success mt-3">Buy</a>
                        <a href="{{ url()->previous() }}" class="btn btn-primary mt-3">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
