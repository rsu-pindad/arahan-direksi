<?php

namespace App\Livewire\Arahan;

use App\Livewire\Forms\AssignArahanForm as Form;
use Livewire\Component;
// use App\Models\PivotArahanProgress as Pivots;

class AssignArahan extends Component
{
    public Form $form;

    public function render()
    {
        return view('livewire.arahan.assign-arahan');
    }

    public function save()
    {
        $this->form->store();
    }

}
