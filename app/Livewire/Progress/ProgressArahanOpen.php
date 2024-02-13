<?php

namespace App\Livewire\Progress;

use App\Models\MasterArahan;
use Illuminate\Support\Facades\Route;
use Livewire\Component;
use Livewire\Attributes\Computed;
use App\Models\MasterArahan as Arahan;
use App\Models\UserProfile as Profile;
use App\Livewire\Forms\CommentArahanForm as Form;

class ProgressArahanOpen extends Component
{
    public Form $form;

    public $arahan;

    #[Computed]
    public function user_profile()
    {
        return Profile::where('user_id', auth()->user()->id)->first();
    }

    #[Computed]
    public function arahan()
    {
        return Arahan::where('id', Route::current()->id)->first();
    }

    public function mount($id)
    {
        // dd($id);
        $this->arahan = Arahan::where('id',$id)->first();
        $this->form->user_profile_id = $this->user_profile->id;
        $this->form->arahan_id = $this->arahan->id;
        // dd($this->arahan);
    }

    public function render()
    {
        return view('livewire.progress.progress-arahan-open')->with([
            'profiles' => Profile::firstWhere('user_id', auth()->user()->id),
        ]);
    }

    public function post()
    {
        $this->form->store();
    }
}
