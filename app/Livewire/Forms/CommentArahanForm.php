<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use App\Models\MasterComment;

class CommentArahanForm extends Form
{
    public ?MasterComment $comment;

    #[Validate('required')] 
    public $user_profile_id = '';

    #[Validate('required')] 
    public $arahan_id = '';

    #[Validate('required')] 
    public $body = '';

    public $parent_id = '';

    public function store()
    {
        try{
            $this->validate();
            MasterComment::updateOrCreate(
                $this->only([
                    'user_profile_id',
                    'arahan_id',
                    'parent_id',
                    'body',
                ])
            );
            $this->reset();
            session()->flash('success', 'berhasil menambahkan komentar');       
        } catch (\Illuminate\Database\QueryException $e) {
            session()->flash('failure', $e->getMessage());
        }
    }

}
