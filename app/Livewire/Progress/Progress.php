<?php

namespace App\Livewire\Progress;

use Livewire\Attributes\Validate;
use Livewire\Component;
use App\Models\MasterProgress;

class Progress extends Component
{
    #[Validate('required', message:'mohon isi nama progress',translate:false)]
    #[Validate('min:3', message:'nama progress kurang dari 3', translate:false)]
    public $status_progress = '';

    public function save()
    {
        try { 
            $this->validate();
            $progExists = MasterProgress::where('status_progress', $this->status_progress)->exists();
            if($progExists){
                session()->flash('failure', 'nama progress sudah ada');
            }else{
                $prog = MasterProgress::updateOrCreate(
                    $this->only(['status_progress'])
                );
    
                if($prog == true){
                    session()->flash('success', 'nama progress berhasil di buat');
                    $this->reset();
                }else{
                    session()->flash('failure', 'terjadi kesalahan');
                }
            }
            
        } catch (\Illuminate\Database\QueryException $exception) {
            return $exception->getMessage();
        }
    }

    public function render()
    {
        return view('livewire.progress.progress');
    }
}
