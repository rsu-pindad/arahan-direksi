<?php

namespace App\Livewire\Pic;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Columns\{ DateColumn, LinkColumn};
use App\Models\MasterPic;

class PicTable extends DataTableComponent
{
    protected $model = MasterPic::class;

    public function placeholder()
    {
        return view('components.mist.placeholder');
    }

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        // $this->setDefaultSort('level_pic', 'desc');
        $this->setSearchPlaceholder('cari nama pic');
        // $this->setSearchDebounce(1000);
        $this->setSearchThrottle(1300);
    }

    public function columns(): array
    {
        return [
            Column::make("id", "id")->hideIf(true),
            Column::make("nama", "nama_pic")
                ->sortable()
                ->searchable(),
            Column::make("level", "level_pic")
                ->sortable(),
            DateColumn::make("dibuat", "created_at")
                ->outputFormat('Y-m-d'),
            Column::make('aksi')
                ->label(
                    fn ($row, Column $column) => view('livewire.datatables.action-column')->with(
                        [
                            'viewLink' => '/pic/view/'.$row->id,
                            'editLink' => '/pic/edit/'.$row->id,
                            'deleteLink' => $row->id,
                            // 'viewLink' => route('pic-view', ['id' => $row]),
                            // 'editLink' => route('pic', ['id' => $row]),
                            // 'deleteLink' => route('pic', ['id' => $row]),
                        ]
                    )
                )->html(),
        ];
    }

    public function delete($id)
    {
        try {
            $pic = MasterPic::where('id', $id)->first();
            $pic->delete();
            if($pic == true){
                session()->flash('success', 'pic dihapus');
            }else{
                session()->flash('failure', 'terjadi kesalahan');
            }
        } catch (\Illuminate\Database\QueryException $exception) {
            return $exception->getMessage();
        }
    }

}
