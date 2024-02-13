<?php

namespace App\Livewire\Progress;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Columns\{DateColumn};
use App\Models\MasterProgress;

class ProgressTable extends DataTableComponent
{
    protected $model = MasterProgress::class;

    public $columnSearch = [
        'status_progress' => null,
    ];

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setDefaultSort('status_progress', 'desc');
    }

    public function columns(): array
    {
        return [
            Column::make("id", "id")->hideIf(true),
            Column::make("status", "status_progress")
                ->sortable()
                ->searchable(),
            DateColumn::make("dibuat", "created_at")
                ->outputFormat('Y-m-d'),
            Column::make('aksi')
            ->label(
                fn ($row, Column $column) => view('livewire.datatables.action-column')->with(
                    [
                        'viewLink' => '/progress/view/'.$row->id,
                        'editLink' => '/progress/edit/'.$row->id,
                        'deleteLink' => $row->id,
                    ]
                )
            )->html(),
        ];
    }

    public function delete($id)
    {
        try {
            $progress = MasterProgress::where('id', $id)->first();
            $progress->delete();
            if($progress == true){
                session()->flash('success', 'progress dihapus');
            }else{
                session()->flash('failure', 'terjadi kesalahan');
            }
        } catch (\Illuminate\Database\QueryException $exception) {
            return $exception->getMessage();
        }
    }
}
