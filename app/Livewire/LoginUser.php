<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;
// use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Livewire\Beranda as Beranda;
use Session;
// use Hash;

class LoginUser extends Component
{

    #[Validate('required', message:'mohon isi npp', translate:false)]
    public $npp = '';
    
    #[Validate('required', message:'mohon isi password', translate:false)]
    public $password = '';

    public function login()
    {
        try {    
            $this->validate();
            if(Auth::attempt([
                'npp' => $this->npp,
                'password' => $this->password
            ])){
                Session::regenerate();
                session()->flash('success', 'selamat datang kembali');
                return redirect('beranda');
            }else{
                session()->flash('failure', 'npp atau password salah');
            }
        } catch (\Illuminate\Database\QueryException $exception) {
            return $exception->getMessage();
        }
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        Session::invalidate();
        return redirect('login');
    }

    public function render()
    {
        if(!Auth::check()){
            return view('livewire.login-user');
        }else{
            return $this->redirect('beranda');
        }
    }
}
