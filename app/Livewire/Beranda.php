<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Beranda extends Component
{
    // public function render()
    // {
    //     // if(auth()->check()){
    //     if(Auth::check()){
    //         return view('livewire.beranda');
    //     }else{
    //         redirect('login');
    //     }
    // }

    public function pic()
    {
        return view('livewire.pic.pic');
    }
}
