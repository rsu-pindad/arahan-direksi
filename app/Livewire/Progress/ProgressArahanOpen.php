<?php

namespace App\Livewire\Progress;

use Illuminate\Support\Facades\Route;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\Attributes\Computed;
use App\Models\MasterArahan as Arahan;
use App\Models\UserProfile as Profile;
use App\Models\MasterComment;
use App\Models\PivotArahanProgress as Pap;
use App\Livewire\Forms\CommentArahanForm as Form;

class ProgressArahanOpen extends Component
{

    public Form $form;

    public $pivots = '';
    public $arahan = '';
    public $mastercomment = '';
    public $editIdKomentar = '';
    public $editBodyKomentar = '';
    public $editIdPivot = '';
    public $profiles = '';

    // #[Computed(persist: true)]
    private function user_profile()
    {
        return Profile::where('user_id', auth()->user()->id)->first();
    }

    // #[Computed(persist: true)]
    private function arahanId()
    {
        return Arahan::where('id', Route::current()->id)->first();
    }

    // #[Computed(persist: true)]
    public function pivotId()
    {
        return Pap::where('arahan_id', Route::current()->id)->first();
    }

    public function komentar()
    {
        return MasterComment::where('arahan_id', Route::current()->id)->orderByDesc('created_at')->get();
    }

    public function mount()
    {
        $this->arahan = $this->arahanId();
        $this->pivots = $this->pivotId();
        $this->mastercomment = $this->komentar();
        $this->profiles = $this->user_profile();

        $this->form->user_profile_id = $this->user_profile()->id;
        $this->form->arahan_id = $this->arahanId()->id;
    }

    public function render()
    {
        return view('livewire.progress.progress-arahan-open');
        // ->with([
        //     'pivot' => Pap::where('arahan_id', Route::current()->id)->first(),
        //     'profiles' => Profile::firstWhere('user_id', auth()->user()->id),
        //     'mastercomment' => MasterComment::where('arahan_id', Route::current()->id)->orderByDesc('created_at')->get(),
        // ]);
    }

    public function post()
    {
        $this->form->store();
    }

    public function hapusKomentar(MasterComment $komentar)
    {
        // MasterComment::find($idKomentar)->delete();
        $komentar->delete();
    }

    public function editKomentar($idKomentar)
    {
        $this->editIdKomentar = $idKomentar;
        $this->editBodyKomentar = MasterComment::find($idKomentar)->body;
    }

    public function dispath()
    {
        try {
            // dd($this->validate());
            $exist = Pap::where('arahan_id', Route::current()->id)->exists();
            if($exist){
                    session()->flash('failure', 'pivot arahan tidak valid');
                }else{
                    
                    $pivotIds = Pap::where('id', $this->pivotId->id)->first();
                    // dd($pivotIds->id);
                $pivot = Pap::where('id', $pivotIds->id)->update(
                    ['progress_id' => $this->editIdPivot]
                );
    
                if($pivot == true){
                    // $this->location->refresh();
                    // $this->dispatch('$refresh');
                    $this->refreshComponent();
                    session()->flash('success', 'dispath berhasil');
                    // $this->reset();
                }else{
                    session()->flash('failure', 'terjadi kesalahan');
                }
            }
        } catch (\Illuminate\Database\QueryException $exception) {
            session()->flash('failure', $exception->getMessage());
        }
    }

    public function close()
    {
        $this->reset();
    }

    // #[On('posted')]
    // public function refreshKomentar()
    // {

    // }

}
