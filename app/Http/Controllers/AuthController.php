<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{

    public function login() {
        return view('login.index',[
            'title' => 'Login',
            'navtitle' => 'home',
        ]);
    }


    public function authenticate(Request $request) {
        $credentials = $request->validate([
            'email' => 'required', 'email',
            'password' => 'required',
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/produk');
        }
        
        return back()->with('loginFailed','Login Gagal');

    }

    public function register() {
        return view('register.index',[
            'title' => 'Register',
            'navtitle' => 'home',
        ]);
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|max:255|',
            'username' => 'required|min:3|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        return redirect('/login')->with('registerSuccess','Register Berhasil');
    }

    public function logout(Request $request) {
        Auth::logout();
     
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('/');
    }
}
