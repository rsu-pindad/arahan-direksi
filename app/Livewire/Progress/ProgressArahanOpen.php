<?php

namespace App\Livewire\Progress;

use Livewire\Component;
use App\Models\MasterArahan as Arahan;

class ProgressArahanOpen extends Component
{

    public Arahan $arahan;

    public function mount($id)
    {
        $this->arahan = Arahan::findOrFail($id)->first();
    }

    public function render()
    {
        return view('livewire.progress.progress-arahan-open');
    }
}
