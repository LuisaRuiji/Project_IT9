<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <title>Register</title>
</head>
<body>
@extends('layouts.auth')

@section('content')
<div class="flex justify-center items-center min-h-screen bg-background">
    <div class="w-full max-w-md p-8 space-y-6 bg-white rounded-2xl shadow-md">
        <h2 class="text-center text-2xl font-bold text-text">Register</h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus
                    class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-accent focus:outline-none">
                @error('name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required
                    class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-accent focus:outline-none">
                @error('email')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password -->
<div class="mt-4">
    <x-input-label for="password" :value="__('Password')" />

    <div class="relative w-full">
        <input id="password" type="password" name="password"
               class="block mt-1 w-full pr-10 border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring focus:border-indigo-300"
               required autocomplete="new-password">

        <!-- Eye Icon Positioned Inside -->
        <span class="absolute inset-y-0 right-3 flex items-center">
            <i id="eyeIcon1" class="fas fa-eye text-gray-600 cursor-pointer" onclick="togglePassword('password', 'eyeIcon1')"></i>
        </span>
    </div>

    <x-input-error :messages="$errors->get('password')" class="mt-2" />
</div>

<!-- Confirm Password -->
<div class="mt-4">
    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

    <div class="relative w-full">
        <input id="password_confirmation" type="password" name="password_confirmation"
               class="block mt-1 w-full pr-10 border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring focus:border-indigo-300"
               required autocomplete="new-password">
               

        <!-- Eye Icon Positioned Inside -->
        <span class="absolute inset-y-0 right-3 flex items-center">
            <i id="eyeIcon2" class="fas fa-eye text-gray-600 cursor-pointer" onclick="togglePassword('password_confirmation', 'eyeIcon2')"></i>
        </span>
    </div>

    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
</div>



            <div class="flex items-center justify-between mt-4">
                <a href="{{ route('login') }}" class="text-sm text-gray-600 hover:text-accent">Already registered?</a>
                <button type="submit"
                    class="bg-primary text-white py-2 px-4 rounded-lg hover:bg-accent transition">
                    Register
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

<script>
function togglePassword(inputId, iconId) {
    let inputField = document.getElementById(inputId);
    let eyeIcon = document.getElementById(iconId);

    if (inputField.type === "password") {
        inputField.type = "text";
        eyeIcon.classList.replace("fa-eye", "fa-eye-slash");
    } else {
        inputField.type = "password";
        eyeIcon.classList.replace("fa-eye-slash", "fa-eye");
    }
}
</script>


</body>
</html>