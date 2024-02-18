<?php

namespace App\Livewire\Profile;

use App\Livewire\Forms\ProfileForm as Form;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Locked;
use Livewire\Component;
use App\Models\UserProfile as Profile;
use App\Models\MasterPic as Pic;

class UserProfile extends Component
{
    public Form $form;
    #[Locked]
    public $pic = '';
    #[Locked]
    public $profiles = '';

    #[Computed]
    public function getPic()
    {
        return Pic::orderByDesc('nama_pic')->get();
    }

    #[Computed]
    public function getProfileId()
    {
        return Profile::firstWhere('user_id', auth()->user()->id);
    }

    // public function mount()
    // {
    //     $this->pic = $this->getPic();
    //     $this->profiles = $this->getProfileId();
    // }

    public function render()
    {
        return view('livewire.profile.user-profile');
    }

    public function clear()
    {
        $this->form->reset();
    }

    public function save()
    {
        $this->form->update();
    }
}
