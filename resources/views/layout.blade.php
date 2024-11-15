<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Education Website</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>

<body class="bg-gray-100">
    <!-- Navbar -->
    <nav class="bg-blue-700 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="#" class="text-white text-xl font-bold">Education</a>
            <div class="hidden md:flex space-x-4">
                <a href="user.blade.php" class="text-white hover:text-gray-300 font-bold">Home</a>
                <a href="#" class="text-white hover:text-gray-300 font-bold">About</a>
                <a href="#" class="text-white hover:text-gray-300 font-bold">Kelas</a>
                <a href="#" class="text-white hover:text-gray-300 font-bold">Rating</a>
                <a href="#" class="text-white hover:text-gray-300"><i class="fa-solid fa-right-from-bracket" style="font-size:25px;"></i></a>
            </div>
            <button class="block md:hidden text-gray-300 focus:outline-none" id="navbarToggle">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>
        <div class="hidden md:hidden mt-2 space-y-2" id="mobileMenu">
            <a href="#" class="block text-gray-300 hover:text-white">Home</a>
            <a href="#" class="block text-gray-300 hover:text-white">About</a>
            <a href="#" class="block text-gray-300 hover:text-white">Kelas</a>
            <a href="#" class="block text-gray-300 hover:text-white">Rating</a>
        </div>
    </nav>

    @yield('content')

    <!-- Script untuk Toggle Mobile Menu -->
    <script>
        document.getElementById('navbarToggle').addEventListener('click', function () {
            var menu = document.getElementById('mobileMenu');
            menu.classList.toggle('hidden');
        });
    </script>
</body>
</html>
