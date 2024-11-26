@extends('layouts.form-page-layout')

@section('title')
    Login Page
@endsection

@section('main-content')
<div class="card shadow-lg w-50 mx-auto mt-5 p-4 rounded-lg">
    <h2 class="text-center mt-3 mb-4">Login</h2>
    <div class="d-flex justify-content-center">
        <form action="{{ route('user.login') }}" method="POST" class="w-100">
            @csrf
            <div class="form-group">
                <label for="email" class="font-weight-bold">Email address</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email" required name="email">
            </div>
            <div class="form-group">
                <label for="password" class="font-weight-bold">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password" required name="password">
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="rememberMe" name="rememberMe">
                <label class="form-check-label" for="rememberMe">Remember me</label>
            </div>
            <button type="submit" class="btn btn-primary btn-block mb-3">Login</button>

            <div class="d-flex justify-content-end">
                <a href="{{ route('user.register') }}" class="text-decoration-none text-primary" style="font-size: 0.8rem;">Forgot password?</a>
            </div>
        </form>
    </div>
    <div class="text-center mt-3">
        <p>Don't have an account? <a href="{{ route('user.register') }}">Register</a></p>
    </div>
</div>
@endsection
