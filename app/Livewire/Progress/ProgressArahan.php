<?php

namespace App\Livewire\Progress;

use Livewire\Component;
use App\Models\MasterProgress;

class ProgressArahan extends Component
{
    public function render()
    {
        return view('livewire.progress.progress-arahan')->with([
            'progress' => MasterProgress::orderBy('id')->get(),
        ]);
    }
}
