<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $inField = $request->validate([
            'npp' => ['required', 'min:3', Rule::unique('users', 'npp')],
            'password' => ['required', 'min:8']
        ]);
        $inField['password'] = bcrypt($inField['password']);

        $user = User::create($inField);
        auth()->login($user);
        return ('/')->with('success', 'selamat datang'.$user->npp);
    }

    public function login(Request $request){
        $inField = $request->validate([
            'npp_login' => 'required',
            'password_login' => 'required'
        ]);
        if(auth()->attempt([
            'npp' => $inField['npp_login'],
            'password' => $inField['npp_login']
        ])){
            $request->session()->regenerate();
            return redirect('/')->with('success', 'selamat datang kembali');
        }else{
            return redirect('/')->with('failure', 'npp atau password salah');
        }
    }
}
