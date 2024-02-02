<?php

namespace App\Livewire\Pic;

use Livewire\WithPagination;
// use Livewire\WithoutUrlPagination;
use Livewire\Component;
use App\Models\MasterPic;

class PicTable extends Component
{
    use WithPagination; 

    public $query = '';

    public $filterRow = '';

    public function render()
    {
        return view('livewire.pic.pic-table',[
            'pics' => MasterPic::where('nama_pic','like','%'.$this->query.'%')
            ->paginate(10),
        ]);
    }

    public function search()
    {
        $this->resetPage();
        $this->page = 1;
    }
}
