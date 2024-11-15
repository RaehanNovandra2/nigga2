<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Register')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-700">
    <nav class="bg-blue-700 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ url('/') }}" class="text-white text-2xl font-bold">Education</a>
        </div>
    </nav>
    <div class="container mx-auto mt-8">
        @yield('content')
    </div>
</body>
</html>