<?php

namespace App\Livewire\Profile;

use App\Livewire\Forms\ProfileForm as Form;
use Livewire\Component;
use App\Models\UserProfile as Profile;
use App\Models\MasterPic as Pic;

class Userprofile extends Component
{
    public Profile $userProfile;
    public Form $form;

    public function mount()
    {
        $this->userProfile = Profile::firstWhere('user_id', auth()->user()->id);
    }

    public function render()
    {
        return view('livewire.profile.userprofile')->with([
            'pic' => Pic::orderByDesc('nama_pic')->get(),
            'profiles' => Profile::firstWhere('user_id', auth()->user()->id),
        ]);
    }

    public function save()
    {
        $this->form->update();
    }
}
