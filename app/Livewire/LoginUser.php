<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Livewire\Beranda as Beranda;
use Session;
use Hash;

class LoginUser extends Component
{

    #[Validate('required', message:'mohon isi npp', translate:false)]
    public $npp = '';
    
    #[Validate('required', message:'mohon isi password', translate:false)]
    public $password = '';

    public function login()
    {
        $this->validate();
        // if(auth()->attempt([
        if(Auth::attempt([
            'npp' => $this->npp,
            'password' => $this->password
        ])){
            Session::regenerate();
            session()->flash('success', 'selamat datang kembali');
            // $this->session()->regenerate();
            return redirect('beranda');
            // redirect('beranda');
            // $this->redirect(Beranda::class);
        }else{
            // return $this->validate();
            session()->flash('failure', 'npp atau password salah');
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
            redirect('beranda');
        }
    }
}
