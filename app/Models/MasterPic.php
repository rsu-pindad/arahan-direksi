<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterPic extends Model
{
    use HasFactory;

    protected $table = 'master_pic';

    protected $guarded = ['id'];

    protected $fillable = [
        'nama_pic',
        'level_pic',
    ];
}
