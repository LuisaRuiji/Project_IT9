<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Booking - Welcome</title>
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
</head>
<body>

    <header class="navbar">
        <h1 class="logo">Hotel Booking</h1>
        <nav>
            <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
            <a href="{{ route('register') }}" class="btn btn-secondary">Register</a>
        </nav>
    </header>

    <section class="hero">
        <div class="hero-content">
            <h2>Welcome to Your Perfect Stay</h2>
            <p>Book your next stay with comfort and convenience.</p>
            <a href="{{ route('register') }}" class="btn btn-primary">Get Started</a>
        </div>
    </section>

    <footer class="footer">
        <p>&copy; 2025 Hotel Booking. All Rights Reserved.</p>
    </footer>

</body>
</html>
