<?php

namespace App\Livewire\Pic;

use Livewire\Attributes\Validate;
use Livewire\Component;
use App\Models\MasterPic as Pic;

class PicEdit extends Component
{
    public Pic $pic;
    public $pics = '';
    public $pic_id = '';

    #[Validate('required', message:'level pic diperlukan', translate:false)]
    #[Validate('min:1', message:'minimal level pic 1', translate:false)]
    #[Validate('max:6', message:'maksimal level pic 6', translate:false)]
    public $level_pic = '';
    
    #[Validate('required', message:'mohon isi keterangan pic',translate:false)]
    #[Validate('min:2', message:'keterangan kurang dari 2', translate:false)]
    public $nama_pic = '';

    
    public function mount($id)
    {
        $pics = Pic::where('id',$id)->first();
        $this->pic_id = $pics->id;
        $this->level_pic = $pics->level_pic;
        $this->nama_pic = $pics->nama_pic;
    }

    public function update()
    {
        try { 
            $this->validate();
            $picExists = Pic::where('nama_pic', $this->nama_pic)->exists();
            if($picExists){
                session()->flash('failure', 'nama level pic sudah ada');
            }else{

                $pics = Pic::where('id', $this->pic_id)->update(
                    $this->only([
                        'nama_pic',
                        'level_pic'])
                );
    
                if($pics == true){
                    session()->flash('success', 'nama level pic berhasil diperbarui');
                    $this->reset();
                }else{
                    session()->flash('failure', 'terjadi kesalahan');
                }
            }
            
        } catch (\Illuminate\Database\QueryException $exception) {
           return $exception->getMessage();
        }
    }

    public function placeholder()
    {
        return view('components.mist.placeholder');
    }

    public function render()
    {
        return view('livewire.pic.pic-edit');
    }
}
