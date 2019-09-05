<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resetpassword;
use Auth;
use Hash;
use App\User;
use Illuminate\Support\Facades\Input;
class ResetpasswordController extends Controller
{
    public function reset_password()
    {
        return view('resetpassword');
    }

    public function PasswordUpdate(Request $request)
    {
         $this->validate($request, [
            'old_password'     => 'required',
            'password'     => 'required|min:6',
            'password_confirmation' => 'required|same:password',
        ]);
                      
        $user = User::find(Auth::User()->id);
        if(!Hash::check($request->old_password,$user->password)){
            return back()->with('message','Password does not match with old password');
        }else{
			$user->password = Hash::make($request->password_confirmation);
			//$user->password = bcrypt($request->password);same as above can use bcrypt or hash for hiding/hashng password
			$user->save();
           return back()->with('message','Password Updated Saccessfully!');
        }
    }
}
