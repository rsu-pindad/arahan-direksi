<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class BerandaController extends Controller
{
    public function render()
    {
        if(!Auth::check()){
            return redirect('login');
        }else{
            return view('livewire.beranda');
        }
    }
}
