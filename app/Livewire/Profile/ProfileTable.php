<?php

namespace App\Livewire\Profile;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\UserProfile;

class ProfileTable extends DataTableComponent
{
    protected $model = UserProfile::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setEmptyMessage('pencarian tidak di temukan');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("User id", "user_id")
                ->sortable(),
            Column::make("Pic id", "pic_id")
                ->sortable(),
                // ->emptyValue('belum di isi'),
            Column::make("Nama profile", "nama_profile")
                ->sortable(),
            Column::make("Nomor handphone profile", "nomor_handphone_profile")
                ->sortable(),
            Column::make("Email", "email")
                ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
        ];
    }
}
