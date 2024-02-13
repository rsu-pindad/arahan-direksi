<?php

namespace App\Livewire\Arahan;

use Livewire\Component;
use App\Livewire\Forms\ArahanForm as Form;

class StepperArahan extends Component
{
    public Form $form;
    public $select_pic = '';
    public $currentStep = 1;
    public $status = 1;

    public function render()
    {
        return view('livewire.arahan.stepper-arahan');
    }

    public function firstStepSubmit()
    {
        $this->currentStep = 2;
    }

    public function secondStepSubmit()
    {
        $this->currentStep = 3;
    }

    public function submitForm()
    {
        $this->currentStep = 1;
        $this->form->store();
    }

    public function back($step)
    {
        $this->currentStep = $step;
    }

    public function clearForm()
    {
        $this->reset();
    }

}
