<!-- resources/views/dashboard.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-10">
        <h2 class="text-3xl font-bold text-gray-800 mb-4">User Dashboard</h2>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-2xl font-semibold mb-4">Registered Users</h3>
            <ul class="space-y-2">
                @foreach($users as $user)
                    <li class="p-4 bg-gray-100 rounded-lg shadow-sm">
                        Username: {{ $user->username }}, Email: {{ $user->email }}
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</body>
</html>
