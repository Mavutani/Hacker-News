<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['cid','parent','by', 'comment', 'time','type'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
