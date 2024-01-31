<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
// use Illuminate\Validation\Rule;
use Livewire\Component;
use App\Models\User;
use App\Models\UserProfile;

class RegisterUser extends Component
{
    #[Validate('required', 'mohon isi npp',false)]
    #[Validate('min:3', 'npp kurang dari 3', false)]
    public $npp = '';
    
    #[Validate('required', 'mohon isi password', false)]
    #[Validate('min:6', 'password kurang dari 6', false)]
    public $password = '';

    public function save()
    {
        try {
            $this->validate();
            $userExists = User::where('npp', $this->npp)->exists(); 
            if($userExists){
                session()->flash('failure', 'npp sudah ada');
            }else{
                $user = User::updateOrCreate(
                    $this->only(['npp','password'])
                );
                if($user == true){    
                    $profile = UserProfile::updateOrCreate([
                        'user_id' => $user->id,
                    ]);
                    session()->flash('success', 'pic berhasil di buat');
                    $this->redirect('/login');
                }else{
                    session()->flash('failure', 'terjadi kesalahan');
                }
            }

        } catch (\Illuminate\Database\QueryException $exception) {
            $errorInfo = $exception->getMessage();
            return $errorInfo;;
        }
    }

    public function render()
    {
        return view('livewire.register-user');
    }
}
