<!-- resources/views/daftar-mata-pelajaran.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mata Pelajaran</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body class="bg-white">
    <!-- Navbar -->
    <nav class="bg-blue-700 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="#" class="text-white text-xl font-bold">Education</a>
            <div class="hidden md:flex space-x-4">
                <a href="homepage.html" class="text-white hover:text-white font-bold">Home</a>
                <a href="#" class="text-white hover:text-white font-bold">About</a>
                <a href="#" class="text-white hover:text-white font-bold">Kelas</a>
                <a href="#" class="text-white hover:text-white font-bold">Rating</a>
                <a href="#" class="text-white hover:text-white">
                    <i class="fas fa-right-from-bracket" style="font-size: 25px; color: white;"></i>
                </a>
            </div>
            <button class="block md:hidden text-gray-300 focus:outline-none" id="navbarToggle">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>
        <!-- Mobile Menu -->
        <div class="md:hidden mt-2 space-y-2 hidden" id="mobileMenu">
            <a href="homepage.html" class="block text-gray-300 hover:text-white">Home</a>
            <a href="#" class="block text-gray-300 hover:text-white">About</a>
            <a href="#" class="block text-gray-300 hover:text-white">Kelas</a>
            <a href="#" class="block text-gray-300 hover:text-white">Rating</a>
        </div>
    </nav>

    <!-- Section Background Image -->
    <div class="relative flex flex-col justify-center items-center h-64 w-full md:h-[500px]">
        <img src="gambar/sanrio.jpg" alt="Background Image" class="absolute h-full w-full object-cover opacity-50">
    </div><br>

    <!-- Content -->
    <div class="container mx-auto px-4">
        <h2 class="text-xl font-bold mb-4 text-gray-800 sm:text-2xl md:text-4xl">Mata Pelajaran</h2>
        <div class="flex flex-col gap-4">
            <!-- Matematika Button -->
            <button class="flex justify-center bg-blue-700 text-white font-bold py-4 px-6 rounded-full hover:bg-blue-800 focus:outline-none text-2xl sm:text-3xl md:text-4xl">
                <span class="mr-2">π</span> 
                Matematika
            </button>
            <!-- Bahasa Inggris Button -->
            <button class="flex justify-center bg-blue-700 text-white font-bold py-4 px-6 rounded-full hover:bg-blue-800 focus:outline-none text-2xl sm:text-3xl md:text-4xl">
                <span class="mr-2">✏️</span> 
                Bahasa Inggris
            </button>
            <!-- Biologi Button -->
            <button class="flex justify-center bg-blue-700 text-white font-bold py-4 px-6 rounded-full hover:bg-blue-800 focus:outline-none text-2xl sm:text-3xl md:text-4xl">
                <span class="mr-2">🧬</span> 
                Biologi
            </button>
        </div>
    </div>

    <!-- Footer -->
    <div class="bg-blue-700 h-8 mt-4"></div>

    <script>
        // Script untuk mengatur toggle menu mobile
        document.getElementById('navbarToggle').addEventListener('click', function() {
            var mobileMenu = document.getElementById('mobileMenu');
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>
</html>
