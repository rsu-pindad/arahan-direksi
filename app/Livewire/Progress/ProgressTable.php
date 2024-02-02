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
            Column::make("status", "status_progress")
                ->sortable()
                ->searchable(),
            DateColumn::make("Created at", "created_at")
                ->outputFormat('Y-m-d'),
        ];
    }
}
