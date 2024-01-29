<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;

class LoginUser extends Component
{

    #[Validate('required', 'mohon isi npp',false)]
    public $npp = '';
    
    // #[Validate('required', 'mohon isi password', false)]
    public $password = '';

    public function login()
    {
        $this->validate();
        if(auth()->attempt([
            'npp' => $this->npp,
            'password' => $this->password
        ])){
            // $this->session()->regenerate();
            return $this->redirect('beranda');
        }else{
            // return $this->validate();
            session()->flash('failure', 'npp atau password salah');
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/login');
    }

    public function render()
    {
        if(auth()->check()){
            return $this->redirect('/beranda');
        }else{
            return view('livewire.login-user');
        }
    }
}
