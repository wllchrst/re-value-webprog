@extends('layouts.form-page-layout')

@section('title')
    Register Page
@endsection

@section('main-content')
<div class="card shadow-lg w-50 mx-auto p-4 rounded-lg">
    <h2 class="text-center mt-3 mb-4">Register</h2>
    <div class="d-flex justify-content-center">
        <form action="{{ route('user.register') }}" method="POST" enctype="multipart/form-data" class="w-100">
            @csrf
            <div class="form-group">
                <label for="email" class="font-weight-bold">Email address</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email" required name="email">
            </div>
            <div class="form-group">
                <label for="name" class="font-weight-bold">Full Name</label>
                <input type="text" class="form-control" id="name" placeholder="Enter your Name" required name="name">
            </div>
            <div class="form-group">
                <label for="password" class="font-weight-bold">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter your password" required name="password">
            </div>

            <div class="form-group">
                <label for="description" class="font-weight-bold">Description</label>
                <textarea class="form-control" id="description" rows="3" placeholder="Enter a description" required name="description"></textarea>
            </div>

            <div class="form-group">
                <label for="image_path" class="font-weight-bold">Upload Image</label>
                <input type="file" class="form-control-file" id="image_path" name="image_path" required>
            </div>

            <button type="submit" class="btn btn-block mb-3"style="background-color: #4A7562; color:white" onmouseover="this.style.backgroundColor='#3f5d48';" 
            onmouseout="this.style.backgroundColor='#4A7562';">Register</button>
        </form>
    </div>

    <div class="text-center mt-3">
        <p>Already have an account? <a href="/" style="color: #4A7562; font-weight: bold">Login</a></p>
    </div>
</div>
@endsection
