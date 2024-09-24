@extends('layouts.form-page-layout')

@section('title')
    Register Page
@endsection

@section('main-content')
    <h2 class="text-center">Register</h2>
    <form action="{{ route('user.register') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email" required name="email">
        </div>
        <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter your Name" required name="name">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Enter your password" required
                name="password">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" rows="3" placeholder="Enter a description" required
                name="description"></textarea>
        </div>

        <div class="form-group">
            <label for="image_path">Upload Image</label>
            <input type="file" class="form-control-file" id="image_path" name="image_path" required>
        </div>

        <button type="submit" class="btn btn-primary btn-block">Register</button>
    </form>

    <div class="text-center mt-3">
        <a href="#">Forgot password?</a>
    </div>
    <div class="text-center mt-3">
        <p>Already have an account? <a href="/">Login</a></p>
    </div>
@endsection
