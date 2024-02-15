<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;
use App\Models\MasterComment;

class CommentArahanForm extends Form
{
    public ?MasterComment $comment;

    #[Rule('required')]
    public $user_profile_id = '';
    
    #[Rule('required')]
    public $arahan_id = '';
    
    #[Rule('required')]
    public $body = '';

    public $parent_id = '';

    public function rules()
    {
        return [
            'user_profile_id' => [
                'required',
            ],
            'arahan_id' => [
                'required',
            ],
            'body' => [
                'bail',
                'required',
                'min:3',
                'max:50'],
        ];
    }

    public function setPost(MasterComment $comment)
    {
        // $this->user_id = auth()->user()->id;
        $this->user_profile_id = $comment->user_profile_id;
        $this->arahan_id = $comment->arahan_id;
        $this->parent_id = $comment->parent_id;
        $this->body = $comment->body;
    }

    public function store()
    {
        try{
            // $this->validateOnly([
            //     'user_profile_id',
            //     'arahan_id',
            //     'parent_id',
            //     'body',
            // ]);
            $this->validate();
            MasterComment::updateOrCreate(
                $this->only([
                    'user_profile_id',
                    'arahan_id',
                    'parent_id',
                    'body',
                ])
            );
            $this->reset('body');
            session()->flash('success', 'berhasil menambahkan komentar');       
        } catch (\Illuminate\Database\QueryException $e) {
            session()->flash('failure', $e->getMessage());
        }
    }

}
