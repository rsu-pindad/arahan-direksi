<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use Illuminate\Validation\Rule;
use App\Models\MasterArahan as Arahan;

class ArahanForm extends Form
{
    public ?Arahan $arahan;
    
    public $user_profile_id = '';
    public $nama_arahan = '';
    public $output_arahan = '';
    public $target_selesai = '';
    public $pic_id = '';

    public function setPost(Arahan $arahan)
    {
        $this->user_profile_id = $arahan->user_profile_id;
        $this->nama_arahan = $arahan->nama_arahan;
        $this->output_arahan = $arahan->output_arahan;
        $this->target_selesai = $arahan->target_selesai;
        // $this->pic_id = $arahan->pic_id;
    }

    public function rules()
    {
        return [
            'user_profile_id' => [
                'required',
            ],
            'nama_arahan' => [
                'required',
            ],
            'output_arahan' => [
                'required',
            ],
        ];
    }

    public function store()
    {
        try {
            $this->validate();
            Arahan::updateOrCreate(
                // $this->all()
                $this->only([
                    'user_profile_id',
                    'nama_arahan',
                    'output_arahan',
                    'target_selesai',
                ])
            );
            $this->reset();
            session()->flash('success', 'disimpan');
        } catch (\Illuminate\Database\QueryException $exception) {
            session()->flash('failure', $exception->getMessage());
        }
    }

}
