@extends('layouts.main-page-layout')

@section('title', 'Profile')

@section('page-title', 'Profile Page')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('content')
    <div class="container mt-5">
        <!-- Profile Card -->
        <div class="card shadow-lg mx-auto" style="max-width: 800px; overflow: hidden; border-radius: 15px;">
            <!-- Cover Photo -->
            <div class="position-relative" style="height: 200px; background: linear-gradient(to right,#4A7562,rgb(178, 219, 203));">
                @if ($user->image_path)
                    <img src="{{ asset($user->image_path) }}" alt="Profile Image"
                        class="rounded-circle border border-white shadow position-absolute top-100 start-50 translate-middle"
                        style="width: 120px; height: 120px;">
                @else
                    <img src="{{ asset('default-profile.png') }}" alt="Default Profile Image"
                        class="rounded-circle border border-white shadow position-absolute top-100 start-50 translate-middle"
                        style="width: 120px; height: 120px;">
                @endif
            </div>

            <!-- Profile Info -->
            <div class="card-body text-center mt-5">
                <h4 class="card-title">{{ $user->name }}</h4>
                <p class="text-muted">{{ $user->email }}</p>
                <p class="text-muted">
                    <strong>Points: </strong><span style="color: #4A7562; font-weight: bold;">{{ $user->point }}</span>
                </p>
                <a href="{{ route('user.update', $user->id) }}" class="btn btn-sm" class="btn w-100" style="background-color: #4A7562; color:white" onmouseover="this.style.backgroundColor='#3f5d48';" 
                onmouseout="this.style.backgroundColor='#4A7562';">Edit Profile</a>
            </div>

            <!-- About Section -->
            <div class="card-body border-top">
                <h5 class="card-title">About Me</h5>
                <p class="card-text">{{ $user->description ?? 'No description provided.' }}</p>
            </div>

            <!-- Additional Info Section -->
            <div class="card-footer text-center bg-light">
                <h6>Projects & Activities</h6>
                <p class="text-muted mb-0">Showcase your projects or activities here.</p>
            </div>
        </div>

        <div class="d-flex justify-content-center m-3">
            <div class="mx-3">
                @include('components.products.create-modal')
            </div>
            <div class="mx-3">
                @include('components.items.create-modal', ['item_types' => $item_types])
            </div>
        </div>
    </div>
@endsection
