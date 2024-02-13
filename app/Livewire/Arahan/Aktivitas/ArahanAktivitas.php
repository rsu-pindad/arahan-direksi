<?php

namespace App\Livewire\Arahan\Aktivitas;

use Livewire\Component;
use App\Models\UserProfile as Profile;

class ArahanAktivitas extends Component
{
    public function render()
    {
        return view('livewire.arahan.aktivitas.arahan-aktivitas')->with([
            'profiles' => Profile::firstWhere('user_id', auth()->user()->id),
        ]);
    }
}
