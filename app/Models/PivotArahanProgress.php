<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PivotArahanProgress extends Model
{
    use HasFactory;

    protected $tables = 'master_arahan';

    protected $fillable = [
        'arahan_id',
        'progress_id',
    ];

    public function arahan(){
        return $this->belongsTo(MasterArahan::class, 'arahan_id');
    }

    public function progress(){
        return $this->belongsTo(MasterProgress::class, 'progress_id');
    }
}
