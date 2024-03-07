<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function indexLogin(Request $request){
        return view('login.index');
    }

    public function authLogin(Request $request){
        $login = [
            'email' => 'required|email',
            'password' => 'required',
        ];

        if (Auth::attempt($login)) {
            $request->session()->regenerate();
            if (Auth::user()->role == 'admin' || Auth::user()->role == 'petugas') {
                return redirect('/dasboard/admin');
            } else{
                return redirect('/dasboard/user');
            }
        }
        return back()->with('loginError', 'Email or Password Not Match');
    }

    public function indexRegister(Request $request){
        return view('register.index');
    }

    public function storeRegister(Request $request) {
        $request->validate([
            'username' => 'required|unique',
            'email' => 'required|unique|email',
            'password' => 'required',
            'address' => 'required',
        ]);

        $username = $request->username;
        $email = $request->email;
        $password = $request->password;
        $address = $request->address;

        User::create([
            'username' => $username,
            'email' => $email,
            'password' => bcrypt($password),
            'address' => $address,
            'role' => 'user',
        ]);
        
        return redirect('/login')
        ->with('success', 'Regitrasi berhasil silahkan login !');
    }

    public function logout (Request $request) {
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerate();

        return redirect('/login');
    }
}
