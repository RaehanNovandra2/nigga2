<!DOCTYPE html>
<html>
<head>
    <title>Pengguna</title>
    @vite('resources/css/app.css') <!-- Tailwind CSS -->
</head>
<body>
    <div class="container mx-auto p-4">
        @if($selectedUser)
            <!-- Tampilan Detail Pengguna -->
            <h1 class="text-2xl font-bold mb-4">Detail Pengguna</h1>
            <div>
                <p><strong>Username:</strong> {{ $selectedUser->username }}</p>
                <p><strong>Email:</strong> {{ $selectedUser->email }}</p>
            </div>
            <a href="{{ route('pengguna.index') }}" class="text-blue-500 hover:underline">Kembali ke Daftar Pengguna</a>
        @else
            <!-- Tampilan Daftar Pengguna -->
            <h1 class="text-2xl font-bold mb-4">Daftar Pengguna</h1>
            <ul>
                @foreach($pengguna as $user)
                    <li class="mb-2">
                        <a href="{{ route('pengguna.index', ['user_id' => $user->id]) }}" class="text-blue-500 hover:underline">
                            {{ $user->username }} - {{ $user->email }}
                        </a>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
</body>
</html>
