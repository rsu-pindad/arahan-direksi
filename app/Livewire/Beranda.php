<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\MasterArahan as Arahan;

class Beranda extends Component
{
    public function render()
    {
        $arahan = Arahan::orderByDesc('created_at')->get();
        // $jumlah = Arahan::where('')

        return view('livewire.beranda')
        ->with([
            'title' => 'Arahan',
            'jumlah' => count($arahan),
            // 'target' => max()
        ]);
    }
}
