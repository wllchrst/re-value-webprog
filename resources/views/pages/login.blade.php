@extends('layouts.form-page-layout')

@section('title')
    Login Page
@endsection

@section('main-content')
    <h2 class="text-center">Login</h2>
    <form action="{{ route('user.login') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email" required name="email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Password" required name="password">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="rememberMe" name="rememberMe">
            <label class="form-check-label" for="rememberMe">Remember me</label>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Login</button>
    </form>
    <div class="text-center mt-3">
        <a href="{{ route('user.register') }}">Forgot password?</a>
    </div>
    <div class="text-center mt-3">
        <p>Don't have an account? <a href="{{ route("user.register") }}">Register</a></p>
    </div>
@endsection
