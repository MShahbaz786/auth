<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Mail;

class ForgotPasswordController extends Controller
{
    public function forgotpasswordForm(){
    	return view('forgotpassword.forgotpassword');
    }

    public function sendResetPasswordLink(Request $request){
    	 $this->validate($request,[
            'email' => 'required',
        ]);    

    	$user = User::where('email',$request->email)->first();
    	if (!empty($user)) { 

			$token = str_random(32);

    		$user->reset_token = $token;
    		$user->save();

    		//Sending Mail to user
            Mail::send('forgotpassword.email', ['user' => $user, 'token' => $token], function ($message) use ($user)  {
            	$message->from('shahbaz7029@gmail.com','Project Team');

                $message->to($user->email, $user->name)->subject('Reset Password');  
            });

            return redirect('/login-form')->with('message','We sent an email to reset password.Check your inbox.');
    	}
    	else{
    		return back()->withErrors([
                'message' => 'The email is not existed in database']);
    	}	
	}

	public function resetPasswordToken($token){
		$data = User::where('reset_token',$token)->first();
		if (!empty($data)) { 
        return view('forgotpassword.reset_password',compact('data'));
        }else{
        	return back()->withErrors([
                'message' => 'Reset link does not matched']);
        }
    }

    public function resetPassword(Request $request){
    	 $this->validate($request,[
            'password' => 'required|min:6',
            'password_confirmation' => 'required|string|same:password',
        ]);	

        $user = User::where('email',$request->input('email'))->first();
        $user->password =  bcrypt($request->password);
        $user->reset_token = NULL;
        $user->save();
        return redirect('/login-form')->with('message','Password updated successfully.');
    }


}
