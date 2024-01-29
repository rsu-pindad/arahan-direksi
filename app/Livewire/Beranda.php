<?php

namespace App\Livewire;

use Livewire\Component;

class Beranda extends Component
{
    public function render()
    {
        if(auth()->check()){
            return view('livewire.beranda');
        }else{
            return $this->redirect('login');
        }
    }

    public function pic()
    {
        return view('livewire.pic.pic');
    }
}
