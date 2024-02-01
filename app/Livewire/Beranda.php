<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Beranda extends Component
{
    public function pic()
    {
        return view('livewire.pic.pic');
    }
}
