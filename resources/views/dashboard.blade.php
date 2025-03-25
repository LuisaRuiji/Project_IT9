<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<body>
    <div class="dashboard-container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <h2>Admin Panel</h2>
            <nav>
                <ul>
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Bookings</a></li>
                    <li><a href="#">Rooms</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Customers</a></li>
                    <li><a href="#">Logout</a></li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <header>
                <h1>Welcome, Admin</h1>
            </header>
            <section class="widgets">
                <div class="widget">Total Bookings: 120</div>
                <div class="widget">Available Rooms: 15</div>
                <div class="widget">Total Revenue: $12,000</div>
            </section>
        </main>
    </div>
</body>
</html>