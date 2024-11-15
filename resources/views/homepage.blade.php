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
            <a href="{{route ('biologi')}}" class="block text-gray-300 hover:text-white">Kelas</a>
            <a href="#" class="block text-gray-300 hover:text-white">Rating</a>
        </div>
    </nav>

    <div class="relative flex justify-center items-center h-[300px] sm:h-[400px] md:h-[500px] w-full bg-blue-800">
        <img src="data:image/jpeg;base64,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" alt="Example Image" class="absolute inset-0 h-full w-full object-cover opacity-50">
        <div class="relative text-center">
            <h1 class="text-white text-4xl md:text-5xl font-bold">Welcome to Education</h1>
            <p class="text-white text-lg mt-2">Your journey starts here</p>
        </div>
    </div><br>

    <h1 class="text-2xl font-bold text-center mt-8">Kelas yang Tersedia:</h1>
<div class="container mx-auto flex flex-wrap justify-center mt-10 space-y-6 sm:space-y-0 md:space-y-0 md:justify-evenly">
    <div class="w-full sm:w-auto sm:flex-1 max-w-xs bg-white rounded-lg shadow-lg overflow-hidden border-4 border-black p-6 mx-2">
        <div class="flex items-center bg-gray-300 p-6 rounded-lg">
            <h2 class="text-2xl mx-5"><i class="fa-solid fa-person-chalkboard" style="font-size: 60px;"></i></h2>
            <h1 class="text-5xl font-bold text-blue-800">10</h1>
        </div>
    </div>

    <div class="w-full sm:w-auto sm:flex-1 max-w-xs bg-white rounded-lg shadow-lg overflow-hidden border-4 border-black p-6 mx-2">
        <div class="flex items-center bg-gray-300 p-6 rounded-lg">
            <h2 class="text-2xl mx-5"><i class="fa-solid fa-person-chalkboard" style="font-size: 60px;"></i></h2>
            <h1 class="text-5xl font-bold text-blue-800">11</h1>
        </div>
    </div>

    <div class="w-full sm:w-auto sm:flex-1 max-w-xs bg-white rounded-lg shadow-lg overflow-hidden border-4 border-black p-6 mx-2">
        <div class="flex items-center bg-gray-300 p-6 rounded-lg">
            <h2 class="text-2xl mx-5"><i class="fa-solid fa-person-chalkboard" style="font-size: 60px;"></i></h1>
            <h1 class="text-5xl font-bold text-blue-800">12</h1>
        </div>
    </div>
</div><br><br>

    <div class="relative flex justify-center items-center h-[150px] sm:h-[200px] md:h-[250px] w-full bg-blue-800">
        <img src="https://th.bing.com/th/id/OIP.XLCcc3deznBt-plcey5FcgHaD4?w=292&h=180&c=7&r=0&o=5&pid=1.7" alt="Rating Background" class="absolute inset-0 h-full w-full object-cover opacity-20">
        <div class="absolute inset-0 flex flex-col justify-center items-center">
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-yellow-400">80%</h1>
            <h2 class="text-xl sm:text-2xl md:text-3xl font-bold text-yellow-400">Rating Keseluruhan</h2>
        </div>
    </div><br>

    <div class="text-black flex flex-col justify-center items-center">
        <h1 class="text-1xl font-bold" style="font-size: 40px;">Tentang Kami</h1>
        <p class="text-1xl  text-center mt-2 max-w-xl">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy 
            text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
    </div><br>
    <div class="flex justify-center items-center">
        <div class="bg-blue-800 p-6  shadow-md h-[320px] w-full">
            <h1 class="text-yellow-400 text-2xl font-bold mb-4">Come Find Us!</h1>
            <div class="space-y-4">
                <div class="flex items-center">
                    <i class="fab fa-youtube text-white text-2xl mr-4"></i>
                    <span class="text-white">input username</span>
                </div>
                <div class="flex items-center">
                    <i class="fab fa-instagram text-white text-2xl mr-4"></i>
                    <span class="text-white">input username</span>
                </div>
                <div class="flex items-center">
                    <i class="fab fa-facebook text-white text-2xl mr-4"></i>
                    <span class="text-white">input username</span>
                </div>
                <div class="flex items-center">
                    <i class="fas fa-envelope text-white text-2xl mr-4"></i>
                    <span class="text-white">input username</span>
                </div>
                <div class="flex items-center">
                    <i class="fab fa-twitter text-white text-2xl mr-4"></i>
                    <span class="text-white">input username</span>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('navbarToggle').addEventListener('click', function() {
            var menu = document.getElementById('mobileMenu');
            menu.classList.toggle('hidden');
        });
    </script>

</body>

</html>
