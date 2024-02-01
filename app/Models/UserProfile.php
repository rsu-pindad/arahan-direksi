<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class UserProfile extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'user_profile';

    protected $guarded = ['id'];

    protected $fillable = [
        'user_id',
        'pic_id',
        'nama_profile',
        'nomor_handphone_profile',
        'email',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function pic(){
        return $this->belongsTo(MasterPic::class, 'pic_id');
    }

    public function arahans()
    {
        return $this->hasMany(MasterArahan::class, 'user_profile_id','id');
    }

}
