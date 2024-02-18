<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Computed;
use Livewire\Form;
use Illuminate\Validation\Rule;
use App\Models\UserProfile as Profile;

class ProfileForm extends Form
{
    public ?Profile $profile;
    public $user_id = '';
    public $pic_id = '';
    public $nama_profile = '';
    public $nomor_handphone_profile = '';
    public $email = '';

    #[Computed]
    public function userIdProfile()
    {
        // return Profile::firstWhere('user_id', auth()->user()->id);
        return Profile::where('user_id', auth()->user()->id)->first();
    }

    public function mount()
    {
        $profiles = $this->userIdProfile();
        $this->pic_id = $profiles->pic_id ?? '';
        $this->nama_profile = $profiles->nama_profile ?? '';
        $this->nomor_handphone_profile = $profiles->nomor_handphone_profile ?? '';
        $this->email = $profiles->email ?? '';
    }

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
                'nullable',
                'min:10',
                'max:13'
            ],
            'email' => [
                'nullable',
                'email', 
                Rule::unique('user_profile','email'),
            ],
        ];
    }

    public function update()
    {
        try {
            $this->validate();
            $updateProfile = Profile::find($this->userIdProfile()->id);
            $updateProfile->update(
                $this->only([
                    'pic_id',
                    'nama_profile',
                    'nomor_handphone_profile',
                    'email',
                ])
            );
            $this->reset();
            session()->flash('success', 'profile diperbarui');
        } catch (\Illuminate\Database\QueryException $exception) {
            session()->flash('failure', $exception->getMessage());
        }
    }

}
