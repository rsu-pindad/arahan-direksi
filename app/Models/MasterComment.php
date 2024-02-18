<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class MasterComment extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'master_comment';

    protected $guarded = ['id','user_profile_id', 'arahan_id'];

    protected $fillable = [
        'user_profile_id',
        'arahan_id',
        'parent_id',
        'body',
    ];

    public function user_profile(){
        return $this->belongsTo(UserProfile::class, 'user_profile_id');
    }

    public function arahan(){
        return $this->belongsTo(MasterArahan::class, 'arahan_id');
    }

    public function lampiran()
    {
        return $this->hasMany(CommentLampiran::class, 'comment_id','id');
    }

}
