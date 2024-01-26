<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterPic extends Model
{
    use HasFactory;

    protected $tables = 'master_pic';

    protected $fillable = [
        'nama_pic',
        'leve_pic',
    ];
}
