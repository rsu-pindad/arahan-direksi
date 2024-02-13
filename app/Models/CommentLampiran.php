<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class CommentLampiran extends Model
{
    use HasFactory, HasUuids;

    protected $table = ['comment_lampiran'];

    protected $fillable = [
        'comment_id',
        'nama_lampiran',
        'lokasi_lampiran',
    ];

    public function comment(){
        return $this->belongsTo(MasterComment::class, 'comment_id', 'id');
    }
}
