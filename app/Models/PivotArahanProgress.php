<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Concerns\HasUuids;

class PivotArahanProgress extends Model
{
    use HasFactory;

    protected $table = 'pivot_ap';
    protected $guarded = ['id'];

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
