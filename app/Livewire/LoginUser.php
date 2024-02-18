<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;
// use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Session;

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
                return $this->redirect('beranda', navigate:false);
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
        Session::invalidate();
        Auth::logout();
        return redirect('/');
    }

    public function render()
    {
        if(!Auth::check()){
            return view('livewire.login-user');
        }else{
            return $this->redirect('beranda', navigate:true);
        }
    }
}
