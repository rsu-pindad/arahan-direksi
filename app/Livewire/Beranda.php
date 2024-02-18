<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\MasterArahan as Arahan;

class Beranda extends Component
{
    private $arahan = '';

    public function render()
    {
        $arahan = Arahan::orderByDesc('created_at')->take(5)->latest()->get();

        return view('livewire.beranda')
        ->with([
            'title' => 'Arahan',
            'jumlah' => count($arahan),
        ]);
    }
}
