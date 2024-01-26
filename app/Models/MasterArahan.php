<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterArahan extends Model
{
    use HasFactory;

    protected $tables = 'master_arahan';

    protected $fillable = [
        'user_id',
        'nama_arahan',
        'output_profile',
        'target_selesai',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

}
