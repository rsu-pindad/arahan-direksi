<?php

namespace App\Livewire\Arahan\Aktivitas;

use Livewire\Component;

class ArahanAktivitasKomentar extends Component
{
    public $mc;
    public $editIdKomentar;

    public function mount($mc)
    {
        $this->mc = $mc;
    }
    public function render()
    {
        return view('livewire.arahan.aktivitas.arahan-aktivitas-komentar');
    }
}
