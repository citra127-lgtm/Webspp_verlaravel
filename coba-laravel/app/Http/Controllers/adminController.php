<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adminController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (admin::attempt($credentials)) {
            // Jika otentikasi berhasil
            return redirect('/spp/index')->intended('/');
        }

        // Jika otentikasi gagal
        return redirect()->route('login')->withErrors(['error' => 'Invalid credentials']);
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
