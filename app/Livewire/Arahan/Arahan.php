<?php

namespace App\Livewire\Arahan;

use App\Livewire\Forms\ArahanForm as Form;
use Livewire\Component;

class Arahan extends Component
{
    public Form $form;

    public $select_pic = '';

    public function render()
    {
        return view('livewire.arahan.arahan');
    }

    public function save()
    {
        $this->form->store();
    }
}
