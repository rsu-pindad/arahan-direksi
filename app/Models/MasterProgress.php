<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterProgress extends Model
{
    use HasFactory;

    protected $tables = 'master_progress';

    protected $fillable = [
        'status_progress',
    ];

}
