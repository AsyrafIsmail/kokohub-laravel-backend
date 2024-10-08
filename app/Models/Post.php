<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    use HasFactory;

    protected $fillable = [
        'tag',
        'title',
        'content',
        'date',
    ];

    public function koko()
    {
        return $this->belongsTo(Koko::class, 'koko_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
