<?php

namespace App\Livewire\Progress;

use Livewire\Attributes\Reactive;
use Livewire\Component;
use App\Models\MasterProgress as Progress;
use App\Models\PivotArahanProgress as Pap;

class ProgressArahan extends Component
{
    #[Reactive]
    public $pivot_id = '';
    public $progress_id = '';

    public function render()
    {
        return view('livewire.progress.progress-arahan')->with([
            'progress' => Progress::orderBy('id')->get(),
        ]);
    }

    public function update()
    {
        try {
            $pivArahan = Pap::find('id', $this->pivot_id);
            $pivArahan->update(
                $this->only([
                    'progress_id',
                ])
            );
        } catch (\Illuminate\Database\QueryException $exception) {
            session()->flash('failure', $exception->getMessage());
        }
    }
}
