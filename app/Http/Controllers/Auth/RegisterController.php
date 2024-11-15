<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Pengguna; // Pastikan Anda menggunakan model Pengguna, bukan User
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('register'); // Menampilkan form registrasi
    }

    public function pengguna(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255|unique:pengguna', // Tabel 'pengguna'
            'email' => 'required|string|email|max:255|unique:pengguna', // Tabel 'pengguna'
            'password' => 'required|string|min:6|confirmed',
        ]);

        Pengguna::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->away('/')->with('success', 'Registration successful!');

}
}