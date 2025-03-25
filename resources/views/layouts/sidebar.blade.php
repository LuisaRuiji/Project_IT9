<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/style.css') }}">

    <title>Document</title>
</head>
<body>
    
<div x-data="{ sidebarOpen: true }" 
    :class="sidebarOpen ? 'w-60' : 'w-20'" 
    class="transition-all duration-300 bg-gray-800 text-gray-200 flex flex-col h-screen">

    <!-- Sidebar Header -->
    <div class="flex items-center justify-between p-4 border-b border-gray-700">
        <span x-show="sidebarOpen" class="text-lg font-bold">Hotel</span>

        <!-- Toggle Button -->
        <button @click="sidebarOpen = !sidebarOpen" class="text-gray-400 hover:text-white">
            <!-- Open Icon -->
            <svg x-show="!sidebarOpen" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16" />
            </svg>

            <!-- Close Icon -->
            <svg x-show="sidebarOpen" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <!-- Navigation links -->
    <nav class="flex-1 px-2 py-4 space-y-2 flex flex-col">
        <a href="{{ route('dashboard') }}" class="flex items-center space-x-2 px-4 py-2 rounded hover:bg-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 12l2-2m0 0l7-7 7 7m-9 14v-5a2 2 0 012-2h4a2 2 0 012 2v5m-6 0h6" />
            </svg>
            <span x-show="sidebarOpen">Dashboard</span>
        </a>

        <a href="#" class="flex items-center space-x-2 px-4 py-2 rounded hover:bg-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 17v-6a2 2 0 012-2h2a2 2 0 012 2v6m-4 0v-6" />
            </svg>
            <span x-show="sidebarOpen">Bookings</span>
        </a>

        <a href="#" class="flex items-center space-x-2 px-4 py-2 rounded hover:bg-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <span x-show="sidebarOpen">Rooms</span>
        </a>

        <a href="#" class="flex items-center space-x-2 px-4 py-2 rounded hover:bg-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9.75 17L15 12.75 9.75 8.5v8.5z" />
            </svg>
            <span x-show="sidebarOpen">Services</span>
        </a>

        <a href="#" class="flex items-center space-x-2 px-4 py-2 rounded hover:bg-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M5 13l4 4L19 7" />
            </svg>
            <span x-show="sidebarOpen">Customers</span>
        </a>
    </nav>
</div>

</body>
</html>