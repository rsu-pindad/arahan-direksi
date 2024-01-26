<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;

    protected $tables = 'user_profile';

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

}
