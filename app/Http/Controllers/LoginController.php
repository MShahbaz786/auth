<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    
	public function loginForm()
    {
        return view('login.login');
    }

    public function login()
    {
        if (auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'The email or password is incorrect, please try again'
            ]);
        }
        
        return redirect()->to('/dashboard');
    }

    public function destroy()
    {
        auth()->logout();
        
        return redirect()->to('/');
    }
}
