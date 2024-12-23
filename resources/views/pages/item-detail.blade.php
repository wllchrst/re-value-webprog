@extends('layouts.main-page-layout')

@section('title', $item->name)

@section('page-title', 'Item Detail Page')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/itemDetail.css') }}">
    <style>
    .image-container {
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }

    .item-image {
        width: 100%;
        height: auto;
        max-height: 426px;
        object-fit: cover;
        border-radius: 10px;
    }

    .card {
        height: auto;
        display: flex;
        flex-wrap: wrap;
    }

    .card-body {
        padding: 20px;
    }

    .btn {
        margin-top: 10px;
    }

    .row.g-0 {
        margin: 0;
    }
</style>

@endsection

@section('content')
<div class="container my-5">
    <div class="card border-0 shadow">
        <div class="row g-0 align-items-center">
            <div class="col-md-5 image-container">
                <img src="{{ $item->image_path }}" class="item-image" alt="{{ $item->name }}">
            </div>

            <div class="col-md-7">
                <div class="card-body" style="margin: 0 40px">
                    <h1 class="card-title">{{ $item->name }}</h1>
                    <p class="card-text mt-3"><strong>Description:</strong> {{ $item->description }}</p>
                    <p class="card-text"><strong>Weight:</strong> {{ $item->weight }} gram</p>
                    <p class="card-text"><strong>Sold:</strong> {{ $item->sold ? 'Yes' : 'No' }}</p>
                    <p class="card-text"><strong>Item Type ID:</strong> {{ $item->item_type->name }}</p>
                    <p class="card-text"><strong>Created At:</strong> {{ $item->created_at->format('Y-m-d H:i:s') }}</p>
                    <p class="card-text"><strong>Updated At:</strong> {{ $item->updated_at->format('Y-m-d H:i:s') }}</p>
                    <p class="card-text"><strong>Uploaded by User ID:</strong> {{ $item->user->name }}</p>

                    <a href="{{ route('item.buy', $item->id) }}" class="btn w-25"
                        style="background-color: #4A7562; color:white"
                        onmouseover="this.style.backgroundColor='#3f5d48';"
                        onmouseout="this.style.backgroundColor='#4A7562';">Buy</a>
                    <a href="{{ url()->previous() }}" class="btn btn-outline mx-2 w-25"
                        style="border: 1.85px solid #4A7562; color: #4A7562; background-color: transparent;"
                        onmouseover="this.style.backgroundColor='#4A7562'; this.style.color='white';"
                        onmouseout="this.style.backgroundColor='transparent'; this.style.color='green';">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
