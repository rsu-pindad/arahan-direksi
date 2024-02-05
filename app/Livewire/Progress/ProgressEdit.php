<?php

namespace App\Livewire\Progress;

use Livewire\Attributes\Validate;
use Livewire\Component;
use App\Models\MasterProgress;

class ProgressEdit extends Component
{
    public MasterProgress $progress;
    public $has_progress = '';
    public $progress_id = '';
    
    #[Validate('required', message:'mohon isi nama progress',translate:false)]
    #[Validate('min:3', message:'nama progress kurang dari 3', translate:false)]
    public $status_progress = '';

    public function mount($id)
    {
        $has_progress = MasterProgress::where('id', $id)->first();
        $this->progress_id = $has_progress->id;
        $this->status_progress = $has_progress->status_progress;
    }

    public function update()
    {
        try { 
            $this->validate();
            $progExists = MasterProgress::where('status_progress', $this->status_progress)->exists();
            if($progExists){
                session()->flash('failure', 'nama progress sudah ada');
            }else{
                $prog = MasterProgress::where('id', $this->progress_id)->update(
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
        return view('livewire.progress.progress-edit');
    }
}
