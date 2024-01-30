<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use Illuminate\Validation\Rule;
use App\Models\UserProfile as Profile;

class ProfileForm extends Form
{
    public ?Profile $profile;
    // #[Validate('required')]
    // #[Validate('required')]
    public $user_id = '';
    public $pic_id = '';
    public $nama_profile = '';
    public $nomor_handphone_profile = '';
    public $email = '';

    public function rules()
    {
        return [
            'user_id' => [
                Rule::unique('user_profile')->ignore($this->user_id),
            ],
            'pic_id' => [
                'bail',
                'required',
            ],
            'nama_profile' => [
                'bail',
                'required',
                'min:3',
                'max:50'],
            'nomor_handphone_profile' => [
                'min:10',
                'max:13'
            ],
            'email' => [
                'email', 
                Rule::unique('user_profile','email'),
            ],
        ];
    }

    public function setPost(Profile $profile)
    {
        // $this->user_id = auth()->user()->id;
        $this->pic_id = $profile->pic_id;
        $this->nama_profile = $profile->nama_profile;
        $this->nomor_handphone_profile = $profile->nomor_handphone_profile;
        $this->email = $profile->email;
    }

    public function update()
    {
        $this->validate();
        $userId = auth()->user()->id;
        $findId = Profile::where('user_id', $userId)->first();

        // dd($findId->id);
        $updateProfile = Profile::find($findId->id);
        // $updateProfile->user_id = false;
        $updateProfile->update(
            // $this->all()
            $this->only([
                'pic_id',
                'nama_profile',
                'nomor_handphone_profile',
                'email',
            ])
        );
        $this->reset();
    }
}
