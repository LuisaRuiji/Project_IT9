<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <title>Log In</title>
</head>
<body>
@extends('layouts.auth')

@section('content')
<div class="login-box">
    <h2>Login</h2>

    <!-- Login Form -->
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Input -->
        <div class="input-container">
            <i class="fas fa-user"></i>
            <input type="email" name="email" placeholder="Email" required>
        </div>

        <!-- Password Input -->
        <div class="input-container">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Password" required>
        </div>

        <!-- Forgot Password -->
        <a href="#" style="color:#A67B5B; font-size: 12px;">Forgot password?</a>

        <!-- Login Button -->
        <button type="submit">LOGIN</button>
    </form>

    <!-- Social Media Logins -->
    <div class="social-icons">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-google"></i></a>
    </div>

    <!-- Sign Up Link -->
    <p style="margin-top: 15px; font-size: 14px;">Or Sign Up 
        <a href="{{ route('register') }}" style="color:#A67B5B; font-weight: bold;">SIGN UP</a>
    </p>
</div>
@endsection




</body>
</html>