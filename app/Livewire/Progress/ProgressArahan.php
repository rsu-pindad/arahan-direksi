<?php

namespace App\Livewire\Progress;

use Livewire\Component;
use App\Models\MasterProgress;
use App\Models\UserProfile;
use App\Models\PivotArahanProgress;

class ProgressArahan extends Component
{
    #[Reactive]
    public $pivot_id = '';
    public $progress_id = '';

    public function render()
    {
        return view('livewire.progress.progress-arahan')->with([
            'progress' => MasterProgress::orderBy('id')->get(),
        ]);
    }

    public function update()
    {
        try {
            $pivArahan = PivotArahanProgress::find('id', $pivot_id);
            $pivArahan->update(
                $this->only([
                    'progress_id',
                ])
            );
            // $this->dispatch('$refresh');
        } catch (\Illuminate\Database\QueryException $exception) {
            session()->flash('failure', $exception->getMessage());
        }
    }
}
