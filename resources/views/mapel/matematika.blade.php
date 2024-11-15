<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Education</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body class="bg-white">

    <!-- Navbar -->
    <nav class="bg-blue-700 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="#" class="text-white text-xl font-bold">Education</a>
            <div class="hidden md:flex space-x-4">
                <a href="#" class="text-white hover:text-gray-300 font-bold">Home</a>
                <a href="#" class="text-white hover:text-gray-300 font-bold">About</a>
                <a href="mapel.html" class="text-white hover:text-gray-300 font-bold">Kelas</a>
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
            <a href="mapel.html" class="block text-gray-300 hover:text-white">Kelas</a>
            <a href="#" class="block text-gray-300 hover:text-white">Rating</a>
        </div>
    </nav>

    <!-- Search and Title Section -->
    <div class="px-8 py-4">
        <div class="relative">
            <input type="text" class="w-full py-2 px-4 rounded-full bg-blue-700 focus:outline-none opacity-20" placeholder="Search...">
            <button class="absolute top-0 right-0 mt-2 mr-4">
                <svg class="w-5 h-5 text-gray-500" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.9 14.32a8 8 0 1 1 1.42-1.42l4.58 4.58a1 1 0 0 1-1.42 1.42l-4.58-4.58zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"/></svg>
            </button>
        </div>
    </div>

    <!-- Main Content -->
    <div class="px-8">
        <h1 class="text-2xl font-bold mt-4">Materi Matematika kelas 12</h1>
        <p class="text-gray-600">Transformasi fungsi</p>

        <hr class="my-4 border-gray-300">

        <h2 class="text-xl font-bold mb-4">Video Tutorial</h2>

        <!-- Video Tutorial Section -->
        <div class="grid grid-cols-3 gap-4">
            <!-- Card 1 -->
            <button>
                <a href="#">
                 <div class="bg-white shadow-md rounded overflow-hidden">
                <img src="{{ asset('assets/img/rotasi.jpg') }}" alt="Dilatasi" class="w-full h-50 object-cover">
                <div class="p-4">
                    <p class="font-bold text-center">Rotasi</p>
                </div>
            </div>
            </a>
            </button>

            <!-- Card 2 -->
            <button>
                <a href="#">
                 <div class="bg-white shadow-md rounded overflow-hidden">
                <img src="{{ asset('assets/img/translasi.jpg') }}" alt="Dilatasi" class="w-full h-43 object-cover">
                <div class="p-4">
                    <p class="font-bold text-center">Translasi</p>
                </div>
            </div>
            </a>
            </button>

            <!-- Card 3 -->
            <button>
                <a href="#">
                 <div class="bg-white shadow-md rounded overflow-hidden">
                <img src="{{ asset('assets/img/dilatasi.jpg') }}" alt="Dilatasi" class="w-full h-50 object-cover">
                <div class="p-4">
                    <p class="font-bold text-center">Dilatasi</p>
                </div>
            </div>
            </a>
            </button>
        </div>
    </div>

</body>
</html>
