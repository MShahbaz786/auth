<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegisterController extends Controller
{


    public function index()
    {
        return view('home');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function registerForm()
    {
        return view('registration.register');
    }

    public function registerUser(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6|',
            'password-confirm' => 'required|same:password',
        ]);
        
        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt($request['password']),
        ]);
        
        auth()->login($user);
        
        return redirect()->to('/dashboard');
    }
}
