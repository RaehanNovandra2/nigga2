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
    <nav class="bg-blue-700 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="#" class="text-white text-xl font-bold">Education</a>
            <div class="hidden md:flex space-x-4">
                <a href="resources/views/homepage.blade.php" class="text-white hover:text-gray-300 font-bold">Home</a>
                <a href="#" class="text-white hover:text-gray-300 font-bold">About</a>
                <a href="resources/views/data-mata-pelajaran.blade.php
" class="text-white hover:text-gray-300 font-bold">Kelas</a>
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

    <!-- Rating Section -->
    <div class="bg-white text-black p-6">
        <h2 class="text-2xl font-bold mb-4">Rating <span class="text-red-500">❤</span></h2>

        <!-- Rating List -->
        <div class="space-y-6">
            <!-- Single Rating -->
            <div class="p-4 bg-gray-100 rounded-lg">
                <div class="flex items-center mb-2">
                    <!-- Star Ratings -->
                    <div class="flex space-x-1 text-yellow-400 text-4xl">
                        <span>&#9733;</span>
                        <span>&#9733;</span>
                        <span>&#9733;</span>
                        <span>&#9733;</span>
                        <span>&#9733;</span>
                    </div>
                </div>
                <p class="text-sm text-xl">Caca: website ini sangat membantu saya ketika saya kesulitan dengan materi yang saya pelajari</p><br>
                <input type="text" class="w-full py-2 px-4 rounded-full bg-gray-400 focus:outline-none opacity-50 placeholder-black" placeholder="Balas...">
            </div>

            <!-- Additional Ratings -->
            <div class="p-4 bg-gray-100 rounded-lg">
                <div class="flex items-center mb-2">
                    <div class="flex space-x-1 text-yellow-400 text-4xl">
                        <span>&#9733;</span>
                        <span>&#9733;</span>
                        <span>&#9733;</span>
                        <span>&#9733;</span>
                        
                    </div>
                </div>
                <p class="text-sm text-xl">Caca: website ini sangat membantu saya ketika saya kesulitan dengan materi yang saya pelajari</p><br>
                <input type="text" class="w-full py-2 px-4 rounded-full bg-gray-400 focus:outline-none opacity-50 placeholder-black" placeholder="Balas...">
            </div>

            <!-- Repeat for more ratings -->
            <div class="p-4 bg-gray-100 rounded-lg">
                <div class="flex items-center mb-2">
                    <div class="flex space-x-1 text-yellow-400 text-4xl">
                        <span>&#9733;</span>
                        <span>&#9733;</span>
                        <span>&#9733;</span>
                        <span>&#9733;</span>
                        <span>&#9733;</span>
                    </div>
                </div>
                <p class="text-sm text-xl">Caca: website ini sangat membantu saya ketika saya kesulitan dengan materi yang saya pelajari</p><br>
                <input type="text" class="w-full py-2 px-4 rounded-full bg-gray-400 focus:outline-none opacity-50 placeholder-black" placeholder="Balas...">
            </div>
        </div>
    </div>

</body>
</html>
