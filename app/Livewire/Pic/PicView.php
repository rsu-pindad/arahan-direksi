<?php

namespace App\Livewire\Pic;

use Livewire\Component;
use App\Models\MasterPic as Pic;

class PicView extends Component
{
    public Pic $pic;
    public $previous;
    public $next;

    public function placeholder()
    {
        return view('components.mist.placeholder');
    }

    public function mount($id)
    {
        // $this->pic = Pic::findOrFail($id)->first();
        $this->pic = Pic::find($id);
        $this->previous = Pic::where('id', '<', $id)->max('id');
        $this->next = Pic::where('id', '>', $id)->min('id');
    }

    public function render()
    {
        return view('livewire.pic.pic-view');
    }
}
