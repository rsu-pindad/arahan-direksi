<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use Illuminate\Validation\Rule;
use App\Models\PivotArahanProgress As Pivot;
use App\Models\MasterArahan As Arahan;


class AssignArahanForm extends Form
{
    public ?Pivot $pivot;

    public $arahan_id = '';
    public $progress_id = '';
    public $findIdArahan = '';

    public function rules()
    {
        return [
            'arahan_id' => [
                'required',
            ],
            'progress_id' => [
                'required',
            ]
        ];
    }

    public function setPost(Pivot $pivot)
    {
        // $this->user_id = auth()->user()->id;
        $this->arahan_id = $pivot->arahan_id;
        $this->progress_id = $pivot->progress_id;
    }

    function store()
    {
        try {
            $this->validate();
            // dd($this->validate());
            Arahan::where('id', $this->arahan_id)->update(['assign_status' => true]);

            Pivot::updateOrCreate(
                $this->only([
                    'arahan_id',
                    'progress_id',
                ])
            );
            $this->reset();
            session()->flash('success', 'assign berhasil');
        } catch (\Illuminate\Database\QueryException $exception) {
            session()->flash('failure',$exception->getMessage());
        }
    }

}
