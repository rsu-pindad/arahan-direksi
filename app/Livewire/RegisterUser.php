<?php

namespace App\Livewire;

// use Illuminate\Validation\Rule;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use App\Models\User;
use App\Models\UserProfile;

#[Title('Registrasi User')]
class RegisterUser extends Component
{
    #[Validate('required', message:'mohon isi npp', translate:false)]
    #[Validate('min:3', message:'npp kurang dari 3', translate:false)]
    public $npp = '';
    
    #[Validate('required', message:'mohon isi password', translate:false)]
    #[Validate('min:6', message:'password kurang dari 6', translate:false)]
    public $password = '';

    public function save()
    {
        try {
            $this->validate();
            $userExists = User::where('npp', $this->npp)->exists(); 
            if($userExists){
                session()->flash('failure', 'npp sudah sudah digunakan');
            }else{
                $user = User::updateOrCreate(
                    $this->only(
                        ['npp','password'],
                        [
                            $this->npp,
                            Hash::make($this->password)
                        ]
                        )
                );
                if($user == true){    
                    $profile = UserProfile::updateOrCreate([
                        'user_id' => $user->id,
                    ]);
                    session()->flash('success', 'user berhasil di buat');
                    $this->redirect('/login');
                }else{
                    session()->flash('failure', 'terjadi kesalahan');
                }
            }
        } catch (\Illuminate\Database\QueryException $exception) {
            $errorInfo = $exception->getMessage();
            return $errorInfo;
        }
    }

    public function render()
    {
        return view('livewire.register-user');
    }
}
