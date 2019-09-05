<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard','RegisterController@dashboard');

//Register routes
Route::get('/register-from', 'RegisterController@registerForm');
Route::post('register', 'RegisterController@registerUser');

//Login Routes
Route::get('/login-form', 'LoginController@loginForm');
Route::post('/login', 'LoginController@login');

//Logout route
Route::get('/logout', 'LoginController@destroy');

//Reset Password Routes
Route::get('/reset_password', 'ResetpasswordController@reset_password')->name('reset_password');
Route::post('PasswordUpdate','ResetpasswordController@PasswordUpdate')->name('password_update');


//Forgot Password Routes
Route::get('password_request','ForgotPasswordController@forgotpasswordForm')->name('password.request');
Route::post('/password-reset', 'ForgotPasswordController@sendResetPasswordLink')->name('sendResetPasswordLink');
Route::get('/reset-password/{token}', 'ForgotPasswordController@resetPasswordToken');
Route::post('/reset/password', 'ForgotPasswordController@resetPassword')->name('resetPassword');



