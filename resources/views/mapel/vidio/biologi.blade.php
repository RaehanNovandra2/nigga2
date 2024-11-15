<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Education</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body class="bg-blue-900 text-white">

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

    <!-- Main Content -->
    <div class="p-6 bg-white text-black">
        <div class="flex space-x-4">
            <!-- Main Video -->
            <div class="w-2/3">
    <!-- Video element -->
    <video controls class="w-full h-full object-cover">
        <source src="{{ asset('assets/vidio/bts.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
</div>

            <!-- Video Description -->
            <div class="w-1/3">
                <h2 class="text-4xl font-bold">Enzim dan Metabolisme Organisme</h2>
                <p class="mt-2">Sel hidup bisa diibaratkan seperti pabrik kimia yang bergantung pada energi yang harus mengikuti berbagai kaidah kimia. Sementara itu, suatu reaksi kimia yang memungkinkan adanya adanya suatu kehidupan disebut juga dengan nama metabolisme.</p>
            </div>
        </div>

        <!-- Other Videos -->
        <div class="mt-6">
            <h3 class="text-xl font-bold mb-4">Video Lainnya</h3>
            <div class="grid grid-cols-3 gap-4">
                <!-- Video 1 -->
                <button>
                <a href="#">
                 <div class="bg-white shadow-md rounded overflow-hidden">
                <img src="{{ asset('assets/img/evolusi.jpg') }}" alt="Dilatasi" class="w-full h-50 object-cover">
                <div class="p-4">
                    <p class="font-bold text-center">Evolusi</p>
                </div>
            </div>
            </a>
            <button>
                <a href="#">
                 <div class="bg-white shadow-md rounded overflow-hidden">
                <img src="{{ asset('assets/img/metamorfosis.jpg') }}" alt="Dilatasi" class="w-full h-50 object-cover">
                <div class="p-4">
                    <p class="font-bold text-center">metamorfosis</p>
                </div>
            </div>
            </a>
            </button>
            </a>
            </button>
                <!-- Video 3 -->
                <button>
                <a href="#">
                 <div class="bg-white shadow-md rounded overflow-hidden">
                <img src="{{ asset('assets/img/pertumbuhan.jpg') }}" alt="Dilatasi" class="w-full h-50 object-cover">
                <div class="p-4">
                    <p class="font-bold text-center">Pertumbuhan dan Perkembangan</p>
                </div>
            </div>
            </a>
            </button>
            </div>
        </div>
    </div>
    
</body>
</html>
