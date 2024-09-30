@extends('layouts.main-page-layout')

@section('title', 'Profile')

@section('page-title', 'Profile Page')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('content')
    <div class="container mx-auto py-12">
        <div class="max-w-4xl mx-auto bg-white shadow-xl rounded-lg overflow-hidden">

            <!-- Cover Photo -->
            <div class="relative h-64 bg-gradient-to-r from-blue-400 to-indigo-600">
                @if ($user->image_path)
                    <img src="{{ asset($user->image_path) }}" alt="Profile Image"
                        class="absolute bottom-0 left-1/2 transform -translate-x-1/2 translate-y-12 w-32 h-32 rounded-full border-4 border-white shadow-lg">
                @else
                    <img src="{{ asset('default-profile.png') }}" alt="Default Profile"
                        class="absolute bottom-0 left-1/2 transform -translate-x-1/2 translate-y-12 w-32 h-32 rounded-full border-4 border-white shadow-lg">
                @endif
            </div>

            <!-- User Info -->
            <div class="text-center mt-16">
                <h1 class="text-4xl font-bold text-gray-900">{{ $user->name }}</h1>
                <p class="text-gray-600">{{ $user->email }}</p>
                <div class="mt-4">
                    <span class="text-gray-500">Points: </span>
                    <span class="text-xl font-semibold text-indigo-600">{{ $user->point }}</span>
                </div>
            </div>

            <!-- Description -->
            <div class="px-6 py-8">
                <h2 class="text-2xl font-semibold text-gray-800">About Me</h2>
                <p class="mt-4 text-gray-700 leading-relaxed">{{ $user->description ?? 'No description provided.' }}</p>
            </div>

            <!-- Edit Button -->
            <div class="flex justify-center pb-8">
                <a href="{{ route('user.update', $user->id) }}"
                    class="inline-block bg-indigo-500 hover:bg-indigo-600 text-white font-bold py-2 px-6 rounded-lg shadow-lg">
                    Edit Profile
                </a>
            </div>

            <!-- Additional Info Section (Optional) -->
            <div class="border-t px-6 py-8 bg-gray-50">
                <h2 class="text-lg font-semibold text-gray-700">Projects & Activities</h2>
                <p class="text-gray-600 mt-2">Here you can showcase user-specific projects, activities, or other related
                    info.</p>
            </div>

        </div>
    </div>
@endsection
