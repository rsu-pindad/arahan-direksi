<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class MasterArahan extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'master_arahan';
    protected $guarded = ['id', 'user_profile_id'];

    protected $fillable = [
        'user_profile_id',
        'nama_arahan',
        'output_arahan',
        'target_selesai',
        'assign_status',
    ];

    public function user_profile(){
        return $this->belongsTo(UserProfile::class, 'user_profile_id');
    }

}
