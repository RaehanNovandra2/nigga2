<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Document')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-700">
    <nav class="bg-blue-700 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ url('/') }}" class="text-white text-2xl font-bold">Education</a>
            <button id="menuButton" class="text-white md:hidden">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
            <ul id="navLinks" class="hidden md:flex space-x-6">
                <li><a href="{{ url('/') }}" class="text-white hover:text-gray-200">Home</a></li>
                <li><a href="#" class="text-white hover:text-gray-200">About</a></li>
                <li><a href="#" class="text-white hover:text-gray-200">Kelas</a></li>
            </ul>
        </div>
    </nav>
    <div class="container mx-auto mt-8">
    <div class="container mx-auto mt-10">
    <div class="max-w-md mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="px-6 py-8">
            <h2 class="text-2xl font-bold text-gray-800 text-center mb-4">Edit Profile</h2>
            <form action="{{ route('user.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                        Username
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="username" name="username" type="text" value="{{ old('username', $user->username) }}" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                        Password
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="password" name="password" type="password" placeholder="Leave blank if not changing">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                        Email
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="email" name="email" type="email" value="{{ old('email', $user->email) }}" required>
                </div>
                <div class="flex items-center justify-between">
                    <button 
                        class="bg-blue-700 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit">Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
    </div>
</body>
</html>
