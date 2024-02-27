<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'author',
        'content',
        'article_id'
    ];

    public function articles(){
        return $this->hasOne(Article::class);
    }
}
