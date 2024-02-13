<?php

namespace App\Livewire\Progress;

use Livewire\Component;
use App\Models\MasterProgress As Progress;

class ProgressView extends Component
{
    public Progress $progress;
    public $previous;
    public $next;

    public function placeholder()
    {
        return view('components.mist.placeholder');
    }

    public function mount($id)
    {
        // $this->pic = Progress::findOrFail($id)->first();
        $this->progress = Progress::find($id);
        $this->previous = Progress::where('id', '<', $id)->max('id');
        $this->next = Progress::where('id', '>', $id)->min('id');
    }

    public function render()
    {
        return view('livewire.progress.progress-view');
    }
}
