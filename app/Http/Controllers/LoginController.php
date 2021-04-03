<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    function FormDN()
    {
        $password = Hash::make('123456');
        return view('Login.DN');
    }

    //
    function DangNhap(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
        /*
        $email = $request->email;
        $password = md5($request->password);
        $user = User::where([
            ['email', '=', $email],
            ['password', '=', $password]
        ])->first();
        //Thuc hien luu session => de biet da dang nhap thanh cong
        if($user==null){
            return redirect('dang-nhap');
        }
        session(['user' => $user->name]);
        return redirect('/');
        */
    }

}
